<?php /* Smarty version Smarty-3.1.14, created on 2013-11-20 11:36:53
         compiled from "C:\xampp\htdocs\prestashop\admin0556\themes\default\template\controllers\products\customization.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5794528c90c5e2f0f7-38807348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed1f30b992944faf2ab79d82324e88c7186315e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin0556\\themes\\default\\template\\controllers\\products\\customization.tpl',
      1 => 1384260184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5794528c90c5e2f0f7-38807348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj' => 0,
    'uploadable_files' => 0,
    'text_fields' => 0,
    'has_file_labels' => 0,
    'display_file_labels' => 0,
    'has_text_labels' => 0,
    'display_text_labels' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528c90c5f27fe9_91544931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528c90c5f27fe9_91544931')) {function content_528c90c5f27fe9_91544931($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['obj']->value->id)){?>
	<input type="hidden" name="submitted_tabs[]" value="Customization" />
	<h4><?php echo smartyTranslate(array('s'=>'Add or modify customizable properties.'),$_smarty_tpl);?>
</h4>
	
	<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/check_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('product_tab'=>"Customization"), 0);?>

	<div class="separation"></div><br />
	<table cellpadding="5" style="width:100%">
		<tr>
			<td style="width:150px;text-align:right;padding-right:10px;font-weight:bold;vertical-align:top;" valign="top">
				<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"uploadable_files",'type'=>"default"), 0);?>

				<label><?php echo smartyTranslate(array('s'=>'File fields:'),$_smarty_tpl);?>
</label>
			</td>
			<td style="padding-bottom:5px;">
				<input type="text" name="uploadable_files" id="uploadable_files" size="4" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['uploadable_files']->value);?>
" />
				<p class="preference_description"><?php echo smartyTranslate(array('s'=>'Number of upload file fields displayed'),$_smarty_tpl);?>
</p>
			</td>
		</tr>
		<tr>
			<td style="width:150px;text-align:right;padding-right:10px;font-weight:bold;vertical-align:top;" valign="top">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"text_fields",'type'=>"default"), 0);?>

			<label><?php echo smartyTranslate(array('s'=>'Text fields:'),$_smarty_tpl);?>
</label>
			</td>
			<td style="padding-bottom:5px;">
				<input type="text" name="text_fields" id="text_fields" size="4" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['text_fields']->value);?>
" />
				<p class="preference_description"><?php echo smartyTranslate(array('s'=>'Number of text fields displayed'),$_smarty_tpl);?>
</p>
			</td>
		</tr>
		<tr>
			<td><div class="clear">&nbsp;</div></td>
		</tr>

		<?php if ($_smarty_tpl->tpl_vars['has_file_labels']->value){?>
			<tr>
				<td colspan="2"><div class="separation"></div></td>
			</tr>
			<tr>
				<td style="width:200px" valign="top"><?php echo smartyTranslate(array('s'=>'Define the label of the file fields:'),$_smarty_tpl);?>
</td>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['display_file_labels']->value;?>

				</td>
			</tr>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['has_text_labels']->value){?>
			<tr>
				<td colspan="2"><div class="separation"></div></td>
			</tr>
			<tr>
				<td style="width:200px" valign="top"><?php echo smartyTranslate(array('s'=>'Define the label of the text fields:'),$_smarty_tpl);?>
</td>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['display_text_labels']->value;?>

				</td>
			</tr>
		<?php }?>
	</table>
<?php }?><?php }} ?>