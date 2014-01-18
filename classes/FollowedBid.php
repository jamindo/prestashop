<?php
class FollowedBidCore extends ObjectModel
{

	/** @var integer id */
	public $id;
	
	/** @var integer bid id */
	public $id_bid;
	
	/** @var integer customer id */
	public $id_customer;
	
	public static $definition = array(
			'table' => 'followed_bid',
			'primary' => 'id_followed_bid',
			'fields' => array(
					'id_bid' => 				array('type' => self::TYPE_INT),
					'id_customer' => 			array('type' => self::TYPE_INT),
			),
	);
	
	public static function getFollowedBidByCustomer($id_customer){
		return Db::getInstance()->executeS('
				SELECT `id_bid`
				FROM `'._DB_PREFIX_.'followed_bid`
				WHERE `id_customer` = '.$id_customer.'
				');
	}
}