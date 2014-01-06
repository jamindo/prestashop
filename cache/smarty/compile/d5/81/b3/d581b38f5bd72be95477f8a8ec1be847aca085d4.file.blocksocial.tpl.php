<?php /* Smarty version Smarty-3.1.14, created on 2013-12-30 10:39:04
         compiled from "C:\xampp\htdocs\prestashop\themes\default\modules\blocksocial\blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1322352c13f380a44c8-21123936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd581b38f5bd72be95477f8a8ec1be847aca085d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\modules\\blocksocial\\blocksocial.tpl',
      1 => 1384260112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1322352c13f380a44c8-21123936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c13f380f0c90_23466456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c13f380f0c90_23466456')) {function content_52c13f380f0c90_23466456($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<div id="social_block">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Follow us','mod'=>'blocksocial'),$_smarty_tpl);?>
</p>
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!=''){?><li class="facebook"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['facebook_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!=''){?><li class="twitter"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['twitter_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!=''){?><li class="rss"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['rss_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
	</ul>
</div>
<?php }} ?>