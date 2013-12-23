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
	
	public static $definition = array(
			'table' => 'credit_on_bid',
			'primary' => 'id_credit_on_bid',
			'fields' => array(
					'id_credit' => 				array('type' => self::TYPE_INT),
					'id_bid' => 				array('type' => self::TYPE_INT),
					'bid_value' => 				array('type' => self::TYPE_DOUBLE),
			),
	);
	
	public static function placeCreditOnBid($id_credit , $id_bid , $bid_value)
	{
		Db::getInstance()->execute('
			INSERT INTO '._DB_PREFIX_.'credit_on_bid(id_credit,id_bid,bid_value)
			VALUES('.$id_credit.','.$id_bid.','.$bid_value.')');
	}
	
	public static function getLowestBid($id_bid)
	{
		return $sql = Db::getInstance()->getValue('
				SELECT MIN(bid_value) 
				FROM '._DB_PREFIX_.'credit_on_bid
				WHERE id_bid = '.(int)$id_bid.'');
	}
}