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