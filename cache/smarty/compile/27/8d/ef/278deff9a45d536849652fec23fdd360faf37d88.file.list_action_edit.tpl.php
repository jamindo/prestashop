<?php /* Smarty version Smarty-3.1.14, created on 2013-12-11 15:02:55
         compiled from "C:\xampp\htdocs\prestashop\admin0556\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1229152729f43ab4706-47030761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '278deff9a45d536849652fec23fdd360faf37d88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin0556\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1386759288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1229152729f43ab4706-47030761',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52729f43b28508_00390819',
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52729f43b28508_00390819')) {function content_52729f43b28508_00390819($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>