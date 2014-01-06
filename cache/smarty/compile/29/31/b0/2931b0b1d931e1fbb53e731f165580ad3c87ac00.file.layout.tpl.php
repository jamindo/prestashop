<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 18:29:49
=======
<?php /* Smarty version Smarty-3.1.14, created on 2013-12-30 10:39:04
>>>>>>> inscription/connexion
         compiled from "C:\xampp\htdocs\prestashop\themes\default\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2072252c13f382f4d66-10513413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2931b0b1d931e1fbb53e731f165580ad3c87ac00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\layout.tpl',
      1 => 1384260138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2072252c13f382f4d66-10513413',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5272819b13f381_16313254',
  'variables' => 
  array (
    'display_header' => 0,
    'HOOK_HEADER' => 0,
    'template' => 0,
    'display_footer' => 0,
    'live_edit' => 0,
  ),
  'has_nocache_code' => false,
<<<<<<< HEAD
=======
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c13f3833e197_37597143',
>>>>>>> inscription/connexion
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c13f3833e197_37597143')) {function content_52c13f3833e197_37597143($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_header']->value)){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('HOOK_HEADER'=>$_smarty_tpl->tpl_vars['HOOK_HEADER']->value), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['template']->value)){?><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)){?><?php echo $_smarty_tpl->tpl_vars['live_edit']->value;?>
<?php }?><?php }} ?>