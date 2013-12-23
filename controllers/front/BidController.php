<?php

class BidControllerCore extends FrontController
{
	public $php_self = 'bid';
	public $authRedirection = 'bid';
	
	/**
	 * @var boolean if bid sucess or not
	 */
	protected $bid_sucess; 
	
	/**
	 * Initialize auth controller
	 * @see FrontController::init()
	 */
	public function init()
	{
		parent::init();
		$this->setTemplate(_PS_THEME_DIR_.'bid-result.tpl');
	}
	
	/**
	 * Run ajax process
	 * @see FrontController::displayAjax()
	 */
	public function displayAjax()
	{
		$this->display();
	}
	
	/**
	 * Start forms process
	 * @see FrontController::postProcess()
	 */
	public function postProcess()
	{
		if (Tools::isSubmit('SubmitBid')){
			$this->processSubmitBid();
		}
		if (Tools::isSubmit('SubmitMultipleBid')){
			$this->processSubmitMultipleBid();
		}
	}
	
	/**
	 * Process submit on a bid
	 */
	 protected function processSubmitBid()
	{
		$simpleBid = trim(Tools::getValue('simpleBid'));
		$logged = $this->context->cookie->logged;
		$nb_credits = $this->context->cookie->nb_credits;
		$customer_id = $this->context->cookie->id_customer;
		$bid_id = Tools::getValue('bidId');
		
		if (empty($simpleBid)){
			$this->errors[] = Tools::displayError('Veuillez rentrer une valeur');
		} elseif ($simpleBid < 0.01) {
			$this->errors[] = Tools::displayError('Veuillez rentrer une valeur superieur a 0.01 (1 centime)', false);
			$_POST['simpleBid'] = $_POST['simpleBid'];
			unset($_POST['simpleBid']);
		} elseif($logged == 0){
			$this->errors[] = Tools::displayError('Veuillez vous connecter pour placer une enchere');
		} else {
			$credit_selected = Credit::getFirstAvailableCredit($customer_id);
			$chosen_credit = $credit_selected['id_credit'];
			Credit::turnCreditStatus($chosen_credit);
			CreditOnBid::placeCreditOnBid($chosen_credit , $bid_id , $simpleBid);
			$this->context->cookie->nb_credits = Credit::countCredits($customer_id);
			$low = $this->getBidResult($bid_id, $simpleBid);
			/*
			$this->bid_sucess = true;
			$this->context->smarty->assign('simpleBid', $simpleBid);
			$bid_id = Tools::getValue('bidId');
			$this->context->smarty->assign('currentBid', $bid_id);
			*/
		}
	}
	
	/**
	 * Process submit on a multiple bid
	 */
	protected function processSubmitMultipleBid()
	{
		$startBid = (float)trim(Tools::getValue('startBid'));
		$closedBid = (float)trim(Tools::getValue('closedBid'));
		$logged = $this->context->cookie->logged;
		$nb_credits = $this->context->cookie->nb_credits;
		$customer_id = $this->context->cookie->id_customer;
		if (empty($startBid) || empty($closedBid)){
			$this->errors[] = Tools::displayError('Veuillez rentrer les deux valeurs');
		} elseif ($startBid < 0.01 || $closedBid < 0.01) {
			$this->errors[] = Tools::displayError('Veuillez rentrer une valeur superieur a 0.01 (1 centime)', false);
			$_POST['startBid'] = $_POST['startBid'];
			$_POST['$closedBid'] = $_POST['$closedBid'];
			unset($_POST['$startBid']);
			unset($_POST['$closedBid']);
		} elseif($logged == 0){
			$this->errors[] = Tools::displayError('Veuillez vous connecter pour placer une enchere');
		}  else {
				$nb_of_credits_necessary = ((($closedBid - $startBid)*100)+1);
				/*
				$this->context->smarty->assign('nb_credits', $nb_of_credits_necessary);
				$bid_id = Tools::getValue('bidId');
				$this->context->smarty->assign('bidId', $bid_id);
				$this->context->smarty->assign('startBid', $startBid);
				$this->context->smarty->assign('closedBid', $closedBid);
				$this->bid_sucess = true;*/
		}
	}
	
	protected function getBidResult($bid_id, $bid_value)
	{
		$lowest_bid = CreditOnBid::getLowestUniqueBid($bid_id);
		$nb_bid_for_value = CreditOnBid::countBidWithValue($bid_value);
		if($bid_value == $lowest_bid){
			$bid_result = 1;
		} else if($bid_value > $lowest_bid && $nb_bid_for_value == 1) {
			$bid_result = 2;
		} else {
			$bid_result = 3;
		}
		return $bid_result;
	}
}