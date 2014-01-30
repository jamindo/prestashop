<?php

class CreditOnBidCore extends ObjectModel
{
	/** @var integer id */
	public $id;
	
	/** @var integer Credit id */
	public $id_credit;
	
	/** @var integer Bid id */
	public $id_bid;
	
	/** @var double value bidded */
	public $bid_value;
	
	public $bid_date;
	
	public static $definition = array(
			'table' => 'credit_on_bid',
			'primary' => 'id_credit_on_bid',
			'fields' => array(
					'id_credit' => 				array('type' => self::TYPE_INT),
					'id_bid' => 				array('type' => self::TYPE_INT),
					'bid_value' => 				array('type' => self::TYPE_DOUBLE),
					'bid_date'  => 				array('type' => self::TYPE_DATE),
			),
	);
	
	public static function placeCreditOnBid($id_credit , $id_bid , $bid_value)
	{
		Db::getInstance()->execute('
			INSERT INTO '._DB_PREFIX_.'credit_on_bid(id_credit,id_bid,bid_value)
			VALUES('.$id_credit.','.$id_bid.','.$bid_value.')');
	}
	
	public static function getLowestUniqueBid($id_bid)
	{
		return $sql = Db::getInstance()->getValue('
				SELECT MIN(bid_value) 
				FROM '._DB_PREFIX_.'credit_on_bid
				WHERE id_bid = '.(int)$id_bid.'
				GROUP BY bid_value
				HAVING COUNT(bid_value) < 2');
	}
	
	public static function countBidWithValue($bid_value)
	{
		return $nb_of_bids = (int)Db::getInstance()->getValue('
				SELECT COUNT(`id_credit_on_bid`)
				FROM `'._DB_PREFIX_.'credit_on_bid`
				WHERE `bid_value`= '.(double)$bid_value.'
				');
	}
	
	public static function getAllCreditOnBidPerCustomer($id_bid , $id_customer)
	{
		return Db::getInstance()->executeS('
				SELECT DISTINCT b.*
				FROM `'._DB_PREFIX_.'credit_on_bid` b ,`'._DB_PREFIX_.'credit` c
				WHERE b.`id_bid` = '.$id_bid.'
				AND  c.`id_customer` = '.$id_customer.'
				ORDER BY b.`bid_value`'
			);
	}
	
	public static function getLastsCreditBiddedByCustomer($id_customer)
	{
		return Db::getInstance()->executeS('
				SELECT DISTINCT b.*
				FROM `'._DB_PREFIX_.'credit_on_bid` b ,`'._DB_PREFIX_.'credit` c
				WHERE c.`id_customer` = '.$id_customer.'
				ORDER BY b.`bid_date` DESC , b.`bid_value` ASC
				LIMIT 20
				');
	}
	
	public static function getCreditsBiddedByCustomer($id_customer)
	{
		return Db::getInstance()->executeS('
				SELECT DISTINCT b.`id_bid`
				FROM `'._DB_PREFIX_.'credit_on_bid` b ,`'._DB_PREFIX_.'credit` c
				WHERE c.`id_customer` = '.$id_customer.'
				ORDER BY b.`id_bid`
				');
	}
	
	public static function getAllCreditOnBid($id_bid)
	{
		return $all_on_bid = Db::getInstance()->executeS('
				SELECT *
				FROM `'._DB_PREFIX_.'credit_on_bid`
				WHERE id_bid = '.(int)$id_bid.'');
	}
	
	public static function getAllCreditByCustomer($id_customer)
	{
		return Db::getInstance()->executeS('
				SELECT DISTINCT b.*
				FROM `'._DB_PREFIX_.'credit_on_bid` b ,`'._DB_PREFIX_.'credit` c
				WHERE c.`id_customer` = '.$id_customer.'
				ORDER BY b.`bid_date`
				');
	}
	
	public static function getCreditWinner($id_bid)
	{
		return $sql = Db::getInstance()->executeS('
				SELECT `id_credit`
				FROM '._DB_PREFIX_.'credit_on_bid
				WHERE id_bid = '.(int)$id_bid.'
				GROUP BY bid_value
				HAVING COUNT(bid_value) < 2
				LIMIT 1');
	}
	
	public static function getCreditWinnerValue($id_bid)
	{
		return $sql = Db::getInstance()->executeS('
				SELECT `bid_value`
				FROM '._DB_PREFIX_.'credit_on_bid
				WHERE id_bid = '.(int)$id_bid.'
				GROUP BY bid_value
				HAVING COUNT(bid_value) < 2
				LIMIT 1');
	}
	
	public static function getAllBiddedValue($id_bid)
	{
		return $sql = Db::getInstance()->executeS('
			SELECT distinct bid_value
			FROM '._DB_PREFIX_.'credit_on_bid
			WHERE id_bid='.$id_bid.'
			ORDER BY bid_value ASC');
	}
	
	public static function countNbBid($bid_value, $id_bid)
	{
		return $nb_of_bids = (int)Db::getInstance()->getValue('
				SELECT COUNT(bid_value)
				FROM `'._DB_PREFIX_.'credit_on_bid`
				WHERE id_bid='.$id_bid.'
				AND bid_value='.$bid_value.'
				');
	}
}