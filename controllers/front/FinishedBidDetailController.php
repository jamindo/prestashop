<?php
class FinishedBidDetailControllerCore extends FrontController
{
	public $php_self = 'finished-bid-detail';

	public function init()
	{
		parent::init();
	}

	public function initContent()
	{
		parent::initContent();
		$customer_id = $this->context->cookie->id_customer;
		$bid_id = (int)Tools::getValue('id');
		$bid = Bid::getBidWithIdentifier($bid_id);
		$selected_bid = $bid[0];
		$selected_bid['expiration_date'] = Bid::aff_date($selected_bid['expiration_date']);
		
		$finished = FinishedBid::getFinishedBidWithId($bid_id);
		$finished_bid = $finished[0];
		
		$bid_placed = CreditOnBid::getAllBiddedValue($bid_id);
		$nb_bids_per_value = array();
		$display_barre = array();
		
		$winner = Customer::getCustomerWithId($finished_bid['id_customer']);
		$winner_login = $winner[0]['login'];
		
		for($i=0; $i<count($bid_placed) ; $i++){
			$nb_bids_per_value[$i] = CreditOnBid::countNbBid($bid_placed[$i]['bid_value'],$bid_id);
			$display_barre[$i] = 12*$nb_bids_per_value[$i];
		}
		
		$this->context->smarty->assign('bid_placed', $bid_placed);
		$this->context->smarty->assign('display', $display_barre);
		$this->context->smarty->assign('winner_login', $winner_login);
		$this->context->smarty->assign('nb_bids_per_value', $nb_bids_per_value);
		$this->context->smarty->assign('total_nb', count($bid_placed)-1);
		$this->context->smarty->assign('selected_bid', $selected_bid);
		$this->context->smarty->assign('finished_bid', $finished_bid);
		$this->context->smarty->assign('customer_id', $customer_id);
		
		$this->setTemplate(_PS_THEME_DIR_.'finished-bid-detail.tpl');
		$this->addCSS(_THEME_CSS_DIR_.'finished-bid-detail.css');
	}
}