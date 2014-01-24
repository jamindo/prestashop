<?php
class FinishedBidCore extends ObjectModel
{
	/** @var integer id */
	public $id;
	
	/** @var integer bid id */
	public $id_bid;
	
	/** @var integer customer id */
	public $id_customer;
	
	/** @var string winner image link  */
	public $winner_image;
	
	/** @var string winner comment  */
	public $winner_comment;
	
	
	public static $definition = array(
			'table' => 'finished_bid',
			'primary' => 'id_finished_bid',
			'fields' => array(
					'id_bid' => 				array('type' => self::TYPE_INT),
					'id_customer' => 			array('type' => self::TYPE_INT),
					'winner_image' =>    		array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml'),
					'winner_comment' =>         array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml'),
			),
	);
	
	public static function getLastFinishedBid()
	{
		return Db::getInstance()->executeS('
				SELECT DISTINCT b.*
				FROM `'._DB_PREFIX_.'finished_bid` b ,`'._DB_PREFIX_.'bid` c
				WHERE c.`id_bid` = b.`id_bid`
				ORDER BY c.`expiration_date` DESC
				LIMIT 20
				');
	}
	
	public static function setBidWinner($id_finished_bid , $id_customer)
	{
		Db::getInstance()->execute('
			UPDATE '._DB_PREFIX_.'finished_bid
			SET `id_customer`= '.$id_customer.'
			WHERE id_finished_bid = '.(int)$id_finished_bid.'
		');
	}
}