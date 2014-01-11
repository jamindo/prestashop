<?php
class BuyCreditsControllerCore extends FrontController
{
	public $php_self = 'buy-credits';
	public $isLogged;

public function initContent()
	{
		parent::initContent();
		
		$this->isLogged = $this->context->cookie->logged;
		$this->_assignPayment();
		Tools::safePostVars();
		
		$this->setTemplate(_PS_THEME_DIR_.'buy-credits.tpl');
	}

	public function setMedia()
	{
		parent::setMedia();
		$this->addCSS(_THEME_CSS_DIR_.'buy-credits.css');
	}
	

	protected function _assignPayment()
	{
		$this->context->smarty->assign(array(
				'HOOK_TOP_PAYMENT' => ($this->isLogged ? Hook::exec('displayPaymentTop') : ''),
				'HOOK_PAYMENT' => $this->_getPaymentMethods()
		));
	}
	
	protected function _getPaymentMethods()
	{
		if (!$this->isLogged)
			return '<p class="warning">'.Tools::displayError('Please sign in to see payment methods.').'</p>';
		if ($this->context->cart->OrderExists())
			return '<p class="warning">'.Tools::displayError('Error: This order has already been validated.').'</p>';
		if (!$this->context->cart->id_customer || !Customer::customerIdExistsStatic($this->context->cart->id_customer) || Customer::isBanned($this->context->cart->id_customer))
			return '<p class="warning">'.Tools::displayError('Error: No customer.').'</p>';
		if (!$this->context->cart->id_currency)
			return '<p class="warning">'.Tools::displayError('Error: No currency has been selected.').'</p>';
		if (!$this->context->cookie->checkedTOS && Configuration::get('PS_CONDITIONS'))
			return '<p class="warning">'.Tools::displayError('Please accept the Terms of Service.').'</p>';
	
		/* If some products have disappear */
		if (!$this->context->cart->checkQuantities())
			return '<p class="warning">'.Tools::displayError('An item in your cart is no longer available. You cannot proceed with your order.').'</p>';
	
		/* Check minimal amount */
		$currency = Currency::getCurrency((int)$this->context->cart->id_currency);
	
		$minimalPurchase = Tools::convertPrice((float)Configuration::get('PS_PURCHASE_MINIMUM'), $currency);
		if ($this->context->cart->getOrderTotal(false, Cart::ONLY_PRODUCTS) < $minimalPurchase)
			return '<p class="warning">'.sprintf(
					Tools::displayError('A minimum purchase total of %s is required in order to validate your order.'),
					Tools::displayPrice($minimalPurchase, $currency)
			).'</p>';
	
		$return = Hook::exec('displayPayment');
		if (!$return)
			return '<p class="warning">'.Tools::displayError('No payment method is available for use at this time. ').'</p>';
		return $return;
	}
	
	protected function _getCarrierList()
	{
		$address_delivery = new Address($this->context->cart->id_address_delivery);
	
		$cms = new CMS(Configuration::get('PS_CONDITIONS_CMS_ID'), $this->context->language->id);
		$link_conditions = $this->context->link->getCMSLink($cms, $cms->link_rewrite);
		if (!strpos($link_conditions, '?'))
			$link_conditions .= '?content_only=1';
		else
			$link_conditions .= '&content_only=1';
	
		$carriers = $this->context->cart->simulateCarriersOutput();
		$delivery_option = $this->context->cart->getDeliveryOption(null, false, false);
	
		$wrapping_fees = $this->context->cart->getGiftWrappingPrice(false);
		$wrapping_fees_tax_inc = $wrapping_fees = $this->context->cart->getGiftWrappingPrice();
		$oldMessage = Message::getMessageByCartId((int)($this->context->cart->id));
	
		$free_shipping = false;
		foreach ($this->context->cart->getCartRules() as $rule)
		{
			if ($rule['free_shipping'] && !$rule['carrier_restriction'])
			{
				$free_shipping = true;
				break;
			}
		}
	
		$this->context->smarty->assign('isVirtualCart', $this->context->cart->isVirtualCart());
	
		$vars = array(
				'free_shipping' => $free_shipping,
				'checkedTOS' => (int)($this->context->cookie->checkedTOS),
				'recyclablePackAllowed' => (int)(Configuration::get('PS_RECYCLABLE_PACK')),
				'giftAllowed' => (int)(Configuration::get('PS_GIFT_WRAPPING')),
				'cms_id' => (int)(Configuration::get('PS_CONDITIONS_CMS_ID')),
				'conditions' => (int)(Configuration::get('PS_CONDITIONS')),
				'link_conditions' => $link_conditions,
				'recyclable' => (int)($this->context->cart->recyclable),
				'gift_wrapping_price' => (float)$wrapping_fees,
				'total_wrapping_cost' => Tools::convertPrice($wrapping_fees_tax_inc, $this->context->currency),
				'total_wrapping_tax_exc_cost' => Tools::convertPrice($wrapping_fees, $this->context->currency),
				'delivery_option_list' => $this->context->cart->getDeliveryOptionList(),
				'carriers' => $carriers,
				'checked' => $this->context->cart->simulateCarrierSelectedOutput(),
				'delivery_option' => $delivery_option,
				'address_collection' => $this->context->cart->getAddressCollection(),
				'opc' => true,
				'oldMessage' => isset($oldMessage['message'])? $oldMessage['message'] : '',
				'HOOK_BEFORECARRIER' => Hook::exec('displayBeforeCarrier', array(
						'carriers' => $carriers,
						'delivery_option_list' => $this->context->cart->getDeliveryOptionList(),
						'delivery_option' => $delivery_option
				))
		);
	
		Cart::addExtraCarriers($vars);
	
		$this->context->smarty->assign($vars);
	
		if (!Address::isCountryActiveById((int)($this->context->cart->id_address_delivery)) && $this->context->cart->id_address_delivery != 0)
			$this->errors[] = Tools::displayError('This address is not in a valid area.');
		elseif ((!Validate::isLoadedObject($address_delivery) || $address_delivery->deleted) && $this->context->cart->id_address_delivery != 0)
		$this->errors[] = Tools::displayError('This address is invalid.');
		else
		{
			$result = array(
					'HOOK_BEFORECARRIER' => Hook::exec('displayBeforeCarrier', array(
							'carriers' => $carriers,
							'delivery_option_list' => $this->context->cart->getDeliveryOptionList(),
							'delivery_option' => $this->context->cart->getDeliveryOption(null, true)
					)),
					'carrier_block' => $this->context->smarty->fetch(_PS_THEME_DIR_.'order-carrier.tpl')
			);
	
			Cart::addExtraCarriers($result);
			return $result;
		}
		if (count($this->errors))
			return array(
					'hasError' => true,
					'errors' => $this->errors,
					'carrier_block' => $this->context->smarty->fetch(_PS_THEME_DIR_.'order-carrier.tpl')
			);
	}
	
}