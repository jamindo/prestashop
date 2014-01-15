<?php
class FollowedBidControllerCore extends FrontController
{
	public $php_self = 'followed-bid';

public function init()
	{
		parent::init();
	}
	
	public function initContent()
	{
		parent::initContent();
		$id_customer = $this->context->cookie->id_customer;
		$query = FollowedBid::getFollowedBidByCustomer($id_customer);
		$followed_bids = array();
		$date_bids =array();
		for($i=0 ; $i<count($query) ; $i++) {
			$bid = Bid::getBidWithIdentifier($query[$i]);
			$followed_bids[$i] = $bid[0];
			$followed_bids[$i]['expiration_date'] = Bid::aff_date($bid[0]['expiration_date']);
		}
		$this->context->smarty->assign('followed_bids',$followed_bids);
		$this->context->smarty->assign('nb_followed_bids',count($followed_bids)-1);
		
		
		$this->setTemplate(_PS_THEME_DIR_.'followed-bids.tpl');
	}
	
	public function setMedia(){
		parent::setMedia();
		$this->addCSS(_THEME_CSS_DIR_.'followed-bids.css');
	}
}