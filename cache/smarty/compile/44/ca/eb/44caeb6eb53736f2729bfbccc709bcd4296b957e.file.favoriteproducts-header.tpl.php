<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 18:29:49
=======
<?php /* Smarty version Smarty-3.1.14, created on 2013-12-30 10:39:03
>>>>>>> inscription/connexion
         compiled from "C:\xampp\htdocs\prestashop\modules\favoriteproducts\views\templates\hook\favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1056552c13f374fe293-82656166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44caeb6eb53736f2729bfbccc709bcd4296b957e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\favoriteproducts\\views\\templates\\hook\\favoriteproducts-header.tpl',
      1 => 1384260155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1056552c13f374fe293-82656166',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5272843065fab2_81563567',
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
<<<<<<< HEAD
=======
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c13f3761ffe3_83137738',
>>>>>>> inscription/connexion
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c13f3761ffe3_83137738')) {function content_52c13f3761ffe3_83137738($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),false));?>
';
	var favorite_products_url_remove = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),false));?>
';
<?php if (isset($_GET['id_product'])){?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>