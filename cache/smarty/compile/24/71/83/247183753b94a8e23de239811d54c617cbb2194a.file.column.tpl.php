<?php /* Smarty version Smarty-3.1.14, created on 2014-01-16 11:06:41
         compiled from "C:\xampp\htdocs\prestashop\modules\paypal\views\templates\hook\column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3245552d7af31b59b66-16067399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '247183753b94a8e23de239811d54c617cbb2194a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\paypal\\views\\templates\\hook\\column.tpl',
      1 => 1389866702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3245552d7af31b59b66-16067399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d7af31b6ca27_18093746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7af31b6ca27_18093746')) {function content_52d7af31b6ca27_18093746($_smarty_tpl) {?>

<div id="paypal-column-block">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/about.php" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="PayPal" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="max-width: 100%" /></a></p>
</div>
<?php }} ?>