<?php /*%%SmartyHeaderCode:28095272843083c437-55426418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29bbdab3279039f23687670afc2fb25d532a80c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blockpermanentlinks\\blockpermanentlinks-header.tpl',
      1 => 1384260169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28095272843083c437-55426418',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52822285510b90_10517175',
  'variables' => 
  array (
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52822285510b90_10517175')) {function content_52822285510b90_10517175($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="http://localhost/prestashop/index.php?controller=contact" title="contact">contact</a></li>
	<li id="header_link_sitemap"><a href="http://localhost/prestashop/index.php?controller=sitemap" title="plan du site">plan du site</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('http://localhost/prestashop/index.php?', 'prestashop', 'favoris');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>