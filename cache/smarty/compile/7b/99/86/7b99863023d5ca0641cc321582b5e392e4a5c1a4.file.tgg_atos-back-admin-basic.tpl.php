<?php /* Smarty version Smarty-3.1.14, created on 2014-01-16 11:47:43
         compiled from "C:\xampp\htdocs\prestashop\modules\tgg_atos\admin-tpl\tgg_atos-back-admin-basic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1809152d7b8cfc05143-01275421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b99863023d5ca0641cc321582b5e392e4a5c1a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\tgg_atos\\admin-tpl\\tgg_atos-back-admin-basic.tpl',
      1 => 1389030504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1809152d7b8cfc05143-01275421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'highlights' => 0,
    'banks' => 0,
    'bankname' => 0,
    'bank' => 0,
    'banktitle' => 0,
    'demo' => 0,
    'merchant_ids' => 0,
    'mid' => 0,
    'merchant_id' => 0,
    'currencies' => 0,
    'currency' => 0,
    'fallback_currency' => 0,
    'int_minamount' => 0,
    'float_payment_fees' => 0,
    'default_currency' => 0,
    'float_payment_fees_p' => 0,
    'order_states' => 0,
    'order_state' => 0,
    'os_payment_success' => 0,
    'capture_modes' => 0,
    'option_capture' => 0,
    'capture_mode' => 0,
    'int_capture_day' => 0,
    'bool_response_log_txt' => 0,
    'bool_response_log_csv' => 0,
    'log_path' => 0,
    'iso_lang' => 0,
    'bool_force_return' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d7b8cff41ee9_89396496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7b8cff41ee9_89396496')) {function content_52d7b8cff41ee9_89396496($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?><!-- BANK -->
<label for="field_bank"<?php if (in_array('bank',$_smarty_tpl->tpl_vars['highlights']->value['BASIC'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Bank server to use:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
    <select name="bank" id="field_bank">
    <?php  $_smarty_tpl->tpl_vars['banktitle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banktitle']->_loop = false;
 $_smarty_tpl->tpl_vars['bankname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['banks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banktitle']->key => $_smarty_tpl->tpl_vars['banktitle']->value){
$_smarty_tpl->tpl_vars['banktitle']->_loop = true;
 $_smarty_tpl->tpl_vars['bankname']->value = $_smarty_tpl->tpl_vars['banktitle']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['bankname']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['bank']->value==$_smarty_tpl->tpl_vars['bankname']->value){?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['banktitle']->value, 'html', 'UTF-8');?>
</option>
    <?php } ?>
    </select>
</div>
<!-- MODE -->
<label for="field_demo"><?php echo smartyTranslate(array('s'=>'Mode:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
    <select name="demo" id="field_demo" onchange="if ($(this).val() == '1') {$('#production_conf:visible').hide('fast')} else {$('#production_conf:hidden').show('fast')}">
    	<option value="1"<?php if ($_smarty_tpl->tpl_vars['demo']->value){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Demo/Test','mod'=>'tgg_atos'),$_smarty_tpl);?>
</option>
    	<option value="0"<?php if (!$_smarty_tpl->tpl_vars['demo']->value){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Production or pre-production','mod'=>'tgg_atos'),$_smarty_tpl);?>
</option>
    </select>
</div>
<!-- PRODUCTION PANEL -->
<div id="production_conf"<?php if ($_smarty_tpl->tpl_vars['demo']->value){?> style="display: none"<?php }?>>
	<!-- MERCHANT ID -->
    <label for="field_merchant_id"<?php if (in_array('merchant_id',$_smarty_tpl->tpl_vars['highlights']->value['BASIC'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Merchant id to use:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
    <div class="margin-form">
        <?php if (count($_smarty_tpl->tpl_vars['merchant_ids']->value)){?>
            <select name="merchant_id" id="field_merchant_id">
            <?php  $_smarty_tpl->tpl_vars['mid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mid']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['merchant_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mid']->key => $_smarty_tpl->tpl_vars['mid']->value){
$_smarty_tpl->tpl_vars['mid']->_loop = true;
?>
                <option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mid']->value, 'htmlall', 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['mid']->value==$_smarty_tpl->tpl_vars['merchant_id']->value){?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mid']->value, 'htmlall', 'UTF-8');?>
</option>
            <?php } ?>
            </select>
        <?php }else{ ?>
            <span style="position: relative; top: 0.2em"><?php echo smartyTranslate(array('s'=>'No production certificate found','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
        <?php }?>
    </div>
    <!-- CERTIFICATE UPLOAD -->
    <label for="field_new_certificate"><?php echo smartyTranslate(array('s'=>'Upload a certificate:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
    <div class="margin-form">
        <input type="file" name="new_certificate" id="field_new_certificate" />
    </div>
</div>
<!-- FALLBACK CURRENCY -->
<label for="field_fallback_currency"<?php if (in_array('fallback_currency',$_smarty_tpl->tpl_vars['highlights']->value['BASIC'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Fallback currency:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
    <select name="fallback_currency" id="field_fallback_currency">
    	<option value=""></option>
		<?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
	        <option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['currency']->value['iso_code'], 'htmlall', 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['fallback_currency']->value==$_smarty_tpl->tpl_vars['currency']->value['iso_code']){?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['currency']->value['name'], 'htmlall', 'UTF-8');?>
&nbsp;<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['currency']->value['sign'], 'htmlall', 'UTF-8');?>
</option>
        <?php } ?>
    </select>
</div>
<!-- MIN AMOUNT -->
<label for="field_int_minamount"<?php if (in_array('int_minamount',$_smarty_tpl->tpl_vars['highlights']->value['BASIC'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Minimum cart amount to use this payment method:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<input type="text" name="int_minamount" id="field_int_minamount" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['int_minamount']->value, 'html', 'UTF-8');?>
" style="width: 60px;" />
	<span class="hint"><?php echo smartyTranslate(array('s'=>'Integer value accorded to the fallback currency.','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
</div>
<!-- PAYMENT FEES -->
<label for="field_float_payment_fees"<?php if (in_array('float_payment_fees',$_smarty_tpl->tpl_vars['highlights']->value['BASIC'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Apply payment fees:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<input type="text" name="float_payment_fees" id="field_float_payment_fees" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['float_payment_fees']->value, 'html', 'UTF-8');?>
" style="width: 60px;" /> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['default_currency']->value['sign'], 'html', 'UTF-8');?>

	+
	<input type="text" name="float_payment_fees_p" id="field_float_payment_fees_p" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['float_payment_fees_p']->value, 'html', 'UTF-8');?>
" style="width: 60px;" /> % <?php echo smartyTranslate(array('s'=>'of order total','mod'=>'tgg_atos'),$_smarty_tpl);?>

	<span class="hint"><?php echo smartyTranslate(array('s'=>'Fees value accorded to the fallback currency.','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
</div>
<!-- ORDER STATE -->
<label for="field_os_payment_success"<?php if (in_array('os_payment_success',$_smarty_tpl->tpl_vars['highlights']->value['BASIC'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Order state on payment success:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<select name="os_payment_success" id="field_os_payment_success">
		<option value=""></option>
	<?php  $_smarty_tpl->tpl_vars['order_state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order_state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_states']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order_state']->key => $_smarty_tpl->tpl_vars['order_state']->value){
$_smarty_tpl->tpl_vars['order_state']->_loop = true;
?>
		<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['order_state']->value['id_order_state'], 'htmlall', 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['os_payment_success']->value==$_smarty_tpl->tpl_vars['order_state']->value['id_order_state']){?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['order_state']->value['name'], 'htmlall', 'UTF-8');?>
</option>
	<?php } ?>
	</select>
</div>
<label for="field_capture_mode"<?php if (in_array('capture_mode',$_smarty_tpl->tpl_vars['highlights']->value['BASIC'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Capture mode:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<select name="capture_mode" id="field_capture_mode">
	<?php  $_smarty_tpl->tpl_vars['option_capture'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option_capture']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['capture_modes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option_capture']->key => $_smarty_tpl->tpl_vars['option_capture']->value){
$_smarty_tpl->tpl_vars['option_capture']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['option_capture']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['capture_mode']->value==$_smarty_tpl->tpl_vars['option_capture']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['option_capture']->value;?>
</option>
	<?php } ?>
	</select>
	<span class="hint"><?php echo smartyTranslate(array('s'=>'has influence over interpretation of the option Capture day, cf ATOS documentation section deferred capture','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
</div>
<label for="field_int_capture_day"<?php if (in_array('int_capture_day',$_smarty_tpl->tpl_vars['highlights']->value['BASIC'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Capture day:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<select name="int_capture_day" id="field_int_capture_day">
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['name'] = 'capture_days';
$_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['loop'] = is_array($_loop=100) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['capture_days']['total']);
?>
		<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['capture_days']['index'];?>
"<?php if ($_smarty_tpl->tpl_vars['int_capture_day']->value==$_smarty_tpl->getVariable('smarty')->value['section']['capture_days']['index']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['capture_days']['index'];?>
</option>
	<?php endfor; endif; ?>
	</select>
	<span class="hint"><?php echo smartyTranslate(array('s'=>'Interpretation of this option depends upon Capture mode, cf ATOS documentation section deferred capture','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
</div>
<!-- LOGS -->
<label><?php echo smartyTranslate(array('s'=>'Log responses','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form clearfix">
	<br />
	<label class="t"><input type="checkbox" name="bool_response_log_txt" value="1"<?php if ($_smarty_tpl->tpl_vars['bool_response_log_txt']->value){?> checked="checked"<?php }?> />&nbsp;<?php echo smartyTranslate(array('s'=>'TXT format','mod'=>'tgg_atos'),$_smarty_tpl);?>
</label>
	<br />
	<br />
	<label class="t"><input type="checkbox" name="bool_response_log_csv" value="1"<?php if ($_smarty_tpl->tpl_vars['bool_response_log_csv']->value){?> checked="checked"<?php }?> />&nbsp;<?php echo smartyTranslate(array('s'=>'CSV format','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;(PHP 5 >= 5.1.0)</label>
</div>
<!-- LOGS_PATH -->
<label for="field_log_path"<?php if (in_array('log_path',$_smarty_tpl->tpl_vars['highlights']->value['BASIC'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Logfiles path:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<input type="text" name="log_path" id="field_log_path" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['log_path']->value, 'html', 'UTF-8');?>
" style="width: 550px;" />
</div>
<!-- LANG -->
<label for="field_iso_lang"<?php if (in_array('iso_lang',$_smarty_tpl->tpl_vars['highlights']->value['BASIC'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'ISO code of the language to be utilized on bank server:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<input type="text" name="iso_lang" id="field_iso_lang" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['iso_lang']->value, 'htmlall', 'UTF-8');?>
" size="2" />
	<span class="hint"><?php echo smartyTranslate(array('s'=>'Leave blank to use the same language as the one used by the visitor. Your bank server must accept each language that is activated. Consult your bank to know what language code are available on server.','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
</div>
<!-- FORCE RETURN -->
<label <?php if (in_array('bool_force_return',$_smarty_tpl->tpl_vars['highlights']->value['BASIC'])){?> class="highlighted"<?php }?>><strong><?php echo smartyTranslate(array('s'=>'Force client return:','mod'=>'tgg_atos'),$_smarty_tpl);?>
</strong>&nbsp;</label>
<div class="margin-form">
	<label class="t"><input type="checkbox" name="bool_force_return" id="field_bool_force_return" value="1"<?php if ($_smarty_tpl->tpl_vars['bool_force_return']->value){?> checked="checked"<?php }?> />&nbsp;<?php echo smartyTranslate(array('s'=>'Force client return (skip transaction result page on bank server)','mod'=>'tgg_atos'),$_smarty_tpl);?>
</label><br />
	<p><em><?php echo smartyTranslate(array('s'=>'This allows a better order tracking (with Google Analytics for exemple). This method requires long GET var values to not be filtered by your server.','mod'=>'tgg_atos'),$_smarty_tpl);?>
</em></p>
</div>
<?php }} ?>