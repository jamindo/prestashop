<?php 
#####################################################################################################
#
#					Module pour la plateforme de paiement PayZen
#						Version : 1.1 (révision 50362)
#									########################
#					Développé pour Prestashop
#						Version : 1.5.0.x
#						Compatibilité plateforme : V2
#									########################
#					Développé par Lyra Network
#						http://www.lyra-network.com/
#						19/08/2013
#						Contact : support@payzen.eu
#
#####################################################################################################

/*
* NOTICE OF LICENSE
*
* This source file is Licensed under the Open Software License version 3.0
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
**/

/**
 * Instant payment notification file. Wait for PayZen payment confirmation, then validate order.
 */

require_once dirname(dirname(dirname(__FILE__))) . '/config/config.inc.php';
require_once dirname(dirname(dirname(__FILE__))) . '/init.php';

require_once(dirname(__FILE__) . '/payzen.php');

if (($cartId = Tools::getValue('vads_order_id')) && ($hash = Tools::getValue('vads_hash'))) {
	$transId = Tools::getValue('vads_trans_id');
	
	$cart = new Cart($cartId);
	
	// Cart errors
	if (!Validate::isLoadedObject($cart)) {
		die('<span style="display:none">KO-' . $transId . "=Impossible de retrouver la commande\n</span>");
	} elseif($cart->nbProducts() <= 0) {
		die('<span style="display:none">KO-' . $transId . "=Le panier a ete vide avant la redirection\n</span>");
	}
	
	// Reload shop context
	Shop::setContext(Shop::CONTEXT_SHOP, (int)$cart->id_shop);
	
	// Reload language context
	Context::getContext()->language = new Language((int)$cart->id_lang);
	
	/** @var PayzenResponse $payzenResponse */
	$payzenResponse = new PayzenResponse(
			$_POST,
			Configuration::get('PAYZEN_MODE'),
			Configuration::get('PAYZEN_KEY_TEST'),
			Configuration::get('PAYZEN_KEY_PROD')
	);
	
	// Check the authenticity of the request
	if (!$payzenResponse->isAuthentified()) {
		die($payzenResponse->getOutputForGateway('auth_fail'));
	}
	
	// Search order in db
	$orderId = Order::getOrderByCartId($cart->id);
	
	if ($orderId == false) { // Order has not been accepted yet
		$module = new Payzen();
		
		if ($payzenResponse->isAcceptedPayment()) {
			// Payment OK
			$module->saveOrder($cart, Configuration::get('PS_OS_PAYMENT'), $payzenResponse);
			
			// Response to server
			die ($payzenResponse->getOutputForGateway('payment_ok'));
		} else {
			// Payment KO
			if(Configuration::get('PAYZEN_FAILURE_MANAGEMENT') == Payzen::ON_FAILURE_SAVE) {
				// Option 1 choosen (save order)
				$orderState = $payzenResponse->isCancelledPayment() ? Configuration::get('PS_OS_CANCELED') : Configuration::get('PS_OS_ERROR');
				$module->saveOrder($cart, $orderState, $payzenResponse);
			} 
			
			die($payzenResponse->getOutputForGateway('payment_ko'));
		}
	} else {
		// Order already registered
		$order = new Order((int)$orderId);
		
		if ($order->getCurrentState() == Configuration::get('PS_OS_PAYMENT')) {
			if($payzenResponse->isAcceptedPayment()) {
				// Just display a confirmation message
				die($payzenResponse->getOutputForGateway('payment_ok_already_done'));
			} else {
				// Order saved with success status while payment failed 
				die($payzenResponse->getOutputForGateway('payment_ko_on_order_ok'));
			}
		} else {
			// Option 1 chosen (order is saved : change order state)
				
			if($payzenResponse->isAcceptedPayment()) {
				$orderState = Configuration::get('PS_OS_PAYMENT');
				$msg = 'payment_ok';
			} else {
				if($payzenResponse->isCancelledPayment()) {
					$orderState = Configuration::get('PS_OS_CANCELED');
				} else {
					$orderState = Configuration::get('PS_OS_ERROR');
				}
				$msg = 'payment_ko_already_done';
			}
			
			$order->setCurrentState($orderState);
			die($payzenResponse->getOutputForGateway($msg));
		}
	}
}

?>