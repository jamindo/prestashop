<?php
class FinishedBidRecapControllerCore extends FrontController
{
	public $php_self = 'finished-bid-recap';

	public function init()
	{
		parent::init();
	}

	public function initContent()
	{
		parent::initContent();
		$this->setTemplate(_PS_THEME_DIR_.'finished-bid-recap.tpl');
		$this->addCSS(_THEME_CSS_DIR_.'finished-bid-recap.css');
	}
	
	/**
	 * Start forms process
	 * @see FrontController::postProcess()
	 */
	public function postProcess()
	{
		if (Tools::isSubmit('SubmitBidRecap')){
			$this->processSubmitBidRecap();
		}
		if (Tools::isSubmit('SubmitMultipleBidRecap')){
			$this->processSubmitMultipleBidRecap();
		}
	}
	
	public function processSubmitBidRecap()
	{
		$id_bid = Tools::getValue('bidId');
		$bid = Bid::getBidWithIdentifier($id_bid);
		$current_bid[0] = $bid[0];
		
		$winned_bids = FinishedBid::getFinishedBidWithId($id_bid);
		$total = $winned_bids[0]['value'];
		$bids_id = ''.$id_bid.'-'; 	
		
		$this->context->smarty->assign('current_bid', $current_bid);
		$this->context->smarty->assign('winned_bids', $winned_bids);
		$this->context->smarty->assign('total',$total);
		$this->context->smarty->assign('bids_id',$bids_id);
		$this->context->smarty->assign('nb_bid',0);
		
	}
	
	public function processSubmitMultipleBidRecap()
	{
		$id_customer = $this->context->cookie->id_customer;
		$winned_bids = FinishedBid::getFinishedBidWithCustomer($id_customer);
		$total =0;
		$bids_id ="";
		for($i = 0 ; $i<count($winned_bids); $i++){
			$bid = Bid::getBidWithIdentifier($winned_bids[$i]['id_bid']);
			$current_bid[$i] = $bid[0];
			$total += $winned_bids[$i]['value'];
			$bids_id = $bids_id.''.$winned_bids[$i]['id_bid'].'-';
		}
		
		$this->context->smarty->assign('winned_bids',$winned_bids);
		$this->context->smarty->assign('current_bid',$current_bid);
		$this->context->smarty->assign('nb_bid',count($winned_bids)-1);
		$this->context->smarty->assign('bids_id',$bids_id);
		$this->context->smarty->assign('total',$total);
	}
}