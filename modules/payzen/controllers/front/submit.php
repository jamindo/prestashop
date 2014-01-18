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
* This source file is licensed under the Open Software License version 3.0
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
**/

/**
 * This controller manages return from PayZen payment gateway.
 */
class PayzenSubmitModuleFrontController extends ModuleFrontController {
	public $display_column_left = false;
	
	private $currentCart;
	
	public function postProcess() {
		$this->currentCart = new Cart((int)Tools::getValue('vads_order_id'));
		
		// Cart errors
		if (!Validate::isLoadedObject($this->currentCart) || $this->currentCart->nbProducts() <= 0) {
			Tools::redirectLink(__PS_BASE_URI__);
		}
		
		if ($this->currentCart->id_customer == 0 || $this->currentCart->id_address_delivery == 0 || $this->currentCart->id_address_invoice == 0 || !$this->module->active) {
			Tools::redirect('index.php?controller=order&step=1');
		}
		
		$customer = new Customer($this->currentCart->id_customer);
		if (!Validate::isLoadedObject($customer)) {
			Tools::redirect('index.php?controller=order&step=1');
		}
		
		$this->processPaymentReturn();
	}
	
	private function processPaymentReturn() {
		/** @var PayzenResponse $payzenResponse */
		$payzenResponse = new PayzenResponse(
				$_REQUEST,
				Configuration::get('PAYZEN_MODE'),
				Configuration::get('PAYZEN_KEY_TEST'),
				Configuration::get('PAYZEN_KEY_PROD')
		);
		
		// Check the authenticity of the request
		if (!$payzenResponse->isAuthentified()) {
			Tools::redirectLink(__PS_BASE_URI__);
		}
		
		$cartId = $this->currentCart->id;
		
		// Search order in db
		$orderId = Order::getOrderByCartId($cartId);
		
		if ($orderId == false) { // Order has not been accepted yet
			if ($payzenResponse->isAcceptedPayment()) {
				// Payment OK
				$order = $this->module->saveOrder($this->currentCart, Configuration::get('PS_OS_PAYMENT'), $payzenResponse);
					
				// Display success message
				$link = 'index.php?controller=order-confirmation&id_cart=' . $cartId
						. '&id_module=' . $this->module->id . '&id_order=' . $order->id . '&key='
						. $order->secure_key;
				
				if (Configuration::get('PAYZEN_MODE') == 'TEST') {
					// ctx_mode=TEST => the user is the webmaster
					// order has not been paid, but we receive a successful payment code => automatic response didn't work
					// So we display a warning about the not working check_url
					
					$link .= "&check_url_warn=yes&prod_info=yes";
				}
				
				// Amount paid not equals initial amount. Error !
				if (number_format($order->total_paid, 2) != number_format($payzenResponse->getFloatAmount(), 2)) {
					$link .= "&error=yes";
				}
				
				Tools::redirect($link);
				
			} else {
				// Payment KO
				if(Configuration::get('PAYZEN_FAILURE_MANAGEMENT') == Payzen::ON_FAILURE_SAVE) {
					// Option 1 choosen (save order and go to history)
					$orderState = $payzenResponse->isCancelledPayment() ? Configuration::get('PS_OS_CANCELED') : Configuration::get('PS_OS_ERROR');
					$this->module->saveOrder($this->currentCart, $orderState, $payzenResponse);
					
					Tools::redirect('index.php?controller=history');
				} else {
					// Option 2 choosen : get back to checkout process and show message
					$controller = Configuration::get('PS_ORDER_PROCESS_TYPE') ? 'order-opc' : 'order';
					Tools::redirect('index.php?controller=' . $controller . '&payzen_pay_error=yes');
				}
			}
		} else {
			// Order already registered
			$order = new Order((int)$orderId);
		
			if ($order->getCurrentState() == Configuration::get('PS_OS_PAYMENT') && $payzenResponse->isAcceptedPayment()) {
				// Just display a confirmation message
				$link = 'index.php?controller=order-confirmation&id_cart=' . $cartId
						. '&id_module=' . $this->module->id . '&id_order=' . $order->id 
						. '&key=' . $order->secure_key;
				
				// Amount paid not equals initial amount. Error !
				if (number_format($order->total_paid, 2) != number_format($payzenResponse->getFloatAmount(), 2)) {
					$link .= "&error=yes";
				}
				
				if(Configuration::get('PAYZEN_MODE') == 'TEST') {
					$link .= "&prod_info=yes";
				}
				
				Tools::redirect($link);
				
			} elseif ($order->getCurrentState() != Configuration::get('PS_OS_PAYMENT') && !$payzenResponse->isAcceptedPayment()) {
				// Option 1 chosen (order is saved in failure status : go to history)
				Tools::redirect('index.php?controller=history');
			} else {
				// Order saved with success status while payment failed
				Tools::redirect('index.php?controller=order-confirmation&id_cart=' . $cartId
						. '&id_module=' . $this->module->id . '&id_order=' . $order->id
						. '&key=' . $order->secure_key . '&error=yes');
			}
		}
	}
}
