<?php /*%%SmartyHeaderCode:7717527284326b3700-91658320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd581b38f5bd72be95477f8a8ec1be847aca085d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\modules\\blocksocial\\blocksocial.tpl',
      1 => 1383473332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7717527284326b3700-91658320',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52764fcc6330c6_18814432',
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52764fcc6330c6_18814432')) {function content_52764fcc6330c6_18814432($_smarty_tpl) {?>
<div id="social_block">
	<p class="title_block">Nous suivre</p>
	<ul>
		<li class="facebook"><a href="http://www.facebook.com/prestashop">Facebook</a></li>		<li class="twitter"><a href="http://www.twitter.com/prestashop">Twitter</a></li>		<li class="rss"><a href="http://www.prestashop.com/blog/en/feed/">RSS</a></li>	</ul>
</div>
<?php }} ?>