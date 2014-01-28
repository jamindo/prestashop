<?php
class FinishedBidControllerCore extends FrontController
{
	public $php_self = 'finished-bid';

public function init()
	{
		parent::init();
		
		$finished_bids = FinishedBid::getFinishedBid();
		
		$this->context->smarty->assign('finished_bids',$finished_bids);
		$this->setTemplate(_PS_THEME_DIR_.'finished-bid.tpl');
		$this->addCSS(_THEME_CSS_DIR_.'finished-bid.css');
	}

}