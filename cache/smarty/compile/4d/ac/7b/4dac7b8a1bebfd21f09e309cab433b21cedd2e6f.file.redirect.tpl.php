<?php /* Smarty version Smarty-3.1.14, created on 2014-01-17 17:01:17
         compiled from "C:\xampp\htdocs\prestashop\modules\payzen\views\templates\front\redirect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1925152d953cdc79317-34115980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dac7b8a1bebfd21f09e309cab433b21cedd2e6f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\payzen\\views\\templates\\front\\redirect.tpl',
      1 => 1389974326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1925152d953cdc79317-34115980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payzen_params' => 0,
    'payzen_empty_cart' => 0,
    'payzen_url' => 0,
    'key' => 0,
    'value' => 0,
    'base_dir' => 0,
    'payzen_logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d953cdd54c73_68790271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d953cdd54c73_68790271')) {function content_52d953cdd54c73_68790271($_smarty_tpl) {?>



<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>PayZen<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['payzen_params']->value)&&$_smarty_tpl->tpl_vars['payzen_params']->value['vads_action_mode']=='SILENT'){?>
	<h2><?php echo smartyTranslate(array('s'=>'Payment processing','mod'=>'payzen'),$_smarty_tpl);?>
</h2>
<?php }else{ ?>
	<h2><?php echo smartyTranslate(array('s'=>'Redirection to payment gateway','mod'=>'payzen'),$_smarty_tpl);?>
</h2>
<?php }?>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['payzen_empty_cart']->value)&&$_smarty_tpl->tpl_vars['payzen_empty_cart']->value){?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'Your shopping cart is empty.','mod'=>'payzen'),$_smarty_tpl);?>
</p>
<?php }else{ ?>
	<h3><?php echo smartyTranslate(array('s'=>'Payment by bank card','mod'=>'payzen'),$_smarty_tpl);?>
</h3>
	
	<form action="<?php echo $_smarty_tpl->tpl_vars['payzen_url']->value;?>
" method="post" id="payzen_form"> 
	    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['payzen_params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
		<?php } ?>

		<p>
			<img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
modules/payzen/images/<?php echo $_smarty_tpl->tpl_vars['payzen_logo']->value;?>
" alt="PayZen" style="margin-bottom: 5px" />
			<br />
			
			<?php if ($_smarty_tpl->tpl_vars['payzen_params']->value['vads_action_mode']=='SILENT'){?>
				<?php echo smartyTranslate(array('s'=>'Please wait a moment. Your order payment is now processing.','mod'=>'payzen'),$_smarty_tpl);?>

			<?php }else{ ?>
				<?php echo smartyTranslate(array('s'=>'Please wait, you will be redirected to the payment platform.','mod'=>'payzen'),$_smarty_tpl);?>

			<?php }?>
			
			<br /> <br />
			<?php echo smartyTranslate(array('s'=>'If nothing happens in 10 seconds, please click the button below.','mod'=>'payzen'),$_smarty_tpl);?>
 
			<br /><br />
		</p>
	
		<p class="cart_navigation">
			<input type="submit" name="submitPayment" value="<?php echo smartyTranslate(array('s'=>'Pay','mod'=>'payzen'),$_smarty_tpl);?>
" class="exclusive" />
		</p>
	</form>
	
	<script type="text/javascript">
		
			$(document).ready(function() {
				$('#payzen_form').submit();
			});
		
	</script>
<?php }?><?php }} ?>