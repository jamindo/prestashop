<?php
class PaymentControllerCore extends FrontController
{
	public $php_self = 'payment';
	
	public function initContent()
	{
		parent::initContent();
		
		$this->setTemplate(_PS_THEME_DIR_.'payment.tpl');
	}
	
	public function setMedia()
	{
		parent::setMedia();
		$this->addCSS(_THEME_CSS_DIR_.'payment.css');
	}
	
	public function postProcess()
	{
		if (Tools::isSubmit('SubmitCBPayment')){
			$this->processSubmitCBPayment();
		}
		if (Tools::isSubmit('SubmitPayment')){
			$this->processSubmitPayment();
		}
		if (Tools::isSubmit('GetCredits')){
			$this->processSubmitGetCredits();
		}
		if (Tools::isSubmit('GetBid')){
			$this->processSubmitGetBid();
		}
	}
	
	public function processSubmitCBPayment()
	{
		$amount = Tools::getValue('amount');
		$fromBid = Tools::getValue('forBid');
		$bids_selected = Tools::getValue('bids_selected');
		$this->context->smarty->assign('fromCBPayment',true);
		$this->context->smarty->assign('fromBid',$fromBid);
		$this->context->smarty->assign('amount',$amount);
		$this->context->smarty->assign('bids_selected',$bids_selected);
	}
	
	public function processSubmitPayment()
	{
		$amount = Tools::getValue('amount');
		$fromBid = Tools::getValue('forBid');
		$bids_selected = Tools::getValue('bids_selected');

		$this->context->smarty->assign('amount',$amount);
		$this->context->smarty->assign('fromBid',$fromBid);
		$this->context->smarty->assign('fromPayment',true);
		$this->context->smarty->assign('bids_selected',$bids_selected);
	}
	
	public function processSubmitGetCredits()
	{
		$customer_id = $this->context->cookie->id_customer;
		$amount = (int) Tools::getValue('total');
		$nb_credits = (int)$this->getNumberOfCreditsToCreate($amount);
		for($i=1 ; $i<= $nb_credits ; $i++){
			Credit::createCredit($customer_id);
		}
		$this->context->cookie->nb_credits = Credit::countCredits($customer_id);
		Tools::redirect('http://localhost/prestashop/');
	}
	
	public function processSubmitGetBid()
	{
		$bids_selected = Tools::getValue('bids_selected');
		$bid =  split('-', $bids_selected.split);
		for($i = 0 ; $i<=count(bid) ; $i++){
			FinishedBid::turnPaidBid($bid[$i]);
		}
		Tools::redirect('http://localhost/prestashop/');
	}
	
	public function getNumberOfCreditsToCreate($amount){
		if($amount == 5){
			return 5;
		} else if($amount == 20){
			return 22;
		} else if($amount == 50){
			return 65;
		} else if($amount == 100){
			return 140;
		} else {
			return 375;
		}
	}
}