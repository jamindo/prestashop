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

		$this->context->smarty->assign(array(
				'bids' => Bid::getAllBids(),
				'nb_bids' => Bid::countBids(),
		));
		$this->context->controller->addCSS($this->_path.'blockbids.css');
		return $this->display(__FILE__, 'blockbids.tpl');
	}
}
?>