<?php

class PersonalHistoryControllerCore extends FrontController
{
	public $php_self = 'personal-history';
	public $ssl = true;
	public $authRedirection = 'personal-history';
	public $auth = true;
	
	public function initContent()
	{
		parent::initContent();
		$bid_id = (int)Tools::getValue('id');
		if($bid_id != 0){
		} else {
			$customer_id = $this->context->cookie->id_customer;
			$bids_list = $this->getListOfBids($customer_id);
			
			$last_bids = CreditOnBid::getLastsCreditBiddedByCustomer($customer_id);
			if($last_bids){
				$result_history = array();
				$lot_history = array();
				for($i = 0 ; $i <= count($last_bids); $i++){
					$credit = $last_bids[$i];
					$result_history[$i] = $this->getBidResult($credit['id_bid'], $credit['bid_value']);
					$lot = Bid::getBidWithIdentifier($credit['id_bid']);
					$lot_history[$i] = $lot[0];
				}
				$this->context->smarty->assign('lasts_bids', $last_bids);
				$this->context->smarty->assign('nb_lasts_bids', count($last_bids)-1);
				$this->context->smarty->assign('result_history', $result_history);
				$this->context->smarty->assign('lot_history', $lot_history);
			}
			$this->context->smarty->assign('bids_list', $bids_list);
			$this->context->smarty->assign('nb_bids_list', count($bids_list)-1);
		}
		$this->setTemplate(_PS_THEME_DIR_.'personal-bid-history.tpl');
	}
	
	public function postProcess()
	{
		if (Tools::isSubmit('SubmitSearch')){
			$this->processSubmitSearch();
		}
	}
	
	public function processSubmitSearch()
	{
		$customer_id = $this->context->cookie->id_customer;
		$choice = Tools::getValue('BidList');
		if($choice == 'all'){
			$credits = CreditOnBid::getAllCreditByCustomer($customer_id);
			if($credits){
				$result_history = array();
				$lot_history = array();
				for( $i = 0 ; $i < count($credits); $i++){
					$credit = $credits[$i];
					$result_history[$i] = $this->getBidResult($credit['id_bid'], $credit['bid_value']);
					$lot = Bid::getBidWithIdentifier($credit['id_bid']);
					$lot_name[$i] = $lot[0];
				}
			}
		} else {
			$id_bid =(int)$choice;
			$credits = CreditOnBid::getAllCreditOnBidPerCustomer($id_bid,$customer_id);
			if($credits){
			$result_history = array();
			$lot_history = array();
				for($i = 0 ; $i < count($credits); $i++){
					$credit = $credits[$i];
					$result_history[$i] = $this->getBidResult($id_bid, $credit['bid_value']);
					$lot = Bid::getBidWithIdentifier($credit['id_bid']);
					$lot_name[$i] = $lot[0];
				}
			}
		}
		$this->context->smarty->assign('credits_history', $credits);
		$this->context->smarty->assign('result_history', $result_history);
		$this-$this->context->smarty->assign('nb_results_history', count($credits)-1);
		$this->context->smarty->assign('lot_name', $lot_name);
		$this->context->smarty->assign('fromSearch', true);
	}
	
	protected function getListOfBids($customer_id)
	{
		$bids = CreditOnBid::getCreditsBiddedByCustomer($customer_id);
		$all_bids = array();
		for($i = 0 ; $i < count($bids); $i++){
			$bid = Bid::getBidWithIdentifier($bids[$i]['id_bid']);
			$all_bids[$i] = $bid[0];
		}
		return $all_bids;
	}
	
	protected function getBidResult($bid_id, $bid_value)
	{
		$lowest_bid = CreditOnBid::getLowestUniqueBid($bid_id);
		$nb_bid_for_value = CreditOnBid::countBidWithValue($bid_value);
		if($bid_value == $lowest_bid){
			$bid_result = 1 ;
		} else if($bid_value > $lowest_bid && $nb_bid_for_value == 1) {
			$bid_result = 2;
		} else {
			$bid_result = 3;
		}
		return $bid_result;
	}
}