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
<?php if ($_valid && !is_callable('content_52d7af103aaaf3_38000587')) {function content_52d7af103aaaf3_38000587($_smarty_tpl) {?>
" />

" /><?php echo smartyTranslate(array('s'=>'FIA-NET - Kwixo','mod'=>'kwixo'),$_smarty_tpl);?>
</legend>



</li>
</li>
</li>
 <u><a href="http://www.fia-net-group.com/les-services-du-groupe-fia-net/solution-de-paiement/contact-kwixo/" target="_blank"><?php echo smartyTranslate(array('s'=>'Fia-net Website','mod'=>'kwixo'),$_smarty_tpl);?>
</a></u>
</p>
" /><?php echo smartyTranslate(array('s'=>'Account settings','mod'=>'kwixo'),$_smarty_tpl);?>
</legend>
</label>
"/>
</label>
"/>
</label>
"/>
</label>
"/>
</label>
 $_from = $_smarty_tpl->tpl_vars['kwixo_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kwixo_status_name']->key => $_smarty_tpl->tpl_vars['kwixo_status_name']->value){
$_smarty_tpl->tpl_vars['kwixo_status_name']->_loop = true;
?>
" <?php if ($_smarty_tpl->tpl_vars['kwixo_status_name']->value==$_smarty_tpl->tpl_vars['kwixo_status']->value){?>Selected<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['kwixo_status_name']->value,'mod'=>'kwixo'),$_smarty_tpl);?>
</option>

</label>
"/> <?php echo smartyTranslate(array('s'=>'days','mod'=>'kwixo'),$_smarty_tpl);?>

</label>
"/> <?php echo smartyTranslate(array('s'=>'You can put multiple addresses separated by a "," ','mod'=>'kwixo'),$_smarty_tpl);?>

</label>
<br/> 
<br/> 
<br/> 
<br/> 
" /><?php echo smartyTranslate(array('s'=>'Display settings','mod'=>'kwixo'),$_smarty_tpl);?>
</legend>
</p>
 :</p>
</label>
 $_smarty_tpl->tpl_vars['kwixo_banner_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_banner_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kwixo_banner_name']->key => $_smarty_tpl->tpl_vars['kwixo_banner_name']->value){
$_smarty_tpl->tpl_vars['kwixo_banner_name']->_loop = true;
 $_smarty_tpl->tpl_vars['kwixo_banner_type']->value = $_smarty_tpl->tpl_vars['kwixo_banner_name']->key;
?>
" <?php if ($_smarty_tpl->tpl_vars['kwixo_banner_type']->value==$_smarty_tpl->tpl_vars['kwixo_banner']->value){?>Checked<?php }?> /> <?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['kwixo_banner_name']->value,'mod'=>'kwixo'),$_smarty_tpl);?>
<br/>
</label>
 $_smarty_tpl->tpl_vars['kwixo_banner_size'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_banner_sizes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kwixo_banner_name']->key => $_smarty_tpl->tpl_vars['kwixo_banner_name']->value){
$_smarty_tpl->tpl_vars['kwixo_banner_name']->_loop = true;
 $_smarty_tpl->tpl_vars['kwixo_banner_size']->value = $_smarty_tpl->tpl_vars['kwixo_banner_name']->key;
?>
" <?php if ($_smarty_tpl->tpl_vars['kwixo_banner_size']->value==$_smarty_tpl->tpl_vars['kwixo_banner_size_saved']->value){?>Checked<?php }?> /> <?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['kwixo_banner_size']->value,'mod'=>'kwixo'),$_smarty_tpl);?>
<br/>
</label>
 $_smarty_tpl->tpl_vars['kwixo_banner_position_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_banner_positions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kwixo_banner_position_name']->key => $_smarty_tpl->tpl_vars['kwixo_banner_position_name']->value){
$_smarty_tpl->tpl_vars['kwixo_banner_position_name']->_loop = true;
 $_smarty_tpl->tpl_vars['kwixo_banner_position_key']->value = $_smarty_tpl->tpl_vars['kwixo_banner_position_name']->key;
?>
" <?php if ($_smarty_tpl->tpl_vars['kwixo_banner_position_key']->value==$_smarty_tpl->tpl_vars['kwixo_banner_position']->value){?>Selected<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['kwixo_banner_position_name']->value,'mod'=>'kwixo'),$_smarty_tpl);?>
</option>	
</label>
" /><?php echo smartyTranslate(array('s'=>'Categories settings','mod'=>'kwixo'),$_smarty_tpl);?>
</legend>
 :</p>
</label>
 --</option>
 $_smarty_tpl->tpl_vars['id_product_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_product_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_type']->key => $_smarty_tpl->tpl_vars['product_type']->value){
$_smarty_tpl->tpl_vars['product_type']->_loop = true;
 $_smarty_tpl->tpl_vars['id_product_type']->value = $_smarty_tpl->tpl_vars['product_type']->key;
?>
" <?php if ($_smarty_tpl->tpl_vars['kwixo_default_product_type']->value==$_smarty_tpl->tpl_vars['id_product_type']->value){?>Selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['product_type']->value;?>
</option>
</th><th><?php echo smartyTranslate(array('s'=>'Kwixo category','mod'=>'kwixo'),$_smarty_tpl);?>
</th></tr>
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shop_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shop_category']->key => $_smarty_tpl->tpl_vars['shop_category']->value){
$_smarty_tpl->tpl_vars['shop_category']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['shop_category']->key;
?>
</td>
_product_type">
 --</option>
 $_smarty_tpl->tpl_vars['id_product_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_product_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_type']->key => $_smarty_tpl->tpl_vars['product_type']->value){
$_smarty_tpl->tpl_vars['product_type']->_loop = true;
 $_smarty_tpl->tpl_vars['id_product_type']->value = $_smarty_tpl->tpl_vars['product_type']->key;
?>
" <?php if ($_smarty_tpl->tpl_vars['shop_category']->value['kwixo_type']==$_smarty_tpl->tpl_vars['id_product_type']->value){?>Selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['product_type']->value;?>
</option>
"/><?php echo smartyTranslate(array('s'=>'Carrier settings','mod'=>'kwixo'),$_smarty_tpl);?>
</legend>
 :</p>		
</label>
 --</option>
 $_smarty_tpl->tpl_vars['id_carrier_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_carrier_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kwixo_carrier_type']->key => $_smarty_tpl->tpl_vars['kwixo_carrier_type']->value){
$_smarty_tpl->tpl_vars['kwixo_carrier_type']->_loop = true;
 $_smarty_tpl->tpl_vars['id_carrier_type']->value = $_smarty_tpl->tpl_vars['kwixo_carrier_type']->key;
?>
" <?php if ($_smarty_tpl->tpl_vars['kwixo_default_carrier_type']->value==$_smarty_tpl->tpl_vars['id_carrier_type']->value){?>Selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['kwixo_carrier_type']->value;?>
</option>
 $_smarty_tpl->tpl_vars['id_carrier_speed'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_carrier_speeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->key => $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->value){
$_smarty_tpl->tpl_vars['kwixo_carrier_speed']->_loop = true;
 $_smarty_tpl->tpl_vars['id_carrier_speed']->value = $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->key;
?>
" <?php if ($_smarty_tpl->tpl_vars['kwixo_default_carrier_speed']->value==$_smarty_tpl->tpl_vars['id_carrier_speed']->value){?>Selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->value;?>
</option>
</th><th><?php echo smartyTranslate(array('s'=>'Carrier Type','mod'=>'kwixo'),$_smarty_tpl);?>
</th><th><?php echo smartyTranslate(array('s'=>'Carrier Speed','mod'=>'kwixo'),$_smarty_tpl);?>
</th></tr></thead>
 $_smarty_tpl->tpl_vars['id_shop_carrier'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shop_carriers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shop_carrier']->key => $_smarty_tpl->tpl_vars['shop_carrier']->value){
$_smarty_tpl->tpl_vars['shop_carrier']->_loop = true;
 $_smarty_tpl->tpl_vars['id_shop_carrier']->value = $_smarty_tpl->tpl_vars['shop_carrier']->key;
?>
</td>
_carrier_type">
 --</option>
 $_smarty_tpl->tpl_vars['id_carrier_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_carrier_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kwixo_carrier_type']->key => $_smarty_tpl->tpl_vars['kwixo_carrier_type']->value){
$_smarty_tpl->tpl_vars['kwixo_carrier_type']->_loop = true;
 $_smarty_tpl->tpl_vars['id_carrier_type']->value = $_smarty_tpl->tpl_vars['kwixo_carrier_type']->key;
?>
" <?php if ($_smarty_tpl->tpl_vars['shop_carrier']->value['kwixo_type']==$_smarty_tpl->tpl_vars['id_carrier_type']->value){?>Selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['kwixo_carrier_type']->value;?>
</option>
_carrier_speed">
 $_smarty_tpl->tpl_vars['id_carrier_speed'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kwixo_carrier_speeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->key => $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->value){
$_smarty_tpl->tpl_vars['kwixo_carrier_speed']->_loop = true;
 $_smarty_tpl->tpl_vars['id_carrier_speed']->value = $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->key;
?>
" <?php if ($_smarty_tpl->tpl_vars['shop_carrier']->value['kwixo_speed']==$_smarty_tpl->tpl_vars['id_carrier_speed']->value){?>Selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['kwixo_carrier_speed']->value;?>
</option>
"/><?php echo smartyTranslate(array('s'=>'To use the withdrawal store, you must enter the address of your store.','mod'=>'kwixo'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['link_shop_setting']->value;?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'Check the details of the shop here','mod'=>'kwixo'),$_smarty_tpl);?>
</a>.
" class="button" /></center>
" class="button" /></center>
</textarea>
"/><?php echo smartyTranslate(array('s'=>'Manage your payments in the Kwixo administration interface','mod'=>'kwixo'),$_smarty_tpl);?>
</legend>
 : <a target='_blank' href='https://business.kwixo.com/merchantbo/login.htm'><?php echo smartyTranslate(array('s'=>'https://business.kwixo.com/merchantbo/login.htm','mod'=>'kwixo'),$_smarty_tpl);?>
</a>.
