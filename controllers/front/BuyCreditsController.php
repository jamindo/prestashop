<?php
class BuyCreditsControllerCore extends FrontController
{
	public $php_self = 'buy-credits';
	public $isLogged;

public function initContent()
	{
		parent::initContent();
		/*
		$this->isLogged = $this->context->cookie->logged;
		$this->_assignPayment();
		Tools::safePostVars();
*/
		$this->setTemplate(_PS_THEME_DIR_.'buy-credits.tpl');
	}

	public function setMedia()
	{
		parent::setMedia();
		$this->addCSS(_THEME_CSS_DIR_.'buy-credits.css');
	}
	/*

	protected function _assignPayment()
	{
		$this->context->smarty->assign(array(
				'HOOK_TOP_PAYMENT' => ($this->isLogged ? Hook::exec('displayPaymentTop') : ''),
				'HOOK_PAYMENT' => $this->_getPaymentMethods(),
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
	 
		$currency = Currency::getCurrency((int)$this->context->cart->id_currency);

		$return = Hook::exec('displayPayment');
		return $return;
	}
	*/
}