<?php /* Smarty version Smarty-3.1.14, created on 2014-01-16 11:47:44
         compiled from "C:\xampp\htdocs\prestashop\modules\tgg_atos\admin-tpl\tgg_atos-back-admin-graphic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2484052d7b8d023d851-57255625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '267bae4924ef0397add079f9eacacba9d721d1e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\tgg_atos\\admin-tpl\\tgg_atos-back-admin-graphic.tpl',
      1 => 1389030503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2484052d7b8d023d851-57255625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'highlights' => 0,
    'logo_name' => 0,
    'card_img_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d7b8d02b0e91_80582605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7b8d02b0e91_80582605')) {function content_52d7b8d02b0e91_80582605($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?><?php if (stripos($_SERVER['SERVER_SOFTWARE'],'win')===false){?>
<div style="clear: both; text-align: center; padding: 1.5em 0;">
	<input type="submit" name="makeTheme" class="button" value="<?php echo smartyTranslate(array('s'=>'Create theme dir (will overwrite if existing)','mod'=>'tgg_atos'),$_smarty_tpl);?>
" />
</div>
<?php }?>
<!-- LOGO NAME -->
<label for="field_logo_name"<?php if (in_array('logo_name',$_smarty_tpl->tpl_vars['highlights']->value['GRAPHIC'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Merchant logo name:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
    <input type="text" name="logo_name" id="field_logo_name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['logo_name']->value, 'htmlall', 'UTF-8');?>
" />
</div>
<!-- CARD LOGOS PATH -->
<label for="field_card_img_path"<?php if (in_array('card_img_path',$_smarty_tpl->tpl_vars['highlights']->value['GRAPHIC'])){?> class="highlighted"<?php }?>><?php echo smartyTranslate(array('s'=>'Cards logos path:','mod'=>'tgg_atos'),$_smarty_tpl);?>
&nbsp;</label>
<div class="margin-form">
	<input type="text" name="card_img_path" id="field_card_img_path" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['card_img_path']->value, 'html', 'UTF-8');?>
" style="width: 550px;" />
</div>
<?php }} ?>