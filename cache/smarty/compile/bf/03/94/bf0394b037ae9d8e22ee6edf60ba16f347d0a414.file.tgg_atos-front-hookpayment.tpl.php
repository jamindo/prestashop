<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 17:45:15
         compiled from "C:\xampp\htdocs\prestashop\modules\tgg_atos\tpl\tgg_atos-front-hookpayment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2828852cadd9bab31d9-03894393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf0394b037ae9d8e22ee6edf60ba16f347d0a414' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\tgg_atos\\tpl\\tgg_atos-front-hookpayment.tpl',
      1 => 1319893631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2828852cadd9bab31d9-03894393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'willSwitchCurrency' => 0,
    'canProcess' => 0,
    'controller' => 0,
    'module_template_dir' => 0,
    'bank' => 0,
    'fees' => 0,
    'total' => 0,
    '2t_allowed' => 0,
    'canProcess2t' => 0,
    '2t_fees' => 0,
    '2t_total' => 0,
    '3t_allowed' => 0,
    'canProcess3t' => 0,
    '3t_fees' => 0,
    '3t_total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cadd9bcb0d77_40354913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cadd9bcb0d77_40354913')) {function content_52cadd9bcb0d77_40354913($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['willSwitchCurrency']->value){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("willSwitchCurrency", null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'This payment method will use a different currency to proceed with payment. %s will be used.','mod'=>'tgg_atos'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<p class="payment_module">
<?php if ($_smarty_tpl->tpl_vars['canProcess']->value===true){?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Pay with a card','mod'=>'tgg_atos'),$_smarty_tpl);?>
">
<?php }else{ ?>
    <a href="#" onclick="alert($(this).text());">
<?php }?>
    	<img src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
images/bank_logo/<?php echo $_smarty_tpl->tpl_vars['bank']->value;?>
.gif" alt="<?php echo smartyTranslate(array('s'=>'Pay with a card','mod'=>'tgg_atos'),$_smarty_tpl);?>
" />
    	<?php echo smartyTranslate(array('s'=>'Pay with a card','mod'=>'tgg_atos'),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['willSwitchCurrency']->value){?>
    	<br />
    	<br />
    	<?php echo sprintf(Smarty::$_smarty_vars['capture']['willSwitchCurrency'],$_smarty_tpl->tpl_vars['willSwitchCurrency']->value['name']);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['canProcess']->value!==true){?>
    	<br />
    	<br />
    	<?php echo $_smarty_tpl->tpl_vars['canProcess']->value;?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['fees']->value){?>
    	<br />
    	<br />
    	<?php echo smartyTranslate(array('s'=>'This payment method is subject to payment fees. If used your order amount will be increased by:','mod'=>'tgg_atos'),$_smarty_tpl);?>
<br />
    	<?php echo $_smarty_tpl->tpl_vars['fees']->value;?>
<br />
    	<strong>
    		<?php echo smartyTranslate(array('s'=>'Total amount to be paid:','mod'=>'tgg_atos'),$_smarty_tpl);?>

    		<?php echo $_smarty_tpl->tpl_vars['total']->value;?>

    	</strong>
    <?php }?>
    </a>
</p>
<?php if ($_smarty_tpl->tpl_vars['2t_allowed']->value){?>
	<p class="payment_module">
	<?php if ($_smarty_tpl->tpl_vars['canProcess2t']->value===true){?>
    	<a href="<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
?splitted=2" title="<?php echo smartyTranslate(array('s'=>'Pay with a card in 2 times','mod'=>'tgg_atos'),$_smarty_tpl);?>
">
    <?php }else{ ?>
    	<a href="#" onclick="alert($(this).text());">
    <?php }?>
   		<img src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
images/bank_logo/<?php echo $_smarty_tpl->tpl_vars['bank']->value;?>
.gif" alt="<?php echo smartyTranslate(array('s'=>'Pay with a card in 2 times','mod'=>'tgg_atos'),$_smarty_tpl);?>
" />
   		<?php echo smartyTranslate(array('s'=>'Pay with a card in 2 times','mod'=>'tgg_atos'),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['willSwitchCurrency']->value){?>
    	<br />
    	<br />
    	<?php echo sprintf(Smarty::$_smarty_vars['capture']['willSwitchCurrency'],$_smarty_tpl->tpl_vars['willSwitchCurrency']->value['name']);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['canProcess2t']->value!==true){?>
    	<br />
    	<br />
    	<?php echo $_smarty_tpl->tpl_vars['canProcess2t']->value;?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['2t_fees']->value){?>
    	<br />
    	<br />
    	<?php echo smartyTranslate(array('s'=>'This payment method is subject to payment fees. If used your order amount will be increased by:','mod'=>'tgg_atos'),$_smarty_tpl);?>
<br />
    	<?php echo $_smarty_tpl->tpl_vars['2t_fees']->value;?>
<br />
    	<strong>
    		<?php echo smartyTranslate(array('s'=>'Total amount to be paid:','mod'=>'tgg_atos'),$_smarty_tpl);?>

    		<?php echo $_smarty_tpl->tpl_vars['2t_total']->value;?>

    	</strong>
    <?php }?>
    	</a>
	</p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['3t_allowed']->value){?>
	<p class="payment_module">
	<?php if ($_smarty_tpl->tpl_vars['canProcess3t']->value===true){?>
    	<a href="<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
?splitted=3" title="<?php echo smartyTranslate(array('s'=>'Pay with a card in 3 times','mod'=>'tgg_atos'),$_smarty_tpl);?>
">
    <?php }else{ ?>
    	<a href="#" onclick="alert($(this).text());">
    <?php }?>
    	<img src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
images/bank_logo/<?php echo $_smarty_tpl->tpl_vars['bank']->value;?>
.gif" alt="<?php echo smartyTranslate(array('s'=>'Pay with a card in 3 times','mod'=>'tgg_atos'),$_smarty_tpl);?>
" />
   		<?php echo smartyTranslate(array('s'=>'Pay with a card in 3 times','mod'=>'tgg_atos'),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['willSwitchCurrency']->value){?>
    	<br />
    	<br />
    	<?php echo sprintf(Smarty::$_smarty_vars['capture']['willSwitchCurrency'],$_smarty_tpl->tpl_vars['willSwitchCurrency']->value['name']);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['canProcess3t']->value!==true){?>
    	<br />
    	<br />
    	<?php echo $_smarty_tpl->tpl_vars['canProcess3t']->value;?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['3t_fees']->value){?>
    	<br />
    	<br />
    	<?php echo smartyTranslate(array('s'=>'This payment method is subject to payment fees. If used your order amount will be increased by:','mod'=>'tgg_atos'),$_smarty_tpl);?>
<br />
    	<?php echo $_smarty_tpl->tpl_vars['3t_fees']->value;?>
<br />
    	<strong>
    		<?php echo smartyTranslate(array('s'=>'Total amount to be paid:','mod'=>'tgg_atos'),$_smarty_tpl);?>

    		<?php echo $_smarty_tpl->tpl_vars['3t_total']->value;?>

    	</strong>
    <?php }?>
    	</a>
	</p>
<?php }?><?php }} ?>