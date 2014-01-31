<?php
class WinnedBidControllerCore extends FrontController
{
	public $php_self = 'winned-bid';
	
	public function initContent()
	{
		parent::initContent();
		$id_customer = $this->context->cookie->id_customer;
		$winned_bids = FinishedBid::getFinishedBidWithCustomer($id_customer);
		$nb_unpaid_bid = FinishedBid::countUnpaidBid($id_customer);
		$current_bid = array();
		for($i = 0 ; $i<count($winned_bids); $i++){
			$bid = Bid::getBidWithIdentifier($winned_bids[$i]['id_bid']);
			$current_bid[$i] = $bid[0];
			$current_bid[$i]['expiration_date'] = Bid::aff_date($current_bid[$i]['expiration_date']);
				
		}
		
		$this->context->smarty->assign('winned_bids',$winned_bids);
		$this->context->smarty->assign('current_bid',$current_bid);
		$this->context->smarty->assign('nb_unpaid_bid',$nb_unpaid_bid);
		$this->context->smarty->assign('nb_winned_bids',count($winned_bids)-1);
		
		$this->setTemplate(_PS_THEME_DIR_.'winned-bid.tpl');
	}
}