<?php
class FinishedBidControllerCore extends FrontController
{
	public $php_self = 'finished-bid';

public function init()
	{
		parent::init();
		
		$bids = Bid::getAllExpiredBids();
		for($i=0 ; $i <count($bids) ; $i++){
			$alreadyIn = FinishedBid::isAlreadyPresent($bids[$i]['id_bid']);
			if($alreadyIn == false){
				$winner_credit = CreditOnBid::getCreditWinner($bids[$i]['id_bid']);
				$winner_id = Credit::getCreditOwner($winner_credit[0]['id_credit']);
				FinishedBid::insertFinishedBid($bids[$i]['id_bid'],$winner_id[0]['id_customer']);
			} 
		}
		
		$finished_bids = FinishedBid::getFinishedBid();
		
		$this->context->smarty->assign('finished_bids',$finished_bids);
		$this->setTemplate(_PS_THEME_DIR_.'finished-bid.tpl');
		$this->addCSS(_THEME_CSS_DIR_.'finished-bid.css');
	}

}