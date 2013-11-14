<?php /*%%SmartyHeaderCode:2635252728431c7e0a4-10433413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c99f74104cfd2d3da8b69713c23fe409379c469' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\homeslider\\homeslider.tpl',
      1 => 1384260146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2635252728431c7e0a4-10433413',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52822286a6a761_56558248',
  'variables' => 
  array (
    'homeslider' => 0,
    'homeslider_slides' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52822286a6a761_56558248')) {function content_52822286a6a761_56558248($_smarty_tpl) {?>
<!-- Module HomeSlider -->
<script type="text/javascript">
			var homeslider_loop = true;
	var homeslider_speed = 500;
var homeslider_pause = 3000;
</script>
<ul id="homeslider">
			<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="/prestashop/modules/homeslider/images/sample-1.jpg" alt="sample-1" height="300" width="535" />
			</a>
		</li>
				<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="/prestashop/modules/homeslider/images/sample-2.jpg" alt="sample-2" height="300" width="535" />
			</a>
		</li>
				<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="/prestashop/modules/homeslider/images/sample-3.jpg" alt="sample-3" height="300" width="535" />
			</a>
		</li>
				<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="/prestashop/modules/homeslider/images/sample-4.jpg" alt="sample-4" height="300" width="535" />
			</a>
		</li>
				<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="/prestashop/modules/homeslider/images/sample-5.jpg" alt="sample-5" height="300" width="535" />
			</a>
		</li>
	</ul>
<!-- /Module HomeSlider -->
<?php }} ?>