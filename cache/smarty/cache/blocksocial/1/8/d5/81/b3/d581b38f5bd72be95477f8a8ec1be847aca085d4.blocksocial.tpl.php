<?php /*%%SmartyHeaderCode:47852a98dfc270808-85224814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '47852a98dfc270808-85224814',
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a98dfc3100a6_53086714',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a98dfc3100a6_53086714')) {function content_52a98dfc3100a6_53086714($_smarty_tpl) {?>
<div id="social_block">
	<p class="title_block">Nous suivre</p>
	<ul>
		<li class="facebook"><a href="http://www.facebook.com/prestashop">Facebook</a></li>		<li class="twitter"><a href="http://www.twitter.com/prestashop">Twitter</a></li>		<li class="rss"><a href="http://www.prestashop.com/blog/en/feed/">RSS</a></li>	</ul>
</div>
<?php }} ?>