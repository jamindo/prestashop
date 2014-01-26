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
		$date_bids = array();
		for($i=0 ; $i<count($query) ; $i++) {
			$bid = Bid::getBidWithIdentifier($query[$i]);
			$date_bids[$i] = Bid::count_date($bid[0]['expiration_date']);
			$followed_bids[$i] = $bid[0];
			$followed_bids[$i]['expiration_date'] = Bid::aff_date($followed_bids[$i]['expiration_date']);
		}
		$this->context->smarty->assign('followed_bids',$followed_bids);
		$this->context->smarty->assign('nb_followed_bids',count($followed_bids)-1);
		$this->context->smarty->assign('date_bids',$date_bids);
		
		
		$this->setTemplate(_PS_THEME_DIR_.'followed-bids.tpl');
	}
	
	public function setMedia(){
		parent::setMedia();
		$this->addCSS(_THEME_CSS_DIR_.'followed-bids.css');
	}
	
	
	public function postProcess()
	{
		if (Tools::isSubmit('SubmitBook')){
			$this->processSubmitBook();
		}
		if (Tools::isSubmit('SubmitUnbook')){
			$this->processSubmitUnbook();
		}
	}
	
	protected function processSubmitBook()
	{
		$id_bid = Tools::getValue('bidId');
		$id_customer = $this->context->cookie->id_customer;
		FollowedBid::createFollowedBid($id_bid,$id_customer);	
		Tools::redirect('index.php');
	}
	
	protected function processSubmitUnbook()
	{
		$id_bid = Tools::getValue('bidId');
		$id_customer = $this->context->cookie->id_customer;
		FollowedBid::stopFollowedBid($id_bid,$id_customer);
		Tools::redirect('index.php');
	}
	
}