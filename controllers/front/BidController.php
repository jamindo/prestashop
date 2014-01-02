<?php

class BidControllerCore extends FrontController
{
	public $php_self = 'bid';
	
	protected $bid_sucess; 
	
	/**
	 * Initialize auth controller
	 * @see FrontController::init()
	 */
	public function init()
	{
		parent::init();
		$bid_id = (int)Tools::getValue('id');
		$bid = Bid::getBidWithIdentifier($bid_id);
		$selected_bid = $bid[0];
		$customer_id = $this->context->cookie->id_customer;
		$credits = CreditOnBid::getAllCreditOnBidPerCustomer($bid_id,$customer_id);
		if($credits){
			$result_history = array();
			for($i = 0 ; $i <= count($credits); $i++){
				$credit = $credits[$i];
				$result_history[$i] = $this->getBidResult($bid_id, $credit['bid_value']);
			}
			$this->context->smarty->assign('credits_history', $credits);
			$this->context->smarty->assign('result_history', $result_history);
			$this-$this->context->smarty->assign('nb_results_history', count($credits)-1);
		}
		$this->context->smarty->assign('selected_bid', $selected_bid);
		$this->setTemplate(_PS_THEME_DIR_.'bid-detail.tpl');
		$this->addCSS(_THEME_CSS_DIR_.'bid-detail.css');
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
			if($nb_credits = $this->context->cookie->nb_credits == 0){
				
			} else {
				$credit_selected = Credit::getFirstAvailableCredit($customer_id);
				$chosen_credit = $credit_selected['id_credit'];
				Credit::turnCreditStatus($chosen_credit);
				CreditOnBid::placeCreditOnBid($chosen_credit , $bid_id , $simpleBid);
				$this->context->cookie->nb_credits = Credit::countCredits($customer_id);
				$bids = array($simpleBid);
				$results = array($this->getBidResult($bid_id, $simpleBid));
					
				$bid = Bid::getBidWithIdentifier($bid_id);
				$selected_bid = $bid[0];
				$this->context->smarty->assign('selected_bid', $selected_bid);
				$this->context->smarty->assign('bids', $bids);
				$this->context->smarty->assign('table_size', 1);
				$this->context->smarty->assign('results', $results);
				$this->context->smarty->assign('bid_sucess', true);
			}
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
		$bid_id = Tools::getValue('bidId');
		
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
				$nb_of_credits_necessary = (int)((($closedBid - $startBid)*100)+1);
				if($nb_of_credits_necessary > $nb_credits)
				{
					
				} else {
					$bids = array();
					$results = array();
					$cpt = 0;
						for($current = $startBid ; $current <= $closedBid ; $current +=.01)
						{	
							$credit_selected = Credit::getFirstAvailableCredit($customer_id);
							$chosen_credit = $credit_selected['id_credit'];
							Credit::turnCreditStatus($chosen_credit);
							CreditOnBid::placeCreditOnBid($chosen_credit,$bid_id,$current);

							$bids[$cpt] = $current;
							$results[$cpt] = $this->getBidResult($bid_id, $current);
							$cpt++;
						}
						
						$bids = Bid::getBidWithIdentifier($bid_id);
						$selected_bid = $bids[0];
						$this->context->smarty->assign('selected_bid', $selected_bid);
						
						$this->context->cookie->nb_credits = Credit::countCredits($customer_id);
						$this->context->smarty->assign('bids', $bids);
						$this->context->smarty->assign('table_size', $nb_of_credits_necessary);
						$this->context->smarty->assign('results', $results);
					}
					
					$this->bid_sucess = true;
				}
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