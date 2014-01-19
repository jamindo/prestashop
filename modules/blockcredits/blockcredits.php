<?php
if (!defined('_PS_VERSION_'))
	exit;
class blockcredits extends Module
{
	public function __construct()
	{
		$this->name = 'blockcredits';
		$this->tab = 'blockcredits';
		$this->version = 1.0;
		$this->author = 'Benjamin GERMAN';
		$this->need_instance = 0;
		parent::__construct();
		$this->displayName = $this->l('block credit');
		$this->description = $this->l('bloc credit.');
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
		$this->smarty->assign('logged',$this->context->customer->isLogged());
		$this->smarty->assign('nb_credits',$this->context->cookie->nb_credits);
		return $this->display(__FILE__, 'blockcredits.tpl');
	}
}
?>