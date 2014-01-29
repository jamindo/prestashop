<?php /* Smarty version Smarty-3.1.14, created on 2014-01-21 16:33:56
         compiled from "C:\xampp\htdocs\prestashop\modules\blockcredits\blockcredits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16052d6ad3c454098-24514697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf2e18275f3a02e5f106d8543ac76d7f5ca2185' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blockcredits\\blockcredits.tpl',
      1 => 1390306407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16052d6ad3c454098-24514697',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d6ad3c468042_28755807',
  'variables' => 
  array (
    'logged' => 0,
    'nb_credits' => 0,
    'link' => 0,
    'has_customer_an_address' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6ad3c468042_28755807')) {function content_52d6ad3c468042_28755807($_smarty_tpl) {?><!-- Block inscription -->
<?php if ($_smarty_tpl->tpl_vars['logged']->value){?>
<div id="credits_block" class="block">
<h4>Mon compte</h4>
<ul class="myaccount_lnk_list">
<br></br>
	<h3>Mon solde: <?php echo $_smarty_tpl->tpl_vars['nb_credits']->value;?>
 bukyz</h3>
	
	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('buy-credits',true), ENT_QUOTES, 'UTF-8', true);?>
"> Achat de credit</a></li>
	<?php if ($_smarty_tpl->tpl_vars['has_customer_an_address']->value){?>
	</br>
	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
">Enregistrer mon adresse</a></li>
	<?php }?>
	</br>
	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('personal-history',true), ENT_QUOTES, 'UTF-8', true);?>
">Historique des enchères</a></li>
	</br>
	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('followed-bid',true), ENT_QUOTES, 'UTF-8', true);?>
">Mes enchères</a></li>
	</br>
	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
">Mes adresses</a></li>
	</br>
	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
">Mes informations</a></li>
	</ul>
</div>
<?php }?>
<!-- /Block inscription --><?php }} ?>