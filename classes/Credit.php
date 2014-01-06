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
	
	public static function countCredits($id_customer)
	{
		return $nb_of_credits = (int)Db::getInstance()->getValue('
				SELECT COUNT(`id_customer`)
				FROM `'._DB_PREFIX_.'credit`
				WHERE `id_customer`= '.(int)$id_customer.'
				AND `is_on_bid`= 0 ');
	}
	
	public static function getFirstAvailableCredit($id_customer)
	{
		return $credits = Db::getInstance()->getValue('
				SELECT `id_credit`
				FROM `'._DB_PREFIX_.'credit`
				WHERE `id_customer`= '.(int)$id_customer.'
				AND `is_on_bid`= 0 ');
	}
	
	public static function turnCreditStatus($id_credit)
	{
		Db::getInstance()->execute('
			UPDATE '._DB_PREFIX_.'credit
			SET `is_on_bid`= 1 
			WHERE id_credit = '.(int)$id_credit.'
		');
	}
}