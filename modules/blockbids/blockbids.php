<?php
if (!defined('_PS_VERSION_'))
	exit;
class blockbids extends Module
{
	public function __construct()
	{
		$this->name = 'blockbids';
		$this->tab = 'blockbids';
		$this->version = 1.0;
		$this->author = 'Benjamin GERMAN';
		$this->need_instance = 0;
		parent::__construct();
		$this->displayName = $this->l('blockbids');
		$this->description = $this->l('bloc bids.');
	}
	
	public function install()
	{
		return parent::install() && $this->registerHook('displayHome');
	}
	
	public function uninstall()
	{
		return parent::uninstall();
	}

	public function hookHome($params)
	{
		global $smarty;
		
		$bids = Bid::getAllExpiredBids();
		for($i=0 ; $i <count($bids) ; $i++){
			$alreadyIn = FinishedBid::isAlreadyPresent($bids[$i]['id_bid']);
			if($alreadyIn == false){
				$winner_credit = CreditOnBid::getCreditWinner($bids[$i]['id_bid']);
				$winner_credit_value = CreditOnBid::getCreditWinnerValue($bids[$i]['id_bid']);
				$winner_id = Credit::getCreditOwner($winner_credit[0]['id_credit']);
				$saving = number_format(((($bids[$i]['product_value'] - $winner_credit_value[0]['bid_value'])
					*100)/$bids[$i]['product_value']),2);
				FinishedBid::insertFinishedBid($bids[$i]['id_bid'],$winner_id[0]['id_customer'],
				$winner_credit_value[0]['bid_value'],$saving);
			}
		}
		
		$bids = Bid::getAllBids();
		$id_customer = $this->context->cookie->id_customer;
		$date_bids = array();
		$bookmarked_bid = array();
		for($i=0 ; $i<count($bids) ; $i++) {
			$bid = Bid::getBidWithIdentifier($bids[$i]['id_bid']);
			$bookmarked = FollowedBid::isAlreadyPresent($bids[$i]['id_bid'], $id_customer);
			if($bookmarked == false){
				$bookmarked_bid[$i] = 0;
			} else {
				$bookmarked_bid[$i] = 1;
			}
			$date_bids[$i] = Bid::count_date($bid[0]['expiration_date']);
			$bids[$i]['expiration_date'] = Bid::aff_date($bids[$i]['expiration_date']);
		}
		
		$this->context->smarty->assign(array(
				'bids' => $bids,
				'nb_bids' => Bid::countBids(),
				'date_bids' => $date_bids,
				'bookmark' => $bookmarked_bid
		));
		$this->context->controller->addCSS($this->_path.'blockbids.css');
		return $this->display(__FILE__, 'blockbids.tpl');
		
	}
}
?>