<?php /* Smarty version Smarty-3.1.14, created on 2013-10-31 17:13:31
         compiled from "C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\products\specific_prices_shop_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21136527281abab7182-09046601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04f907f9d04be6b4bca67774b582f2ba7b8231a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\products\\specific_prices_shop_update.tpl',
      1 => 1381145310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21136527281abab7182-09046601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option_list' => 0,
    'key_id' => 0,
    'row' => 0,
    'key_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527281abad4c19_00611882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527281abad4c19_00611882')) {function content_527281abad4c19_00611882($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<option value="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_id']->value]);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_value']->value], 'htmlall', 'UTF-8');?>
</option>
<?php } ?><?php }} ?>