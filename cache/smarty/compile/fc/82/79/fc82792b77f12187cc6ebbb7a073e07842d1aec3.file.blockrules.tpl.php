<?php /* Smarty version Smarty-3.1.14, created on 2014-01-21 12:48:14
         compiled from "C:\xampp\htdocs\prestashop\modules\blockrules\blockrules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:484252dbe6bf2e5e88-14362366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc82792b77f12187cc6ebbb7a073e07842d1aec3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blockrules\\blockrules.tpl',
      1 => 1390304519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '484252dbe6bf2e5e88-14362366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dbe6bf2f0029_10221589',
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dbe6bf2f0029_10221589')) {function content_52dbe6bf2f0029_10221589($_smarty_tpl) {?><!-- Block rules -->
<?php if ($_smarty_tpl->tpl_vars['logged']->value){?>
<?php }else{ ?>
<div id="rules_block" class="block">
<h4>Comment ça Marche ?</h4>
	<div class="block_content clearfix">
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="200" height="260">
                <param name="movie" value="img/flash/test.swf">
                <param name="wmode" value="opaque">
                <param name="quality" value="high">
                <param name="BGCOLOR" value="#F8F8F8">
                <embed src="img/flash/test.swf" width="200" height="260" wmode="opaque" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" bgcolor="#F8F8F8">
    	</object>
	</div>
</div>
<?php }?>
<!-- /Block rules --><?php }} ?>