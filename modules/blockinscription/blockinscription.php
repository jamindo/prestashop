<?php
if (!defined('_PS_VERSION_'))
	exit;
class blockinscription extends Module
{
	public function __construct()
	{
		$this->name = 'blockinscription';
		$this->tab = 'blockinscription';
		$this->version = 1.0;
		$this->author = 'Benjamin GERMAN';
		$this->need_instance = 0;
		parent::__construct();
		$this->displayName = $this->l('blockinscription');
		$this->description = $this->l('bloc inscription.');
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
		$this->smarty->assign(array('logged' => $this->context->customer->isLogged()));
		return $this->display(__FILE__, 'blockinscription.tpl');
	}
}
?>