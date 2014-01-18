<?php
class BuyCreditsControllerCore extends FrontController
{
	public $php_self = 'buy-credits';
	public $isLogged;

public function initContent()
	{
		parent::initContent();
		
		$total = 0;
		$this->context->smarty->assign('total', $total);
		$this->setTemplate(_PS_THEME_DIR_.'buy-credits.tpl');
	}

	public function setMedia()
	{
		parent::setMedia();
		$this->addCSS(_THEME_CSS_DIR_.'buy-credits.css');
	}
}