<?php /* Smarty version Smarty-3.1.14, created on 2013-12-12 11:20:43
         compiled from "C:\xampp\htdocs\prestashop\modules\blockuserinfo\blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2767752a98dfbc570d8-32898580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd12b644e76ca94c64fe2e5b92d87aa6f481282b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blockuserinfo\\blockuserinfo.tpl',
      1 => 1386062352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2767752a98dfbc570d8-32898580',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_CATALOG_MODE' => 0,
    'link' => 0,
    'logged' => 0,
    'cookie' => 0,
    'order_process' => 0,
    'cart_qties' => 0,
    'priceDisplay' => 0,
    'blockuser_cart_flag' => 0,
    'cart' => 0,
    'back' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a98dfbd96042_66326841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a98dfbd96042_66326841')) {function content_52a98dfbd96042_66326841($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<!-- Block user information module HEADER -->
<div id="header_user" <?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>class="header_user_catalog"<?php }?>>
	<h3>Espace Client</h3>
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
		<span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_login;?>
</span>
			<br></br>
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
			 <ul id="header_nav">
                <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
                <li id="shopping_cart">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my shopping cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>

                        <span class="ajax_cart_quantity<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0){?> hidden<?php }?>"><?php echo $_smarty_tpl->tpl_vars['cart_qties']->value;?>
</span>
                        <span class="ajax_cart_product_txt<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value!=1){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'Product','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
                        <span class="ajax_cart_product_txt_s<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value<2){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'Products','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
                        <span class="ajax_cart_total<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0){?> hidden<?php }?>">
                                <?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0){?>
                                        <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1){?>
                                                <?php $_smarty_tpl->tpl_vars['blockuser_cart_flag'] = new Smarty_variable(constant('Cart::BOTH_WITHOUT_SHIPPING'), null, 0);?>
                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false,$_smarty_tpl->tpl_vars['blockuser_cart_flag']->value)),$_smarty_tpl);?>

                                        <?php }else{ ?>
                                                <?php $_smarty_tpl->tpl_vars['blockuser_cart_flag'] = new Smarty_variable(constant('Cart::BOTH_WITHOUT_SHIPPING'), null, 0);?>
                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true,$_smarty_tpl->tpl_vars['blockuser_cart_flag']->value)),$_smarty_tpl);?>

                                        <?php }?>
                                <?php }?>
                        </span>
                        <span class="ajax_cart_no_product<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'(empty)','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
                        </a>
                </li>
                <?php }?>
                <li id="your_account"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Your Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
        </ul>
		<?php }else{ ?>
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="login_form" class="std">
			Email:&nbsp;&nbsp;&nbsp;Mot de passe:
			<br></br>
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
				<a href="http://localhost/prestashop/index.php?controller=password" title="R�cup�rez votre mot de passe" rel="nofollow">Mot de passe oublie ? / </a>
				<a href="http://localhost/prestashop/index.php?controller=authentication#account-creation" title="Register" class="login">Inscription</a>
		</form>
		<?php }?>
	</p>
</div>
<!-- /Block user information module HEADER -->
<?php }} ?>