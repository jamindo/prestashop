<?php /*%%SmartyHeaderCode:12175527284323dc6f6-44585192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd09294600581173598e529e24da36cca40b89bbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\modules\\blockcategories\\blockcategories_footer.tpl',
      1 => 1384260145,
      2 => 'file',
    ),
    '5cd8a89fbef5ec2c85df1c6f2fda9c94a7586363' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1384260116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12175527284323dc6f6-44585192',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52822287372108_22603941',
  'variables' => 
  array (
    'widthColumn' => 0,
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
    'numberColumn' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52822287372108_22603941')) {function content_52822287372108_22603941($_smarty_tpl) {?>
<!-- Block categories module -->
<div class="blockcategories_footer">
	<p class="title_block">Catégories</p>
<div class="category_footer" style="width:100%">
	<div class="list">
		<ul class="tree dhtml">
	
									
<li >
	<a href="http://localhost/prestashop/index.php?id_category=3&amp;controller=category" 		title="Il est temps, pour le meilleur lecteur de musique, de remonter sur sc&egrave;ne pour un rappel. Avec le nouvel iPod, le monde est votre sc&egrave;ne.">iPods</a>
	</li>

					
													
<li >
	<a href="http://localhost/prestashop/index.php?id_category=4&amp;controller=category" 		title="Tous les accessoires &agrave; la mode pour votre iPod">Accessoires</a>
	</li>

					
													
<li class="last">
	<a href="http://localhost/prestashop/index.php?id_category=5&amp;controller=category" 		title="Le tout dernier processeur Intel, un disque dur plus spacieux, de la m&eacute;moire &agrave; profusion et d&#039;autres nouveaut&eacute;s. Le tout, dans &agrave; peine 2,59 cm qui vous lib&egrave;rent de toute entrave. Les nouveaux portables Mac r&eacute;unissent les performances, la puissance et la connectivit&eacute; d&#039;un ordinateur de bureau. Sans la partie bureau.">Portables</a>
	</li>

					
								</ul>
	</div>
</div>
<br class="clear"/>
</div>
<!-- /Block categories module -->
<?php }} ?>