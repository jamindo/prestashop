<?php /* Smarty version Smarty-3.1.14, created on 2014-01-16 11:06:08
         compiled from "C:\xampp\htdocs\prestashop\modules\kwixo\views\templates\admin\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4952d7af100e0822-39161235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '290a41fb8038a8c1fe05e3e55554dc81de7ae15c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\kwixo\\views\\templates\\admin\\admin.tpl',
      1 => 1389866764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4952d7af100e0822-39161235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo_kwixo' => 0,
    'head_msg' => 0,
    'icon_kwixo' => 0,
    'logo_account_path' => 0,
    'kwixo_login' => 0,
    'kwixo_password' => 0,
    'kwixo_siteid' => 0,
    'kwixo_authkey' => 0,
    'kwixo_statuses' => 0,
    'kwixo_status_name' => 0,
    'kwixo_status' => 0,
    'kwixo_delivery' => 0,
    'kwixo_email_test' => 0,
    'kwixo_option_standard' => 0,
    'kwixo_option_comptant' => 0,
    'kwixo_option_credit' => 0,
    'logo_display_path' => 0,
    'kwixo_banner_types' => 0,
    'kwixo_banner_type' => 0,
    'kwixo_banner' => 0,
    'kwixo_banner_name' => 0,
    'kwixo_banner_sizes' => 0,
    'kwixo_banner_size' => 0,
    'kwixo_banner_size_saved' => 0,
    'kwixo_banner_positions' => 0,
    'kwixo_banner_position_key' => 0,
    'kwixo_banner_position' => 0,
    'kwixo_banner_position_name' => 0,
    'kwixo_show_simulator' => 0,
    'logo_categories_path' => 0,
    'kwixo_product_types' => 0,
    'id_product_type' => 0,
    'kwixo_default_product_type' => 0,
    'product_type' => 0,
    'shop_categories' => 0,
    'shop_category' => 0,
    'id' => 0,
    'logo_carriers_path' => 0,
    'kwixo_carrier_types' => 0,
    'id_carrier_type' => 0,
    'kwixo_default_carrier_type' => 0,
    'kwixo_carrier_type' => 0,
    'kwixo_carrier_speeds' => 0,
    'id_carrier_speed' => 0,
    'kwixo_default_carrier_speed' => 0,
    'kwixo_carrier_speed' => 0,
    'shop_carriers' => 0,
    'shop_carrier' => 0,
    'id_shop_carrier' => 0,
    'logo_warning' => 0,
    'link_shop_setting' => 0,
    'log_content' => 0,
    'logo_information' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d7af103aaaf3_38000587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7af103aaaf3_38000587')) {function content_52d7af103aaaf3_38000587($_smarty_tpl) {?><img src="<?php echo $_smarty_tpl->tpl_vars['logo_kwixo']->value;?>
" /><?php echo $_smarty_tpl->tpl_vars['head_msg']->value;?>
<fieldset>	<legend><img src="<?php echo $_smarty_tpl->tpl_vars['icon_kwixo']->value;?>
" /><?php echo smartyTranslate(array('s'=>'FIA-NET - Kwixo','mod'=>'kwixo'),$_smarty_tpl);?>
</legend>		<?php echo smartyTranslate(array('s'=>'Kwixo est une solution de paiement développée par le groupe Crédit Agricole et FIA-NET Europe.','mod'=>'kwixo'),$_smarty_tpl);?>
	<br /><br/>	<?php echo smartyTranslate(array('s'=>'Ce service permet à vos clients de régler leurs achats sur votre site très simplement.','mod'=>'kwixo'),$_smarty_tpl);?>
	<br /><br/>	<?php echo smartyTranslate(array('s'=>'Offrez à vos clients les modes de paiements suivants :','mod'=>'kwixo'),$_smarty_tpl);?>
	<ul>		<li><?php echo smartyTranslate(array('s'=>'Kwixo en 1 fois par CB','mod'=>'kwixo'),$_smarty_tpl);?>
</li>		<li><?php echo smartyTranslate(array('s'=>'Kwixo en 1 fois par CB avec débit après réception','mod'=>'kwixo'),$_smarty_tpl);?>
</li>		<li><?php echo smartyTranslate(array('s'=>'Kwixo en plusieurs fois par CB avec débit après réception','mod'=>'kwixo'),$_smarty_tpl);?>
</li>	</ul>	<p>	<?php echo smartyTranslate(array('s'=>'To sign in, check out: ','mod'=>'kwixo'),$_smarty_tpl);?>
 <u><a href="http://www.fia-net-group.com/les-services-du-groupe-fia-net/solution-de-paiement/contact-kwixo/" target="_blank"><?php echo smartyTranslate(array('s'=>'Fia-net Website','mod'=>'kwixo'),$_smarty_tpl);?>
</a></u></p></fieldset><br/><form action="" method="post">	<fieldset>		<p><?php echo smartyTranslate(array('s'=>'The following parameters are provided by FIA-NET.','mod'=>'kwixo'),$_smarty_tpl);?>
</p>		<legend><img src="<?php echo $_smarty_tpl->tpl_vars['logo_account_path']->value;?>
" /><?php echo smartyTranslate(array('s'=>'Account settings','mod'=>'kwixo'),$_smarty_tpl);?>
</legend>		<label><?php echo smartyTranslate(array('s'=>'Login','mod'=>'kwixo'),$_smarty_tpl);?>
</label>		<div class="margin-form">			<input type="text" name="kwixo_login" value="<?php echo $_smarty_tpl->tpl_vars['kwixo_login']->value;?>
"/>		</div>		<label><?php echo smartyTranslate(array('s'=>'Password','mod'=>'kwixo'),$_smarty_tpl);?>
</label>		<div class="margin-form">			<input type="text" name="kwixo_password" value="<?php echo $_smarty_tpl->tpl_vars['kwixo_password']->value;?>
"/>		</div>		<label><?php echo smartyTranslate(array('s'=>'Site ID','mod'=>'kwixo'),$_smarty_tpl);?>
</label>		<div class="margin-form">			<input type="text" name="kwixo_siteid" value="<?php echo $_smarty_tpl->tpl_vars['kwixo_siteid']->value;?>
"/>		</div>		<label><?php echo smartyTranslate(array('s'=>'Key','mod'=>'kwixo'),$_smarty_tpl);?>
</label>		<div class="margin-form">			<input type="text" name="kwixo_authkey" value="<?php echo $_smarty_tpl->tpl_vars['kwixo_authkey']->value;?>
"/>		</div>		<label><?php echo smartyTranslate(array('s'=>'Mode','mod'=>'kwixo'),$_smarty_tpl);?>
</label>		<div class="margin-form">			<select name="kwixo_status">				<?php  $_smarty_tpl->tpl_vars['kwixo_status_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kwixo_status_name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kwixo_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kwixo_status_name']->key => $_smarty_tpl->tpl_vars['kwixo_status_name']->value){
$_smarty_tpl->tpl_vars['kwixo_status_name']->_loop = true;
?>					<option value="<?php echo $_smarty_tpl->tpl_vars['kwixo_status_name']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['kwixo_status_name']->value==$_smarty_tpl->tpl_vars['kwixo_status']->value){?>Selected<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['kwixo_status_name']->value,'mod'=>'kwixo'),$_smarty_tpl);?>
</option>				<?php } ?>			</select> <?php echo smartyTranslate(array('s'=>'In test mode, you will not receive payment. In production mode, you will receive real payment.','mod'=>'kwixo'),$_smarty_tpl);?>
		</div>		<label><?php echo smartyTranslate(array('s'=>'Delivery','mod'=>'kwixo'),$_smarty_tpl);?>
</label>		<div class="margin-form">			<input type="text" name="kwixo_delivery" value="<?php echo $_smarty_tpl->tpl_vars['kwixo_delivery']->value;?>
"/> <?php echo smartyTranslate(array('s'=>'days','mod'=>'kwixo'),$_smarty_tpl);?>
		</div>		<label><?php echo smartyTranslate(array('s'=>'Email test','mod'=>'kwixo'),$_smarty_tpl);?>
</label>		<div class="margin-form">			<input type="text" size="40" name="kwixo_email_test" value="<?php echo $_smarty_tpl->tpl_vars['kwixo_email_test']->value;?>
"/> <?php echo smartyTranslate(array('s'=>'You can put multiple addresses separated by a "," ','mod'=>'kwixo'),$_smarty_tpl);?>
		</div>		<label><?php echo smartyTranslate(array('s'=>'Kwixo option','mod'=>'kwixo'),$_smarty_tpl);?>
</label>		<div class="margin-form">			<input name="kwixo_option_standard" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['kwixo_option_standard']->value=='1'){?>Checked<?php }?> /> <?php echo smartyTranslate(array('s'=>'Kwixo standard','mod'=>'kwixo'),$_smarty_tpl);?>
<br/> 			<input name="kwixo_option_comptant" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['kwixo_option_comptant']->value=='1'){?>Checked<?php }?> /> <?php echo smartyTranslate(array('s'=>'Kwixo comptant','mod'=>'kwixo'),$_smarty_tpl);?>
<br/> 			<input name="kwixo_option_credit" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['kwixo_option_credit']->value=='1'){?>Checked<?php }?> /> <?php echo smartyTranslate(array('s'=>'Kwixo crédit','mod'=>'kwixo'),$_smarty_tpl);?>
<br/> 			<input name="kwixo_option_facturable" disabled="disabled" type="checkbox" value="0" /> <?php echo smartyTranslate(array('s'=>'Kwixo facturable','mod'=>'kwixo'),$_smarty_tpl);?>
<br/> 		</div>	</fieldset>	<br />	<fieldset>		<legend><img src="<?php echo $_smarty_tpl->tpl_vars['logo_display_path']->value;?>
" /><?php echo smartyTranslate(array('s'=>'Display settings','mod'=>'kwixo'),$_smarty_tpl);?>
</legend>		<p><?php echo smartyTranslate(array('s'=>'The banner is a block of information displayed on your shop. It must match one of the offers that you subscribed.','mod'=>'kwixo'),$_smarty_tpl);?>
</p>		<p><?php echo smartyTranslate(array('s'=>'Choose a banner to display','mod'=>'kwixo'),$_smarty_tpl);?>
 :</p>		<label><?php echo smartyTranslate(array('s'=>'Banner to enable','mod'=>'kwixo'),$_smarty_tpl);?>
</label>		<div class="margin-form">			<?php  $_smarty_tpl->tpl_vars['kwixo_banner_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kwixo_banner_name']->_loop = false;
 $_smarty_tpl->tpl_vars['kwixo_banner_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_banner_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kwixo_banner_name']->key => $_smarty_tpl->tpl_vars['kwixo_banner_name']->value){
$_smarty_tpl->tpl_vars['kwixo_banner_name']->_loop = true;
 $_smarty_tpl->tpl_vars['kwixo_banner_type']->value = $_smarty_tpl->tpl_vars['kwixo_banner_name']->key;
?>				<input type="radio" name="kwixo_banner_types" value="<?php echo $_smarty_tpl->tpl_vars['kwixo_banner_type']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['kwixo_banner_type']->value==$_smarty_tpl->tpl_vars['kwixo_banner']->value){?>Checked<?php }?> /> <?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['kwixo_banner_name']->value,'mod'=>'kwixo'),$_smarty_tpl);?>
<br/>			<?php } ?>		</div>		<label><?php echo smartyTranslate(array('s'=>'Banner size','mod'=>'kwixo'),$_smarty_tpl);?>
</label>		<div class="margin-form">			<?php  $_smarty_tpl->tpl_vars['kwixo_banner_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kwixo_banner_name']->_loop = false;
 $_smarty_tpl->tpl_vars['kwixo_banner_size'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_banner_sizes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kwixo_banner_name']->key => $_smarty_tpl->tpl_vars['kwixo_banner_name']->value){
$_smarty_tpl->tpl_vars['kwixo_banner_name']->_loop = true;
 $_smarty_tpl->tpl_vars['kwixo_banner_size']->value = $_smarty_tpl->tpl_vars['kwixo_banner_name']->key;
?>				<input type="radio" name="kwixo_banner_sizes" value="<?php echo $_smarty_tpl->tpl_vars['kwixo_banner_size']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['kwixo_banner_size']->value==$_smarty_tpl->tpl_vars['kwixo_banner_size_saved']->value){?>Checked<?php }?> /> <?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['kwixo_banner_size']->value,'mod'=>'kwixo'),$_smarty_tpl);?>
<br/>			<?php } ?>		</div>		<label><?php echo smartyTranslate(array('s'=>'Banner position','mod'=>'kwixo'),$_smarty_tpl);?>
</label>		<div class="margin-form">			<select name="kwixo_banner_positions">				<?php  $_smarty_tpl->tpl_vars['kwixo_banner_position_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kwixo_banner_position_name']->_loop = false;
 $_smarty_tpl->tpl_vars['kwixo_banner_position_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_banner_positions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kwixo_banner_position_name']->key => $_smarty_tpl->tpl_vars['kwixo_banner_position_name']->value){
$_smarty_tpl->tpl_vars['kwixo_banner_position_name']->_loop = true;
 $_smarty_tpl->tpl_vars['kwixo_banner_position_key']->value = $_smarty_tpl->tpl_vars['kwixo_banner_position_name']->key;
?>					<option value="<?php echo $_smarty_tpl->tpl_vars['kwixo_banner_position_key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['kwixo_banner_position_key']->value==$_smarty_tpl->tpl_vars['kwixo_banner_position']->value){?>Selected<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['kwixo_banner_position_name']->value,'mod'=>'kwixo'),$_smarty_tpl);?>
</option>					<?php } ?>			</select><br />		</div>		<label><?php echo smartyTranslate(array('s'=>'Enable simulator on products page','mod'=>'kwixo'),$_smarty_tpl);?>
</label>		<div class="margin-form">			<input name="kwixo_show_simulator" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['kwixo_show_simulator']->value=='1'){?>Checked<?php }?> /> 		</div>	</fieldset>	<br/>		<fieldset>		<legend><img src="<?php echo $_smarty_tpl->tpl_vars['logo_categories_path']->value;?>
" /><?php echo smartyTranslate(array('s'=>'Categories settings','mod'=>'kwixo'),$_smarty_tpl);?>
</legend>		<p><?php echo smartyTranslate(array('s'=>'For a better quality of service, Kwixo needs to know the types of products','mod'=>'kwixo'),$_smarty_tpl);?>
 :</p>		<label><?php echo smartyTranslate(array('s'=>'Default Product Type','mod'=>'kwixo'),$_smarty_tpl);?>
</label>		<div class="margin-form">			<select name="kwixo_default_product_type">				<option value="0">-- <?php echo smartyTranslate(array('s'=>'Choose','mod'=>'kwixo'),$_smarty_tpl);?>
 --</option>				<?php  $_smarty_tpl->tpl_vars['product_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_type']->_loop = false;
 $_smarty_tpl->tpl_vars['id_product_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_product_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_type']->key => $_smarty_tpl->tpl_vars['product_type']->value){
$_smarty_tpl->tpl_vars['product_type']->_loop = true;
 $_smarty_tpl->tpl_vars['id_product_type']->value = $_smarty_tpl->tpl_vars['product_type']->key;
?>					<option value="<?php echo $_smarty_tpl->tpl_vars['id_product_type']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['kwixo_default_product_type']->value==$_smarty_tpl->tpl_vars['id_product_type']->value){?>Selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['product_type']->value;?>
</option>				<?php } ?>			</select>		</div>		<div class="margin-form">			<table class="table">				<thead>					<tr><th><?php echo smartyTranslate(array('s'=>'Shop category','mod'=>'kwixo'),$_smarty_tpl);?>
</th><th><?php echo smartyTranslate(array('s'=>'Kwixo category','mod'=>'kwixo'),$_smarty_tpl);?>
</th></tr>				</thead>				<tbody>					<?php  $_smarty_tpl->tpl_vars['shop_category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shop_category']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shop_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shop_category']->key => $_smarty_tpl->tpl_vars['shop_category']->value){
$_smarty_tpl->tpl_vars['shop_category']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['shop_category']->key;
?>						<tr>							<td><?php echo $_smarty_tpl->tpl_vars['shop_category']->value['name'];?>
</td>							<td>								<select name="kwixo_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_product_type">									<option value="0">-- <?php echo smartyTranslate(array('s'=>'Choose','mod'=>'kwixo'),$_smarty_tpl);?>
 --</option>									<?php  $_smarty_tpl->tpl_vars['product_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_type']->_loop = false;
 $_smarty_tpl->tpl_vars['id_product_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_product_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_type']->key => $_smarty_tpl->tpl_vars['product_type']->value){
$_smarty_tpl->tpl_vars['product_type']->_loop = true;
 $_smarty_tpl->tpl_vars['id_product_type']->value = $_smarty_tpl->tpl_vars['product_type']->key;
?>										<option value="<?php echo $_smarty_tpl->tpl_vars['id_product_type']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['shop_category']->value['kwixo_type']==$_smarty_tpl->tpl_vars['id_product_type']->value){?>Selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['product_type']->value;?>
</option>									<?php } ?>								</select>							</td>						</tr>					<?php } ?>				</tbody>			</table>		</div>	</fieldset>	<br/>	<fieldset>		<legend><img src="<?php echo $_smarty_tpl->tpl_vars['logo_carriers_path']->value;?>
"/><?php echo smartyTranslate(array('s'=>'Carrier settings','mod'=>'kwixo'),$_smarty_tpl);?>
</legend>		<p><?php echo smartyTranslate(array('s'=>'Thank you for selecting a type of carrier for each carrier of your shop','mod'=>'kwixo'),$_smarty_tpl);?>
 :</p>				<label><?php echo smartyTranslate(array('s'=>'Default Carrier Type','mod'=>'kwixo'),$_smarty_tpl);?>
</label>		<div class="margin-form">			<select name="kwixo_default_carrier_type">				<option value="0">-- <?php echo smartyTranslate(array('s'=>'Choose','mod'=>'kwixo'),$_smarty_tpl);?>
 --</option>				<?php  $_smarty_tpl->tpl_vars['kwixo_carrier_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kwixo_carrier_type']->_loop = false;
 $_smarty_tpl->tpl_vars['id_carrier_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_carrier_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kwixo_carrier_type']->key => $_smarty_tpl->tpl_vars['kwixo_carrier_type']->value){
$_smarty_tpl->tpl_vars['kwixo_carrier_type']->_loop = true;
 $_smarty_tpl->tpl_vars['id_carrier_type']->value = $_smarty_tpl->tpl_vars['kwixo_carrier_type']->key;
?>					<option value="<?php echo $_smarty_tpl->tpl_vars['id_carrier_type']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['kwixo_default_carrier_type']->value==$_smarty_tpl->tpl_vars['id_carrier_type']->value){?>Selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['kwixo_carrier_type']->value;?>
</option>				<?php } ?>			</select>			<select name="kwixo_default_carrier_speed">				<?php  $_smarty_tpl->tpl_vars['kwixo_carrier_speed'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->_loop = false;
 $_smarty_tpl->tpl_vars['id_carrier_speed'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_carrier_speeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->key => $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->value){
$_smarty_tpl->tpl_vars['kwixo_carrier_speed']->_loop = true;
 $_smarty_tpl->tpl_vars['id_carrier_speed']->value = $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->key;
?>					<option value="<?php echo $_smarty_tpl->tpl_vars['id_carrier_speed']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['kwixo_default_carrier_speed']->value==$_smarty_tpl->tpl_vars['id_carrier_speed']->value){?>Selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->value;?>
</option>				<?php } ?>			</select>		</div>		<div class="margin-form">			<table cellspacing="0" cellpadding="0" class="table">				<thead><tr><th><?php echo smartyTranslate(array('s'=>'Carrier','mod'=>'kwixo'),$_smarty_tpl);?>
</th><th><?php echo smartyTranslate(array('s'=>'Carrier Type','mod'=>'kwixo'),$_smarty_tpl);?>
</th><th><?php echo smartyTranslate(array('s'=>'Carrier Speed','mod'=>'kwixo'),$_smarty_tpl);?>
</th></tr></thead>				<tbody>					<?php  $_smarty_tpl->tpl_vars['shop_carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shop_carrier']->_loop = false;
 $_smarty_tpl->tpl_vars['id_shop_carrier'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shop_carriers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shop_carrier']->key => $_smarty_tpl->tpl_vars['shop_carrier']->value){
$_smarty_tpl->tpl_vars['shop_carrier']->_loop = true;
 $_smarty_tpl->tpl_vars['id_shop_carrier']->value = $_smarty_tpl->tpl_vars['shop_carrier']->key;
?>						<tr>							<td><?php echo $_smarty_tpl->tpl_vars['shop_carrier']->value['name'];?>
</td>							<td>								<select name="kwixo_<?php echo $_smarty_tpl->tpl_vars['id_shop_carrier']->value;?>
_carrier_type">									<option value="0">-- <?php echo smartyTranslate(array('s'=>'Choose','mod'=>'kwixo'),$_smarty_tpl);?>
 --</option>									<?php  $_smarty_tpl->tpl_vars['kwixo_carrier_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kwixo_carrier_type']->_loop = false;
 $_smarty_tpl->tpl_vars['id_carrier_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_carrier_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kwixo_carrier_type']->key => $_smarty_tpl->tpl_vars['kwixo_carrier_type']->value){
$_smarty_tpl->tpl_vars['kwixo_carrier_type']->_loop = true;
 $_smarty_tpl->tpl_vars['id_carrier_type']->value = $_smarty_tpl->tpl_vars['kwixo_carrier_type']->key;
?>										<option value="<?php echo $_smarty_tpl->tpl_vars['id_carrier_type']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['shop_carrier']->value['kwixo_type']==$_smarty_tpl->tpl_vars['id_carrier_type']->value){?>Selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['kwixo_carrier_type']->value;?>
</option>									<?php } ?>								</select>							</td>							<td>								<select name="kwixo_<?php echo $_smarty_tpl->tpl_vars['id_shop_carrier']->value;?>
_carrier_speed">									<?php  $_smarty_tpl->tpl_vars['kwixo_carrier_speed'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->_loop = false;
 $_smarty_tpl->tpl_vars['id_carrier_speed'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_carrier_speeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->key => $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->value){
$_smarty_tpl->tpl_vars['kwixo_carrier_speed']->_loop = true;
 $_smarty_tpl->tpl_vars['id_carrier_speed']->value = $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->key;
?>										<option value="<?php echo $_smarty_tpl->tpl_vars['id_carrier_speed']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['shop_carrier']->value['kwixo_speed']==$_smarty_tpl->tpl_vars['id_carrier_speed']->value){?>Selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->value;?>
</option>									<?php } ?>								</select>							</td>						</tr>					<?php } ?>				</tbody>			</table>		</div>		<br /><img src="<?php echo $_smarty_tpl->tpl_vars['logo_warning']->value;?>
"/><?php echo smartyTranslate(array('s'=>'To use the withdrawal store, you must enter the address of your store.','mod'=>'kwixo'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['link_shop_setting']->value;?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'Check the details of the shop here','mod'=>'kwixo'),$_smarty_tpl);?>
</a>.	</fieldset>	<br/>	<center><input type="submit" name="submitSettings" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'kwixo'),$_smarty_tpl);?>
" class="button" /></center></form>	<br/><center><input type="button" name="submitLog" onclick="ShowHide();" value="<?php echo smartyTranslate(array('s'=>'Show/Hide Kwixo log file','mod'=>'kwixo'),$_smarty_tpl);?>
" class="button" /></center><br/><center>	<fieldset id="kwixo_log" style="display:none;">		<textarea cols="100%" rows="10"><?php echo $_smarty_tpl->tpl_vars['log_content']->value;?>
</textarea>		<br/>	</fieldset></center><br/><fieldset>	<legend><img src="<?php echo $_smarty_tpl->tpl_vars['logo_information']->value;?>
"/><?php echo smartyTranslate(array('s'=>'Manage your payments in the Kwixo administration interface','mod'=>'kwixo'),$_smarty_tpl);?>
</legend>	<?php echo smartyTranslate(array('s'=>'Your administration interface','mod'=>'kwixo'),$_smarty_tpl);?>
 : <a target='_blank' href='https://business.kwixo.com/merchantbo/login.htm'><?php echo smartyTranslate(array('s'=>'https://business.kwixo.com/merchantbo/login.htm','mod'=>'kwixo'),$_smarty_tpl);?>
</a>.	<br/><br/><?php echo smartyTranslate(array('s'=>'The administration interface allows you Kwixo manage your payments: monitoring, cancellation, refund.','mod'=>'kwixo'),$_smarty_tpl);?>
</fieldset><?php }} ?>