<?php

class CreditCore extends ObjectModel
{
	/** @var integer id */
	public $id;
	
	/** @var integer Customer id */
	public $id_customer;
	
	/** @var integer Type */
	public $type;
	
	/** @var date Expiration date */
	public $expiration_date;
	
	/** @var boolean is available */
	public $is_on_bid;
	
	public static $definition = array(
			'table' => 'credit',
			'primary' => 'id_credit',
			'fields' => array(
					'id_customer' => 			array('type' => self::TYPE_INT),
					'type' => 					array('type' => self::TYPE_INT),
					'expiration_date' => 		array('type' => self::TYPE_DATE, 'validate' => 'isDateFormat'),
					'is_on_bid' => 				array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
					),
			);
}