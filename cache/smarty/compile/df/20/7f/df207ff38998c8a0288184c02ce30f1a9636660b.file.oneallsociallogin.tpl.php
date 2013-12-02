<?php /* Smarty version Smarty-3.1.14, created on 2013-11-16 11:19:46
         compiled from "C:\xampp\htdocs\prestashop\modules\oneallsociallogin\oneallsociallogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:825528746c2718254-25958261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df207ff38998c8a0288184c02ce30f1a9636660b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\oneallsociallogin\\oneallsociallogin.tpl',
      1 => 1384595516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '825528746c2718254-25958261',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oasl_widget_location' => 0,
    'oasl_subdomain' => 0,
    'oasl_widget_title' => 0,
    'oasl_widget_rnd' => 0,
    'oasl_widget_providers' => 0,
    'oasl_widget_css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528746c27cc0b4_72039078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528746c27cc0b4_72039078')) {function content_528746c27cc0b4_72039078($_smarty_tpl) {?>
 
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['oasl_widget_location']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='library'){?>	
	<script type="text/javascript">
	  var oneall_subdomain = '<?php echo $_smarty_tpl->tpl_vars['oasl_subdomain']->value;?>
';
	  var oneall_js_protocol = (("https:" == document.location.protocol) ? "https" : "http");
	  document.write(unescape("%3Cscript src='"+oneall_js_protocol+"://"+oneall_subdomain+".api.oneall.com/socialize/library.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
<?php }?>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['oasl_widget_location']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=='left'){?>
	<div class="block oneall_social_login_block" id="oneall_social_login_block_left">
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['oasl_widget_title']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3!=''){?>
			<p class="title_block"><?php echo $_smarty_tpl->tpl_vars['oasl_widget_title']->value;?>
</p>
		<?php }?>
		<p class="block_content">
			<div class="oneall_social_login_providers" id="oneall_social_login_providers_<?php echo $_smarty_tpl->tpl_vars['oasl_widget_rnd']->value;?>
"></div>
			<script type="text/javascript">
				oneall.api.plugins.social_login.build("oneall_social_login_providers_<?php echo $_smarty_tpl->tpl_vars['oasl_widget_rnd']->value;?>
", {
					"providers": ["<?php echo $_smarty_tpl->tpl_vars['oasl_widget_providers']->value;?>
"],
					"callback_uri": window.location.href,
					"css_theme_uri": "<?php echo $_smarty_tpl->tpl_vars['oasl_widget_css']->value;?>
" 
				});
			</script>
		</p>
	</div>
<?php }?>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['oasl_widget_location']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=='custom'){?>
	<div class="oneall_social_login_providers oneall_social_login_providers_custom" id="oneall_social_login_providers_<?php echo $_smarty_tpl->tpl_vars['oasl_widget_rnd']->value;?>
"></div>
		<script type="text/javascript">
			oneall.api.plugins.social_login.build("oneall_social_login_providers_<?php echo $_smarty_tpl->tpl_vars['oasl_widget_rnd']->value;?>
", {
				"providers": ["<?php echo $_smarty_tpl->tpl_vars['oasl_widget_providers']->value;?>
"],
				"callback_uri": window.location.href,
				"css_theme_uri": "<?php echo $_smarty_tpl->tpl_vars['oasl_widget_css']->value;?>
" 
			});
		</script>
	</div>
<?php }?>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['oasl_widget_location']->value;?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5=='right'){?>
	<div class="block oneall_social_login_block" id="oneall_social_login_block_right">
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['oasl_widget_title']->value;?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6!=''){?>
			<p class="title_block"><?php echo $_smarty_tpl->tpl_vars['oasl_widget_title']->value;?>
</p>
		<?php }?>
		<p class="block_content">
			<div class="oneall_social_login_providers" id="oneall_social_login_providers_<?php echo $_smarty_tpl->tpl_vars['oasl_widget_rnd']->value;?>
"></div>
			<script type="text/javascript">
				oneall.api.plugins.social_login.build("oneall_social_login_providers_<?php echo $_smarty_tpl->tpl_vars['oasl_widget_rnd']->value;?>
", {
					"providers": ["<?php echo $_smarty_tpl->tpl_vars['oasl_widget_providers']->value;?>
"],
					"callback_uri": window.location.href,
					"css_theme_uri": "<?php echo $_smarty_tpl->tpl_vars['oasl_widget_css']->value;?>
" 
				});
			</script>
		</p>
	</div>
<?php }?><?php }} ?>