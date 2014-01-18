<?php /* Smarty version Smarty-3.1.14, created on 2014-01-16 11:47:44
         compiled from "C:\xampp\htdocs\prestashop\modules\tgg_atos\admin-tpl\tgg_atos-back-admin-23times.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1299852d7b8d068dd26-82762215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b573f6a3c0acd75dd86dd3bd6bb21b1a12db9e2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\tgg_atos\\admin-tpl\\tgg_atos-back-admin-23times.tpl',
      1 => 1389030510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1299852d7b8d068dd26-82762215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'highlights' => 0,
    'bool_2tpayment' => 0,
    'int_2tpayment_minamount' => 0,
    'int_2tpayment_spacing' => 0,
    'int_2tpayment_delay' => 0,
    'order_states' => 0,
    'order_state' => 0,
    'int_2tpayment_os' => 0,
    'float_2tpayment_fees' => 0,
    'default_currency' => 0,
    'float_2tpayment_fees_p' => 0,
    'bool_3tpayment' => 0,
    'int_3tpayment_minamount' => 0,
    'int_3tpayment_spacing' => 0,
    'int_3tpayment_delay' => 0,
    'int_3tpayment_os' => 0,
    'float_3tpayment_fees' => 0,
    'float_3tpayment_fees_p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d7b8d07f3b96_26296032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7b8d07f3b96_26296032')) {function content_52d7b8d07f3b96_26296032($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?><!-- 2TPAYMENT -->
<label for="field_bool_2tpayment"<?php if (in_array('bool_2tpayment',$_smarty_tpl->tpl_vars['highlights']->value['23TIMES'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'2 times payment:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<label class="t">
	    <input type="checkbox" name="bool_2tpayment" id="field_bool_2tpayment" value="1"<?php if ($_smarty_tpl->tpl_vars['bool_2tpayment']->value){?> checked="checked"<?php }?> />
	    <?php echo smartyTranslate(array('s'=>'Allow','mod'=>'tgg_atos'),$_smarty_tpl);?>

    </label>
    <br />
    <br />
    <!-- MIN AMOUNT -->
	<label class="t">
		<?php echo smartyTranslate(array('s'=>'Minimum cart amount to use this payment method:','mod'=>'tgg_atos'),$_smarty_tpl);?>

		<input type="text" name="int_2tpayment_minamount" id="field_int_2tpayment_minamount" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['int_2tpayment_minamount']->value, 'html', 'UTF-8');?>
" style="width: 60px;" />
		<span class="hint"><?php echo smartyTranslate(array('s'=>'Integer value accorded to the fallback currency.','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
	</label>    
    <br />
    <br />
    <label class="t">
    	<?php echo smartyTranslate(array('s'=>'Spacing between transactions (days, max 30):','mod'=>'tgg_atos'),$_smarty_tpl);?>

    	<input type="text" name="int_2tpayment_spacing" id="field_int_2tpayment_spacing" value="<?php echo intval($_smarty_tpl->tpl_vars['int_2tpayment_spacing']->value);?>
" size="2" />
    </label>
    <br />
    <br />
    <label class="t">
    	<?php echo smartyTranslate(array('s'=>'Days before first transactions:','mod'=>'tgg_atos'),$_smarty_tpl);?>

    	<input type="text" name="int_2tpayment_delay" id="field_int_2tpayment_delay" value="<?php echo intval($_smarty_tpl->tpl_vars['int_2tpayment_delay']->value);?>
" size="2" />
    </label>
    <br />
    <br />
    <!-- ORDER STATE -->
	<label class="t"><?php echo smartyTranslate(array('s'=>'Order state on payment success:','mod'=>'tgg_atos'),$_smarty_tpl);?>

		<select name="int_2tpayment_os" id="field_int_2tpayment_os">
			<option value=""></option>
		<?php  $_smarty_tpl->tpl_vars['order_state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order_state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_states']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order_state']->key => $_smarty_tpl->tpl_vars['order_state']->value){
$_smarty_tpl->tpl_vars['order_state']->_loop = true;
?>
			<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['order_state']->value['id_order_state'], 'htmlall', 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['int_2tpayment_os']->value==$_smarty_tpl->tpl_vars['order_state']->value['id_order_state']){?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['order_state']->value['name'], 'htmlall', 'UTF-8');?>
</option>
		<?php } ?>
		</select>
	</label>
    <br />
    <br />
	<!-- PAYMENT FEES -->
	<label class="t">
		<?php echo smartyTranslate(array('s'=>'Apply payment fees:','mod'=>'tgg_atos'),$_smarty_tpl);?>

	</label>
	<div>
		<input type="text" name="float_2tpayment_fees" id="field_float_2tpayment_fees" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['float_2tpayment_fees']->value, 'html', 'UTF-8');?>
" style="width: 60px;" /> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['default_currency']->value['sign'], 'html', 'UTF-8');?>

		+
		<input type="text" name="float_2tpayment_fees_p" id="field_float_2tpayment_fees_p" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['float_2tpayment_fees_p']->value, 'html', 'UTF-8');?>
" style="width: 60px;" /> % <?php echo smartyTranslate(array('s'=>'of order total','mod'=>'tgg_atos'),$_smarty_tpl);?>

		<span class="hint"><?php echo smartyTranslate(array('s'=>'Fees value accorded to the fallback currency.','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
	</div>
    <br />
    <br />
</div>
<!-- 3TPAYMENT -->
<label for="field_bool_3tpayment"<?php if (in_array('bool_3tpayment',$_smarty_tpl->tpl_vars['highlights']->value['23TIMES'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'3 times payment:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<label class="t" for="field_bool_3tpayment">
	    <input type="checkbox" name="bool_3tpayment" id="field_bool_3tpayment" value="1"<?php if ($_smarty_tpl->tpl_vars['bool_3tpayment']->value){?> checked="checked"<?php }?> />
	    <?php echo smartyTranslate(array('s'=>'Allow','mod'=>'tgg_atos'),$_smarty_tpl);?>

    </label>
    <br />
    <br />
    <!-- MIN AMOUNT -->
	<label class="t">
		<?php echo smartyTranslate(array('s'=>'Minimum cart amount to use this payment method:','mod'=>'tgg_atos'),$_smarty_tpl);?>

		<input type="text" name="int_3tpayment_minamount" id="field_int_3tpayment_minamount" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['int_3tpayment_minamount']->value, 'html', 'UTF-8');?>
" style="width: 60px;" />
		<span class="hint"><?php echo smartyTranslate(array('s'=>'Integer value accorded to the fallback currency.','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
	</label>    
    <br />
    <br />
    <label class="t">
    	<?php echo smartyTranslate(array('s'=>'Spacing between transactions (days, max 30):','mod'=>'tgg_atos'),$_smarty_tpl);?>

    	<input type="text" name="int_3tpayment_spacing" id="field_int_3tpayment_spacing" value="<?php echo intval($_smarty_tpl->tpl_vars['int_3tpayment_spacing']->value);?>
" size="2" />
    </label>
    <br />
    <br />
    <label class="t">
    	<?php echo smartyTranslate(array('s'=>'Days before first transactions:','mod'=>'tgg_atos'),$_smarty_tpl);?>

    	<input type="text" name="int_3tpayment_delay" id="field_int_3tpayment_delay" value="<?php echo intval($_smarty_tpl->tpl_vars['int_3tpayment_delay']->value);?>
" size="2" />
    </label>
    <br />
    <br />
    <!-- ORDER STATE -->
	<label class="t"><?php echo smartyTranslate(array('s'=>'Order state on payment success:','mod'=>'tgg_atos'),$_smarty_tpl);?>

		<select name="int_3tpayment_os" id="field_int_3tpayment_os">
			<option value=""></option>
		<?php  $_smarty_tpl->tpl_vars['order_state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order_state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_states']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order_state']->key => $_smarty_tpl->tpl_vars['order_state']->value){
$_smarty_tpl->tpl_vars['order_state']->_loop = true;
?>
			<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['order_state']->value['id_order_state'], 'htmlall', 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['int_3tpayment_os']->value==$_smarty_tpl->tpl_vars['order_state']->value['id_order_state']){?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['order_state']->value['name'], 'htmlall', 'UTF-8');?>
</option>
		<?php } ?>
		</select>
	</label>
    <br />
    <br />
	<!-- PAYMENT FEES -->
	<label class="t" for="float_3tpayment_fees">
		<?php echo smartyTranslate(array('s'=>'Apply payment fees:','mod'=>'tgg_atos'),$_smarty_tpl);?>

	</label>
	<div>
		<input type="text" name="float_3tpayment_fees" id="field_float_3tpayment_fees" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['float_3tpayment_fees']->value, 'html', 'UTF-8');?>
" style="width: 60px;" /> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['default_currency']->value['sign'], 'html', 'UTF-8');?>

		+
		<input type="text" name="float_3tpayment_fees_p" id="field_float_3tpayment_fees_p" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['float_3tpayment_fees_p']->value, 'html', 'UTF-8');?>
" style="width: 60px;" /> % <?php echo smartyTranslate(array('s'=>'of order total','mod'=>'tgg_atos'),$_smarty_tpl);?>

		<span class="hint"><?php echo smartyTranslate(array('s'=>'Fees value accorded to the fallback currency.','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
	</div>
    <br />
    <br />
</div>
<?php }} ?>