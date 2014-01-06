<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 18:34:55
         compiled from "C:\xampp\htdocs\prestashop\modules\blockuserinfo\blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1858652c13f376cda39-21616972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd12b644e76ca94c64fe2e5b92d87aa6f481282b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blockuserinfo\\blockuserinfo.tpl',
      1 => 1389029661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1858652c13f376cda39-21616972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c13f377f7517_36034525',
  'variables' => 
  array (
    'PS_CATALOG_MODE' => 0,
    'link' => 0,
    'logged' => 0,
    'cookie' => 0,
    'back' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c13f377f7517_36034525')) {function content_52c13f377f7517_36034525($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<!-- Block user information module HEADER -->
<div id="header_user" <?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>class="header_user_catalog"<?php }?>>
	<ul id="header_nav">
		<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
		<?php }?>
		<li id="your_account"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account','trhue'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Your Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
	</ul>
	<p id="header_user_info">
		<?php if ($_smarty_tpl->tpl_vars['logged']->value){?>
		<div id="loggedblock">
		<h3><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_login;?>
</h3>
			<a href="localhost/prestashop/index.php" title="<?php echo smartyTranslate(array('s'=>'View my current bid','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="myAccount" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My current bid','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
			<br></br>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="myAccount" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="logout" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
			<br></br>
			<h4>Mon solde: <?php echo $_smarty_tpl->tpl_vars['cookie']->value->nb_credits;?>
 bukyz</h4>
		</div>
		<?php }else{ ?>
		<div id="notloggedblock">
		<h3>Espace Client</h3>
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="login_form" class="std">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mot de passe
			<input type="text" id="email" name="email" style="width: 150px" value="<?php if (isset($_POST['email'])){?><?php echo stripslashes($_POST['email']);?>
<?php }?>" class="account_input" />
			<input type="password" id="passwd" name="passwd" style="width: 150px" value="<?php if (isset($_POST['passwd'])){?><?php echo stripslashes($_POST['passwd']);?>
<?php }?>" class="account_input" />
			<?php if (isset($_smarty_tpl->tpl_vars['back']->value)){?><input type="hidden" class="hidden" name="back" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['back']->value, 'htmlall', 'UTF-8');?>
" /><?php }?>
			<input type="submit" id="SubmitLogin" name="SubmitLogin" class="button" value="Ok">
			<br></br>
			<input type="checkbox" name="rememberMe" id="rememberMe" value="1" autocomplete="off">
				<label for="rememberMe"> Se souvenir de moi</label> &nbsp;&nbsp;
				<a href="http://localhost/prestashop/index.php?controller=password" title="Récupérez votre mot de passe" rel="nofollow">Mot de passe oublie ? / </a>
				<a href="http://localhost/prestashop/index.php?controller=authentication#account-creation" title="Register" class="login">Inscription</a>
		</form>
		</div>
		<?php }?>
	</p>
</div>
<!-- /Block user information module HEADER -->
<?php }} ?>