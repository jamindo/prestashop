<?php /* Smarty version Smarty-3.1.14, created on 2014-01-03 14:54:26
         compiled from "C:\xampp\htdocs\prestashop\admin0556\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1238952c6c112b7c819-83289584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '278deff9a45d536849652fec23fdd360faf37d88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin0556\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1384260124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1238952c6c112b7c819-83289584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c6c112bef681_08755058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6c112bef681_08755058')) {function content_52c6c112bef681_08755058($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>