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
		$is_finished_bid = array();
		$save = array();
		$winner_login = array();
		$sell = array();
		$winner_id = array();
		$paid = array();
		for($i=0 ; $i<count($query) ; $i++) {
			$bid = Bid::getBidWithIdentifier($query[$i]['id_bid']);
			$date_bids[$i] = Bid::count_date($bid[0]['expiration_date']);
			$followed_bids[$i] = $bid[0];
			$followed_bids[$i]['expiration_date'] = Bid::aff_date($followed_bids[$i]['expiration_date']);
			
			$alreadyIn = FinishedBid::isAlreadyPresent($query[$i]['id_bid']);
			if($alreadyIn == false){
				$is_finished_bid[$i] = 0;
			} else {
				$finished_bid = FinishedBid::getFinishedBidWithId($query[$i]['id_bid']);
				$sell[$i] = $finished_bid[0]['value'];
				$save[$i] = $finished_bid[0]['saving'];
				$winner = Customer::getCustomerWithId($finished_bid[0]['id_customer']);
				$winner_login[$i] = $winner[0]['login'];
				$winner_id[$i] = $finished_bid[0]['id_customer'];
				$paid[$i] = $finished_bid[0]['paid'];
				$is_finished_bid[$i] = 1;
			}
		}
		$this->context->smarty->assign('finished_bid',$is_finished_bid);
		$this->context->smarty->assign('followed_bids',$followed_bids);
		$this->context->smarty->assign('sell',$sell);
		$this->context->smarty->assign('paid',$paid);
		$this->context->smarty->assign('winner',$winner_login);
		$this->context->smarty->assign('save',$save);
		$this->context->smarty->assign('nb_followed_bids',count($followed_bids)-1);
		$this->context->smarty->assign('date_bids',$date_bids);
		$this->context->smarty->assign('customer',$id_customer);
		$this->context->smarty->assign('winner_id',$winner_id);
		
		
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
		$fromPage = Tools::getValue('fromPage');
		$id_customer = $this->context->cookie->id_customer;
		FollowedBid::stopFollowedBid($id_bid,$id_customer);
		if($fromPage != 'true'){
			Tools::redirect('index.php');
		}
	}
	
}