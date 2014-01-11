<?php /* Smarty version Smarty-3.1.14, created on 2014-01-11 10:58:33
         compiled from "C:\xampp\htdocs\prestashop\modules\tgg_atos\tpl\tgg_atos-front-payment-redirect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:348052cadda714e851-61786326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd0ad8b3581981d0011ae397c7a5b814d37d38b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\tgg_atos\\tpl\\tgg_atos-front-payment-redirect.tpl',
      1 => 1389030505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '348052cadda714e851-61786326',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cadda724e5b5_89798378',
  'variables' => 
  array (
    'tpl_dir' => 0,
    'splitted' => 0,
    'split_msg' => 0,
    'module_template_dir' => 0,
    'amount' => 0,
    'payment_currency' => 0,
    'payment_fees' => 0,
    'atos_form' => 0,
    'base_dir_ssl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cadda724e5b5_89798378')) {function content_52cadda724e5b5_89798378($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Card payment','mod'=>'tgg_atos'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['tpl_dir']->value).('breadcrumb.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h2><?php echo smartyTranslate(array('s'=>'Payment','mod'=>'tgg_atos'),$_smarty_tpl);?>
</h2>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['tpl_dir']->value).('order-steps.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<h3>
	<?php echo smartyTranslate(array('s'=>'Card payment','mod'=>'tgg_atos'),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['splitted']->value){?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'split_msg', null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'in %u times','mod'=>'tgg_atos'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php echo sprintf($_smarty_tpl->tpl_vars['split_msg']->value,$_smarty_tpl->tpl_vars['splitted']->value);?>

	<?php }?>
</h3>
<p>
	<img src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
images/atos.gif" alt="<?php echo smartyTranslate(array('s'=>'Card payment','mod'=>'tgg_atos'),$_smarty_tpl);?>
" style="float:left; margin: 0px 10px 5px 0px;" />
	<?php echo smartyTranslate(array('s'=>'You have chosen to pay by card','mod'=>'tgg_atos'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['splitted']->value){?> <?php echo sprintf($_smarty_tpl->tpl_vars['split_msg']->value,$_smarty_tpl->tpl_vars['splitted']->value);?>
<?php }?>.<br />
    <?php echo smartyTranslate(array('s'=>'You will be redirected to a secure bank server where your card informations will be asked.','mod'=>'tgg_atos'),$_smarty_tpl);?>
<br />
	<?php echo smartyTranslate(array('s'=>'At any moment you can hit the cancel button in order to come back to our payment methods choice from bank server','mod'=>'tgg_atos'),$_smarty_tpl);?>
<br />
	<?php echo smartyTranslate(array('s'=>'The total amount of your order is','mod'=>'tgg_atos'),$_smarty_tpl);?>

	<span id="amount" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['amount']->value,'currency'=>$_smarty_tpl->tpl_vars['payment_currency']->value['id_currency']),$_smarty_tpl);?>
</span>
	<?php if ($_smarty_tpl->tpl_vars['payment_fees']->value){?>
		<br />
		<span class="payment_fees"><?php echo smartyTranslate(array('s'=>'Including payment fees:','mod'=>'tgg_atos'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['payment_fees']->value;?>
</span>
	<?php }?>
</p>

<?php if ($_smarty_tpl->tpl_vars['atos_form']->value){?>
    <p style="margin-top:20px;">
        <strong><?php echo smartyTranslate(array('s'=>'Click on one of the payment meanings logos below to proceed on a secure bank server.','mod'=>'tgg_atos'),$_smarty_tpl);?>
</strong>
    </p>
    
    <?php echo $_smarty_tpl->tpl_vars['atos_form']->value;?>

<?php }else{ ?>
    <div class="error">
        <strong><?php echo smartyTranslate(array('s'=>'Sorry, no more CB payments can be processed today, bank server should be available again at midnight.','mod'=>'tgg_atos'),$_smarty_tpl);?>
</strong>
    </div>
<?php }?>

<p class="cart_navigation">
	<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
order.php?step=3" class="button_large"><?php echo smartyTranslate(array('s'=>'Other payment methods','mod'=>'tgg_atos'),$_smarty_tpl);?>
</a>
</p>
<?php }} ?>