<?php /* Smarty version Smarty-3.1.14, created on 2014-01-17 16:59:38
         compiled from "C:\xampp\htdocs\prestashop\modules\payzen\views\templates\back\back_office.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1820752d9536a9193e9-74606347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '576d54cd8a8eb4729d2395dc21d2fe0851ddb445' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\payzen\\views\\templates\\back\\back_office.tpl',
      1 => 1389974326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1820752d9536a9193e9-74606347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payzen_message' => 0,
    'payzen_request_uri' => 0,
    'tabs' => 0,
    'payzen_js_dir' => 0,
    'payzen_module_js_dir' => 0,
    'payzen_common' => 0,
    'payzen_general_tab' => 0,
    'payzen_single_tab' => 0,
    'payzen_multi_tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d9536a9a4782_23309905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d9536a9a4782_23309905')) {function content_52d9536a9a4782_23309905($_smarty_tpl) {?>



<?php echo $_smarty_tpl->tpl_vars['payzen_message']->value;?>


<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['payzen_request_uri']->value;?>
">	
	<script type="text/javascript">
		var pos_select = <?php echo $_smarty_tpl->tpl_vars['tabs']->value;?>
;
	</script>
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['payzen_js_dir']->value;?>
jquery.tabpane.js"></script>
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['payzen_js_dir']->value;?>
jquery.tabpane.css" />
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['payzen_module_js_dir']->value;?>
payzen.js"></script>
	
	<input type="hidden" name="tabs" id="tabs" value="0" />
	
	<div class="tab-page">
		<?php echo $_smarty_tpl->tpl_vars['payzen_common']->value;?>

	</div>
	
	<div class="tab-pane" id="tab-pane-1" style="width: 100%;">
		<div class="tab-page" id="step1">
		    <h4 class="tab" style="width: 210px !important;"><?php echo smartyTranslate(array('s'=>'GENERAL CONFIGURATION','mod'=>'payzen'),$_smarty_tpl);?>
</h4>
		    <?php echo $_smarty_tpl->tpl_vars['payzen_general_tab']->value;?>

		</div>
		
		<div class="tab-page" id="step2">
		     <h4 class="tab" style="width: 210px !important;"><?php echo smartyTranslate(array('s'=>'ONE-TIME PAYMENT','mod'=>'payzen'),$_smarty_tpl);?>
</h4>
		     <?php echo $_smarty_tpl->tpl_vars['payzen_single_tab']->value;?>

		</div>
		
		<div class="tab-page" id="step3">
		     <h4 class="tab" style="width: 210px !important;"><?php echo smartyTranslate(array('s'=>'PAYMENT IN SEVERAL TIMES','mod'=>'payzen'),$_smarty_tpl);?>
</h4>
		     <?php echo $_smarty_tpl->tpl_vars['payzen_multi_tab']->value;?>
		 
		</div>
	
		<div class="clear">
			<input type="submit" class="button" name="payzen_submit_admin_form" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'payzen'),$_smarty_tpl);?>
" />
		</div>
	</div>
	
	<div class="clear"></div>
	
	<script type="text/javascript">
		function loadTab(id) {}
		setupAllTabs();
	</script>
</form><?php }} ?>