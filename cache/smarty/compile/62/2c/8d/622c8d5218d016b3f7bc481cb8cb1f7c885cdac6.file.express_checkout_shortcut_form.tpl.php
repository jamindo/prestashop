<?php /* Smarty version Smarty-3.1.14, created on 2014-01-17 19:32:44
         compiled from "C:\xampp\htdocs\prestashop\modules\paypal\views\templates\hook\express_checkout_shortcut_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2733952d9774cddf6a9-74912501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '622c8d5218d016b3f7bc481cb8cb1f7c885cdac6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\paypal\\views\\templates\\hook\\express_checkout_shortcut_form.tpl',
      1 => 1389866702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2733952d9774cddf6a9-74912501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'PayPal_payment_type' => 0,
    'PayPal_current_page' => 0,
    'PayPal_tracking_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d9774cf294f6_54370060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d9774cf294f6_54370060')) {function content_52d9774cf294f6_54370060($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<form id="paypal_payment_form" action="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/express_checkout/payment.php" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" method="post" data-ajax="false">
	<?php if (isset($_GET['id_product'])){?><input type="hidden" name="id_product" value="<?php echo intval($_GET['id_product']);?>
" /><?php }?>
	<!-- Change dynamicaly when the form is submitted -->
	<input type="hidden" name="quantity" value="1" />
	<input type="hidden" name="id_p_attr" value="" />
	<input type="hidden" name="express_checkout" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['PayPal_payment_type']->value, 'htmlall', 'UTF-8');?>
"/>
	<input type="hidden" name="current_shop_url" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['PayPal_current_page']->value, 'htmlall', 'UTF-8');?>
" />
	<input type="hidden" name="bn" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['PayPal_tracking_code']->value, 'htmlall', 'UTF-8');?>
" />
</form>

<?php }} ?>