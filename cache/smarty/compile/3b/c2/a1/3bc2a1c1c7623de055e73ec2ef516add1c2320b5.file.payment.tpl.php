<?php /* Smarty version Smarty-3.1.14, created on 2014-01-17 17:01:13
         compiled from "C:\xampp\htdocs\prestashop\modules\payzen\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2015252d953c976f2a6-79751737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bc2a1c1c7623de055e73ec2ef516add1c2320b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\payzen\\views\\templates\\hook\\payment.tpl',
      1 => 1389974326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2015252d953c976f2a6-79751737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payzen_single_enabled' => 0,
    'payzen_std_card_data_mode' => 0,
    'base_dir_ssl' => 0,
    'payzen_std_title' => 0,
    'link' => 0,
    'payzen_avail_cards' => 0,
    'first' => 0,
    'card' => 0,
    'year' => 0,
    'payzen_multi_enabled' => 0,
    'payzen_multi_title' => 0,
    'payzen_multi_options' => 0,
    'key' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d953c99666c0_31440875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d953c99666c0_31440875')) {function content_52d953c99666c0_31440875($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.date_format.php';
?>



<?php if ($_smarty_tpl->tpl_vars['payzen_single_enabled']->value==true){?>

	<p class="payment_module">
		<?php if ($_smarty_tpl->tpl_vars['payzen_std_card_data_mode']->value==1){?>
			<a id="payzen_standard_direct_link" href="javascript:void(0);" title="<?php echo smartyTranslate(array('s'=>'Click here to pay by bank card','mod'=>'payzen'),$_smarty_tpl);?>
">
		<?php }?>		
			<img width="120" src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/payzen/images/BannerLogo1.gif" alt="PayZen" />
			<br /><?php echo $_smarty_tpl->tpl_vars['payzen_std_title']->value;?>
		
		<?php if ($_smarty_tpl->tpl_vars['payzen_std_card_data_mode']->value==1){?>
			</a>
		<?php }?>
	</p>

	<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('payzen','redirect');?>
" method="POST" id="payzen_standard" name="payzen_standard" style="padding-left: 20px;">
		<input type="hidden" name="payzen_payment_type" value="standard" />
		<?php if (($_smarty_tpl->tpl_vars['payzen_std_card_data_mode']->value==2)||($_smarty_tpl->tpl_vars['payzen_std_card_data_mode']->value==3)){?>
			<?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['payzen_avail_cards']->value);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?>
				<input type="hidden" id="payzen_card_type_<?php echo $_smarty_tpl->tpl_vars['payzen_avail_cards']->value[0];?>
" name="payzen_card_type" value="<?php echo $_smarty_tpl->tpl_vars['payzen_avail_cards']->value[0];?>
" style="vertical-align: middle;">
				<label for="payzen_card_type_<?php echo $_smarty_tpl->tpl_vars['payzen_avail_cards']->value[0];?>
"><img style="vertical-align: middle; margin-right:10px; height:20px;" src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/payzen/images/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['payzen_avail_cards']->value[0], 'UTF-8');?>
.gif" alt="<?php echo $_smarty_tpl->tpl_vars['payzen_avail_cards']->value[0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['payzen_avail_cards']->value[0];?>
" /></label>
			<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(true, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars["card"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["card"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payzen_avail_cards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["card"]->key => $_smarty_tpl->tpl_vars["card"]->value){
$_smarty_tpl->tpl_vars["card"]->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['first']->value==true){?>
						<input type="radio" id="payzen_card_type_<?php echo $_smarty_tpl->tpl_vars['card']->value;?>
" name="payzen_card_type" value="<?php echo $_smarty_tpl->tpl_vars['card']->value;?>
" style="vertical-align: middle;" checked="checked">
						<?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(false, null, 0);?>
				  	<?php }else{ ?>	
			    		<input type="radio" id="payzen_card_type_<?php echo $_smarty_tpl->tpl_vars['card']->value;?>
" name="payzen_card_type" value="<?php echo $_smarty_tpl->tpl_vars['card']->value;?>
" style="vertical-align: middle;">
			    	<?php }?>
					<label for="payzen_card_type_<?php echo $_smarty_tpl->tpl_vars['card']->value;?>
"><img style="vertical-align: middle; margin-right:10px; height:20px;" src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/payzen/images/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['card']->value, 'UTF-8');?>
.gif" alt="<?php echo $_smarty_tpl->tpl_vars['card']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['card']->value;?>
" /></label>
				<?php } ?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['payzen_std_card_data_mode']->value==3){?>
				<p class="clear"> </p>
				<label for="payzen_card_number"> <?php echo smartyTranslate(array('s'=>'Card number','mod'=>'payzen'),$_smarty_tpl);?>
</label><br />
				<input type="text" name="payzen_card_number" value="" autocomplete="off" maxlength="19" id="payzen_card_number" size="30" maxlength="16" />
				
				<p class="clear"> </p>
				<label for="payzen_cvv"> <?php echo smartyTranslate(array('s'=>'CVV','mod'=>'payzen'),$_smarty_tpl);?>
</label><br />
				<input type="text" name="payzen_cvv" value="" autocomplete="off" maxlength="4" id="payzen_cvv" size="5" maxlength="4" />
				
				<p class="clear"> </p>
				<label for="payzen_expiry_month"><?php echo smartyTranslate(array('s'=>'Expiration date','mod'=>'payzen'),$_smarty_tpl);?>
</label><br />
				<select name="payzen_expiry_month" id="payzen_expiry_month" style="width:60px;">
					<option value=""><?php echo smartyTranslate(array('s'=>'Month'),$_smarty_tpl);?>
</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['name'] = 'expiry';
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['total']);
?>
					<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['expiry']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['expiry']['index'];?>
</option>
					<?php endfor; endif; ?>
				</select>
							
				<select name="payzen_expiry_year" id="payzen_expiry_year" style="width: 60px;">
					<option value=""><?php echo smartyTranslate(array('s'=>'Year'),$_smarty_tpl);?>
</option>
					<?php $_smarty_tpl->tpl_vars['year'] = new Smarty_variable(smarty_modifier_date_format(time(),"%Y"), null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['name'] = 'expiry';
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start'] = (int)$_smarty_tpl->tpl_vars['year']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['year']->value+9) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['expiry']['total']);
?>
			  		<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['expiry']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['expiry']['index'];?>
</option>
					<?php endfor; endif; ?>
				</select>
			<?php }?>
			
			<br /><p class="clear"> </p>
			<input type="submit" name="submit" value="<?php echo smartyTranslate(array('s'=>'Pay now','mod'=>'payzen'),$_smarty_tpl);?>
" class="button" />
		<?php }?>
	</form>
	
	<p class="clear"> </p>
	
	<script type="text/javascript">
		<?php if ($_smarty_tpl->tpl_vars['payzen_std_card_data_mode']->value==1){?>
		
			$(document).ready(function() {
				var link = $('#payzen_standard_direct_link').click(function() {
					$('#payzen_standard').submit();
					return false;
				});
			});
		
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['payzen_std_card_data_mode']->value==3){?>
		
			$(document).ready(function() {
				$('#payzen_standard').bind('submit', function() {
					$('#payzen_standard input').each(function() {
						$(this).removeClass('invalid');
					});
					
					$('#payzen_standard select').each(function() {
						$(this).removeClass('invalid');
					});
					
					var cardNumber = $('#payzen_card_number').val();
					if(cardNumber.length <= 0 || !(/^\d{13,19}$/.test(cardNumber))){
						$('#payzen_card_number').addClass('invalid');
					}
					
					var cvv = $('#payzen_cvv').val();
					if(cvv.length <= 0 || !(/^\d{3,4}$/.test(cvv))) {
						$('#payzen_cvv').addClass('invalid');
					}	
					
					var currentTime  = new Date();
					var currentMonth = currentTime.getMonth() + 1;
					var currentYear  = currentTime.getFullYear();
					
					var expiryYear = $('select[name="payzen_expiry_year"] option:selected').val();
					if(expiryYear.length <= 0 || !(/^\d{4}$/.test(expiryYear)) || expiryYear < currentYear) {
						$('#payzen_expiry_year').addClass('invalid');
					}
					
					var expiryMonth = $('select[name="payzen_expiry_month"] option:selected').val();
					if(expiryMonth.length <= 0 || !(/^\d{1,2}$/.test(expiryMonth)) || (expiryYear == currentYear && expiryMonth < currentMonth)) {
						$('#payzen_expiry_month').addClass('invalid');
					}
					
					return ($('#payzen_standard').find('.invalid').length > 0) ? false : true;
				});
			});
		
		<?php }?>
	</script>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['payzen_multi_enabled']->value==true){?>
	<p class="payment_module">
		<img width="120" src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/payzen/images/BannerLogo2.gif" alt="PayZen" />
		<br /><?php echo $_smarty_tpl->tpl_vars['payzen_multi_title']->value;?>

   	</p>
	
	<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('payzen','redirect');?>
" method="POST" name="payzen_multi" style="padding-left: 20px;">
		<input type="hidden" name="payzen_payment_type" value="multi" />
			
		<?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['payzen_multi_options']->value);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==1){?>
			<?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['payzen_multi_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value){
$_smarty_tpl->tpl_vars["option"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["option"]->key;
?>
				<div style="margin-bottom:10px;">
			   		<input type="hidden" id="payzen_opt_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="payzen_opt" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="vertical-align: middle; height:20px;" />
			      	<label for="payzen_opt_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['option']->value['label'];?>
</label>
			    </div>
	 		<?php } ?>	 
		<?php }else{ ?>
			<?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(true, null, 0);?>
			<?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['payzen_multi_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value){
$_smarty_tpl->tpl_vars["option"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["option"]->key;
?>
				<div style="margin-bottom:10px;">
					<?php if ($_smarty_tpl->tpl_vars['first']->value==true){?>
				   		<input type="radio" id="payzen_opt_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="payzen_opt" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="vertical-align: middle; height:20px;" checked="checked" />
			        	<?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(false, null, 0);?>
			      	<?php }else{ ?>
						<input type="radio" id="payzen_opt_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="payzen_opt" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="vertical-align: middle; height:20px;"/>
			    	<?php }?>
			      	<label for="payzen_opt_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['option']->value['label'];?>
</label>
		      	</div>
    		<?php } ?>
 		<?php }?>
 		
 		<p class="clear"> </p>
    		<input type="submit" name="submit" value="<?php echo smartyTranslate(array('s'=>'Pay now','mod'=>'payzen'),$_smarty_tpl);?>
" class="button" />
    	<p class="clear"> </p>
 	</form>
<?php }?><?php }} ?>