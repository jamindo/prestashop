<?php

class BidCore extends ObjectModel
{
	/** @var integer id */
	public $id;
	
	/** @var string product description */
	public $product_description;
	
	/** @var string product link */
	public $product_link_rewrite;
	
	/** @var string product link */
	public $product_image;
	
	/** @var string product link */
	public $product_image_big;
	
	/** @var float Price in euros */
	public $product_value;
	
	/** @var  Product name */
	public $product_name;
	
	/** @var integer Type */
	public $type;
	
	/** @var date Expiration date */
	public $expiration_date;
	
	/** @var date Start date */
	public $start_date;
	
	public static $definition = array(
			'table' => 'bid',
			'primary' => 'id_bid',
			'fields' => array(
					'product_name' => 			array('type' => self::TYPE_STRING),
					'product_value' =>			array('type' => self::TYPE_FLOAT),
					'product_description' =>    array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml'),
					'product_image' =>          array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml'),
					'product_image_big' =>      array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml'),
					'product_link_rewrite' => 	array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isLinkRewrite', 'required' => true, 'size' => 128),
					'type' => 					array('type' => self::TYPE_INT),
					'expiration_date' => 		array('type' => self::TYPE_DATE, 'validate' => 'isDateFormat'),
					'start_date' => 		    array('type' => self::TYPE_DATE, 'validate' => 'isDateFormat'),
			),

		);
	
	
	public static function getBidWithIdentifier($bid_id){
		$bid = Db::getInstance()->executeS(
				'SELECT * FROM `'._DB_PREFIX_.'bid`
				 WHERE id_bid = '.(int)$bid_id.'
				');
		return $bid;
	}
	
	/**
 	* Get All Bids from db
 	*/
	public static function getAllBids(){
		$bids = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'bid`');
		return $bids;
	}
	
	/**
	 * @param unknown $date
	 * @param string $lang
	 * @param string $format_fr
	 * @return string
	 */
	function aff_date(&$date)
	{
		$date_formatee = "";
		$format = "%d %B %Y";
		setlocale(LC_TIME, "fr_FR");
		$date_strtotime = strtotime($date);
		$date_formatee = strftime ($format,$date_strtotime);
		$date = $date_formatee;
	}
	
	/**
	 * Count number of bids
	 */
	public static function countBids()
	{
		return $nb_of_bids = (int)Db::getInstance()->getValue('
				SELECT COUNT(`id_bid`)
				FROM `'._DB_PREFIX_.'bid`');
	}
}