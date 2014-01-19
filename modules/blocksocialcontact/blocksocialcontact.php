<?php
if (!defined('_PS_VERSION_'))
	exit;
class blocksocialcontact extends Module
{
	public function __construct()
	{
		$this->name = 'blocksocialcontact';
		$this->tab = 'blocksocialcontact';
		$this->version = 1.0;
		$this->author = 'Benjamin GERMAN';
		$this->need_instance = 0;
		parent::__construct();
		$this->displayName = $this->l('blocksocialcontact');
		$this->description = $this->l('bloc socialcontact.');
	}
	
	public function install()
	{
		return parent::install() && $this->registerHook('displayRightColumn');
	}
	
	public function uninstall()
	{
		return parent::uninstall();
	}
	
	public function hookRightColumn($params)
	{
		global $smarty;
		return $this->display(__FILE__, 'blocksocialcontact.tpl');
	}
}
?>