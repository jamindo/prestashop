<?php /* Smarty version Smarty-3.1.14, created on 2013-11-27 20:02:20
         compiled from "C:\xampp\htdocs\prestashop\modules\blockinscription\blockinscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25218529630ffafe5e9-06544948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd53147e9e0dbed2eb9170a7bf45f77817ac7ab2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blockinscription\\blockinscription.tpl',
      1 => 1385578878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25218529630ffafe5e9-06544948',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529630ffb402c5_29637059',
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529630ffb402c5_29637059')) {function content_529630ffb402c5_29637059($_smarty_tpl) {?><!-- Block inscription -->
<?php if ($_smarty_tpl->tpl_vars['logged']->value){?>
<?php }else{ ?>
<div id="inscription_block" class="block">
<h4>Pourquoi s'inscrire!</h4>
	<div class="block_content clearfix">
		<span>Des lots high tech a des prix imbattables</span>
	</div>
</div>
<?php }?>
<!-- /Block inscription --><?php }} ?>