<?php
class FinishedBidControllerCore extends FrontController
{
	public $php_self = 'finished-bid';

public function init()
	{
		parent::init();
		
		$id_customer = $this->context->cookie->id_customer;
		$finished_bids = FinishedBid::getFinishedBid();
		$current_bid = array();
		$winner_login = array();
		for($i = 0 ; $i<count($finished_bids); $i++){
			$bid = Bid::getBidWithIdentifier($finished_bids[$i]['id_bid']);
			$current_bid[$i] = $bid[0];
			$current_bid[$i]['expiration_date'] = Bid::aff_date($current_bid[$i]['expiration_date']);
			$winner = Customer::getCustomerWithId($finished_bids[$i]['id_customer']);
			$winner_login[$i] = $winner[0]['login'];
		}
		
		$this->context->smarty->assign('finished_bids',$finished_bids);
		$this->context->smarty->assign('winner',$winner_login);
		$this->context->smarty->assign('current_bid',$current_bid);
		$this->context->smarty->assign('nb_finished_bids',count($finished_bids)-1);
		$this->context->smarty->assign('customer',$id_customer);
		$this->setTemplate(_PS_THEME_DIR_.'finished-bid.tpl');
		$this->addCSS(_THEME_CSS_DIR_.'finished-bid.css');
	}

}