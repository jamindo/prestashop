<?php /* Smarty version Smarty-3.1.14, created on 2014-01-21 12:48:14
         compiled from "C:\xampp\htdocs\prestashop\modules\blockinscription\blockinscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1782752d6ad3c404869-35578257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd53147e9e0dbed2eb9170a7bf45f77817ac7ab2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blockinscription\\blockinscription.tpl',
      1 => 1390304519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1782752d6ad3c404869-35578257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d6ad3c418d97_19630330',
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6ad3c418d97_19630330')) {function content_52d6ad3c418d97_19630330($_smarty_tpl) {?><!-- Block inscription -->
<?php if ($_smarty_tpl->tpl_vars['logged']->value){?>
<?php }else{ ?>
<div id="inscription_block" class="block">
<h4>Pourquoi s'inscrire!</h4>
	<div class="block_content clearfix">
	</br>
		<span id="free">&nbsp;&nbsp;Inscription gratuite !</span></br>
		<span id="lot1">&nbsp;&nbsp;Des lots jusqu'a 90% moins chers !</span></br>
		<span id="lot">&nbsp;&nbsp;Livraison rapide !</span><br></br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://localhost/prestashop/index.php?controller=authentication#account-creation">>> Je m'inscris !</a>	
	</div>
</div>
<?php }?>
<!-- /Block inscription --><?php }} ?>