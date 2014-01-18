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
}