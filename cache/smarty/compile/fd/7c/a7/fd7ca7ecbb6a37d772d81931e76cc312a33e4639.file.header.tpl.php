<?php /* Smarty version Smarty-3.1.14, created on 2014-01-16 11:05:06
         compiled from "C:\xampp\htdocs\prestashop\modules\paypal\views\templates\admin\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1943452d7aed2ea78f7-52686234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd7ca7ecbb6a37d772d81931e76cc312a33e4639' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\paypal\\views\\templates\\admin\\header.tpl',
      1 => 1389866702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1943452d7aed2ea78f7-52686234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PayPal_WPS' => 0,
    'PayPal_HSS' => 0,
    'PayPal_ECS' => 0,
    'PayPal_module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d7aed2f165b3_44575476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7aed2f165b3_44575476')) {function content_52d7aed2f165b3_44575476($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<script type="text/javascript">
	var PayPal_WPS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_WPS']->value);?>
';
	var PayPal_HSS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_HSS']->value);?>
';
	var PayPal_ECS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_ECS']->value);?>
';
</script>

<script type="text/javascript" src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['PayPal_module_dir']->value, 'htmlall', 'UTF-8');?>
/js/back_office.js"></script><?php }} ?>