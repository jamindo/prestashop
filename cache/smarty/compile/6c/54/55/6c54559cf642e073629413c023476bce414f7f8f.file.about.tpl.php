<?php /* Smarty version Smarty-3.1.14, created on 2014-01-18 14:39:31
         compiled from "C:\xampp\htdocs\prestashop\modules\paypal\views\templates\front\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:471752da8413a77619-33568446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c54559cf642e073629413c023476bce414f7f8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\paypal\\views\\templates\\front\\about.tpl',
      1 => 1389866702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '471752da8413a77619-33568446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iso_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52da8413cd3ee2_82261457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52da8413cd3ee2_82261457')) {function content_52da8413cd3ee2_82261457($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<h1><?php echo smartyTranslate(array('s'=>'What Is PayPal?','mod'=>'paypal'),$_smarty_tpl);?>
</h1>

<div class="paypalapi_about">
	<p><?php echo smartyTranslate(array('s'=>'PayPal, the trusted leader in online payments, enables buyers and businesses to send and receive money online. PayPal has over 100 million member accounts in 190 countries and regions. It\'s accepted by merchants everywhere, both on and off eBay.','mod'=>'paypal'),$_smarty_tpl);?>
</p>
	<p><b><?php echo smartyTranslate(array('s'=>'Is it safe to use?','mod'=>'paypal'),$_smarty_tpl);?>
</b></p>
	<p><?php echo smartyTranslate(array('s'=>'PayPal helps protect your credit card information with industry-leading security and fraud prevention systems. When you use PayPal, your financial information is never shared with the merchant.','mod'=>'paypal'),$_smarty_tpl);?>
</p>
	<p><b><?php echo smartyTranslate(array('s'=>'Why use PayPal?','mod'=>'paypal'),$_smarty_tpl);?>
</b></p>
	<p>
		<ul>
			<li><?php echo smartyTranslate(array('s'=>'Make purchases or send money with PayPal - it\'s free','mod'=>'paypal'),$_smarty_tpl);?>
</li>
			<li><?php echo smartyTranslate(array('s'=>'Shop and pay conveniently by saving your information with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
</li>
			<li><?php echo smartyTranslate(array('s'=>'PayPal is accepted by millions of businesses worldwide and is the preferred payment method on eBay','mod'=>'paypal'),$_smarty_tpl);?>
</li>
		</ul>
	</p>
	<p><a href="https://www.paypal.com/<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['iso_code']->value, 'htmlall', 'UTF-8');?>
/cgi-bin/webscr?cmd=_registration-run&pal=TWJHHUL9AEP9C"><?php echo smartyTranslate(array('s'=>'Start using PayPal today!','mod'=>'paypal'),$_smarty_tpl);?>
</a></p>
</div><?php }} ?>