<?php /* Smarty version Smarty-3.1.14, created on 2014-01-16 11:47:44
         compiled from "C:\xampp\htdocs\prestashop\modules\tgg_atos\admin-tpl\tgg_atos-back-admin-advanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2883352d7b8d03768f2-83205067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f1d53cc19d846b3aa6834d1dba246a808435ce3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\tgg_atos\\admin-tpl\\tgg_atos-back-admin-advanced.tpl',
      1 => 1389030506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2883352d7b8d03768f2-83205067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'highlights' => 0,
    'errors_mailto' => 0,
    'errors_showtoip' => 0,
    'browsing_through' => 0,
    'bool_debug_mode' => 0,
    'bool_binaries_in_path' => 0,
    'bin_path' => 0,
    'param_path' => 0,
    'return_protocol' => 0,
    'return_domain' => 0,
    'return_protocol_auto' => 0,
    'return_domain_auto' => 0,
    'int_min_tid' => 0,
    'payment_means' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d7b8d04f8db3_40103802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7b8d04f8db3_40103802')) {function content_52d7b8d04f8db3_40103802($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?><!-- ERRORS DISPLAY -->
<label for="field_errors_mailto"<?php if (in_array('errors_mailto',$_smarty_tpl->tpl_vars['highlights']->value['ADVANCED'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'E-Mail addresses to send error reports from front-office:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<input type="text" name="errors_mailto" id="field_errors_mailto" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['errors_mailto']->value, 'htmlall', 'UTF-8');?>
" style="width: 550px;" />
	<span class="hint"><?php echo smartyTranslate(array('s'=>'Semi-colon separated list, use PS_SHOP_EMAIL to refer to Prestashop administrator e-mail.','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
</div>
<label for="field_errors_showtoip"<?php if (in_array('errors_showtoip',$_smarty_tpl->tpl_vars['highlights']->value['ADVANCED'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'IP allowed to see run-time errors in front-office (will break http redirections if any after error):','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<input type="text" name="errors_showtoip" id="field_errors_showtoip" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['errors_showtoip']->value, 'htmlall', 'UTF-8');?>
" style="width: 550px;" />
	<br />
	<?php echo smartyTranslate(array('s'=>'Your current browsing configuration syntax string is:','mod'=>'tgg_atos'),$_smarty_tpl);?>

	<a href="#" onclick="var f = $('#field_errors_showtoip'); f.val(f.val() ? f.val() + '; ' + $(this).text() : $(this).text()); return false;" title="<?php echo smartyTranslate(array('s'=>'Click to add','mod'=>'tgg_atos'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['browsing_through']->value;?>
</a>
	<br />
	<span class="hint"><?php echo smartyTranslate(array('s'=>'Semi-colon separated list, a special syntax is allowed when using proxies : a.a.a.a:b.b.b.b stands for b.b.b.b (HTTP_X_FORWARDED_FOR header) is allowed through proxy a.a.a.a, a.a.a.a:* stands for any IP using proxy a.a.a.a (HTTP_X_FORWARDED_FOR header being on or not) and a.a.a.a himself (actually, do exactly the same as a.a.a.a in a more explicit way), *:b.b.b.b stands for b.b.b.b using ANY proxy (which is the way Prestashop developpement IP works, which is DANGEROUS), *:* allows any IP trough any proxy (which is stupid and dangerous).','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
	<br />
	<!-- ATOS DEBUG MODE -->
	<label class="t clearfix" style="width: 500px; line-height: 1.4em; text-align: left;"><input type="checkbox" name="bool_debug_mode" style="vertical-align: text-bottom;" value="1" <?php if ($_smarty_tpl->tpl_vars['bool_debug_mode']->value){?> checked="checked"<?php }?>/>&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Enable debug mode (shows information about ATOS API call parameters and shell command used on front page) for any IP above','mod'=>'tgg_atos'),$_smarty_tpl);?>
</label>
</div>
<!-- BIN PATH -->
<label for="field_bin_path"<?php if (in_array('bin_path',$_smarty_tpl->tpl_vars['highlights']->value['ADVANCED'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Binaries path (cgi-bin):','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<br />
	<label class="t clearfix" style="width: 500px; line-height: 1.4em; text-align: left;"><input type="checkbox" name="bool_binaries_in_path" style="vertical-align: text-bottom;" onclick="if ($(this).attr('checked')) {$('#field_bin_path').attr('disabled', 'disabled');} else {$('#field_bin_path').removeAttr('disabled');}" value="1" <?php if ($_smarty_tpl->tpl_vars['bool_binaries_in_path']->value){?> checked="checked"<?php }?>/>&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'My webserver holds them in his binaries path','mod'=>'tgg_atos'),$_smarty_tpl);?>
</label>
	<br />
	<br />
	<input type="text" name="bin_path" id="field_bin_path" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['bin_path']->value, 'html', 'UTF-8');?>
" style="width: 550px;" <?php if ($_smarty_tpl->tpl_vars['bool_binaries_in_path']->value){?>disabled="disabled" <?php }?>/>
</div>
<!-- PARAMS PATH -->
<label for="field_param_path"<?php if (in_array('param_path',$_smarty_tpl->tpl_vars['highlights']->value['ADVANCED'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Parameter files path:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<input type="text" name="param_path" id="field_param_path" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param_path']->value, 'html', 'UTF-8');?>
" style="width: 550px;" />
	<span class="hint"><?php echo smartyTranslate(array('s'=>'54 characters maximum','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
</div>
<!-- RETURN PROTOCOL -->
<label for="field_return_protocol"<?php if (in_array('return_protocol',$_smarty_tpl->tpl_vars['highlights']->value['ADVANCED'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Protocol to be used for user bank returns:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<select name="return_protocol" id="field_return_protocol">
		<option value="auto"<?php if ($_smarty_tpl->tpl_vars['return_protocol']->value=='auto'){?> selected="selected"<?php }?>>auto</option>
		<option value="http://"<?php if ($_smarty_tpl->tpl_vars['return_protocol']->value=='http://'){?> selected="selected"<?php }?>>http://</option>
		<option value="https://"<?php if ($_smarty_tpl->tpl_vars['return_protocol']->value=='https://'){?> selected="selected"<?php }?>>https://</option>
	</select>
</div>
<!-- RETURN DOMAIN -->
<label for="field_return_domain"<?php if (in_array('return_domain',$_smarty_tpl->tpl_vars['highlights']->value['ADVANCED'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Domain to be used for user bank returns:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<input type="text" name="return_domain" id="field_return_domain" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['return_domain']->value, 'htmlall', 'UTF-8');?>
" style="width: 200px;" />
	<span class="hint"><?php echo smartyTranslate(array('s'=>'Leave blank to use the same domain as the one used by the visitor.','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
</div>
<!-- RETURN PROTOCOL -->
<label for="field_return_protocol_auto"<?php if (in_array('return_protocol_auto',$_smarty_tpl->tpl_vars['highlights']->value['ADVANCED'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Protocol to be used for automatic bank returns:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<select name="return_protocol_auto" id="field_return_protocol_auto">
		<option value="auto"<?php if ($_smarty_tpl->tpl_vars['return_protocol_auto']->value=='auto'){?> selected="selected"<?php }?>>auto</option>
		<option value="http://"<?php if ($_smarty_tpl->tpl_vars['return_protocol_auto']->value=='http://'){?> selected="selected"<?php }?>>http://</option>
		<option value="https://"<?php if ($_smarty_tpl->tpl_vars['return_protocol_auto']->value=='https://'){?> selected="selected"<?php }?>>https://</option>
	</select>
</div>
<!-- RETURN DOMAIN -->
<label for="field_return_domain_auto"<?php if (in_array('return_domain_auto',$_smarty_tpl->tpl_vars['highlights']->value['ADVANCED'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Domain to be used for user automatic returns:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<input type="text" name="return_domain_auto" id="field_return_domain_auto" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['return_domain_auto']->value, 'htmlall', 'UTF-8');?>
" style="width: 200px;" />
	<span class="hint"><?php echo smartyTranslate(array('s'=>'Leave blank to use the same domain as the one used by the visitor.','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
</div>
<!-- MINIMUM TRANSACTION ID -->
<label for="field_int_min_tid"<?php if (in_array('int_min_tid',$_smarty_tpl->tpl_vars['highlights']->value['ADVANCED'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Start transaction IDs at:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<input type="text" name="int_min_tid" id="field_int_min_tid" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['int_min_tid']->value, 'html', 'UTF-8');?>
" style="width: 60px;" />
	<span class="hint"><?php echo smartyTranslate(array('s'=>'Maximum ID autorized by Atos is 999999, keep in mind that higher is the minimum ID you choose, lesser you will be able to offer payments by Atos a day. Must be at least 1.','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
</div>
<!-- PAYMENT MEANS -->
<label for="field_payment_means"><?php echo smartyTranslate(array('s'=>'Payment means accepted:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<input type="text" name="payment_means" id="field_payment_means" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['payment_means']->value, 'htmlall', 'UTF-8');?>
" style="width: 200px;" />
	<span class="hint"><?php echo smartyTranslate(array('s'=>'See documentation given by your bank','mod'=>'tgg_atos'),$_smarty_tpl);?>
</span>
</div><?php }} ?>