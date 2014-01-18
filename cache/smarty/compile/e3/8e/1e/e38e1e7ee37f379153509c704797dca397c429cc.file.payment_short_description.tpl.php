<?php /* Smarty version Smarty-3.1.14, created on 2014-01-16 11:06:41
         compiled from "C:\xampp\htdocs\prestashop\modules\kwixo\views\templates\hook\payment_short_description.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1948552d7af31dc8127-81641396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e38e1e7ee37f379153509c704797dca397c429cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\kwixo\\views\\templates\\hook\\payment_short_description.tpl',
      1 => 1389866764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1948552d7af31dc8127-81641396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kwixo_standard' => 0,
    'kwixo_std_link' => 0,
    'logo_kwixo_standard' => 0,
    'kwixo_comptant' => 0,
    'kwixo_cpt_link' => 0,
    'logo_kwixo_comptant' => 0,
    'kwixo_facturable' => 0,
    'kwixo_facturable_link' => 0,
    'kwixo_credit' => 0,
    'kwixo_credit_link' => 0,
    'logo_kwixo_credit' => 0,
    'url_simul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d7af31e60931_44140801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7af31e60931_44140801')) {function content_52d7af31e60931_44140801($_smarty_tpl) {?><script>function popup1x(){ 	var win2 = window.open('http://www.kwixo.com/static/payflow/html/popup-1x.htm','WIKwixo','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no,resizable=yes, width=820, height=800'); }function popuprnp1xrnp(){ 	var win2 = window.open('http://www.kwixo.com/static/payflow/html/popup-1x-rnp.htm','WIKwixo','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no,resizable=yes, width=820, height=800'); }function popuprnp3x(){ 	var win2 = window.open('http://www.kwixo.com/static/payflow/html/popup-3x.htm','WIKwixo','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no,resizable=yes, width=820, height=800');}function popupsimulcred(urlsimul){	var win2 = window.open(urlsimul,'WIKwixo','toolbar=no, location=no, directories=no, status=no,menubar=no, scrollbars=no, resizable=yes, width=550, height=714');}</script><?php if ($_smarty_tpl->tpl_vars['kwixo_standard']->value=='1'){?>	<p class="payment_module">		<a id="kwixo_payment" href="<?php echo $_smarty_tpl->tpl_vars['kwixo_std_link']->value;?>
">			<span class="kwixo_payment_img"><img src="<?php echo $_smarty_tpl->tpl_vars['logo_kwixo_standard']->value;?>
" /></span>			<span class="kwixo_payment_text"><span class="kwixo_payment_title"><?php echo smartyTranslate(array('s'=>"Immediate payment in one time",'mod'=>'kwixo'),$_smarty_tpl);?>
</span>				<br/><?php echo smartyTranslate(array('s'=>"1 time payment by credit card",'mod'=>'kwixo'),$_smarty_tpl);?>
				<br/><br/><span onClick="popup1x();return false;"><u><?php echo smartyTranslate(array('s'=>'Learn more','mod'=>'kwixo'),$_smarty_tpl);?>
</u></span>			</span>		</a>	</p><?php }?><?php if ($_smarty_tpl->tpl_vars['kwixo_comptant']->value=='1'){?>	<p class="payment_module">		<a id="kwixo_payment" href="<?php echo $_smarty_tpl->tpl_vars['kwixo_cpt_link']->value;?>
">			<span class="kwixo_payment_img"><img src="<?php echo $_smarty_tpl->tpl_vars['logo_kwixo_comptant']->value;?>
" /></span>			<span class="kwixo_payment_text"><span class="kwixo_payment_title"><?php echo smartyTranslate(array('s'=>"1 time payment with payment after receiving",'mod'=>'kwixo'),$_smarty_tpl);?>
</span>				<br/><?php echo smartyTranslate(array('s'=>"Payment after receiving one time by Credit Card",'mod'=>'kwixo'),$_smarty_tpl);?>
				<br/><br/><span onClick="popuprnp1xrnp();return false;"><u><?php echo smartyTranslate(array('s'=>'Learn more','mod'=>'kwixo'),$_smarty_tpl);?>
</u></span>			</span>		</a>	</p><?php }?><?php if ($_smarty_tpl->tpl_vars['kwixo_facturable']->value=='1'){?>	<p class="payment_module">		<a id="kwixo_payment" href="<?php echo $_smarty_tpl->tpl_vars['kwixo_facturable_link']->value;?>
">			<span class="kwixo_payment_img"><img src="<?php echo $_smarty_tpl->tpl_vars['logo_kwixo_comptant']->value;?>
" /></span>			<span class="kwixo_payment_text"><span class="kwixo_payment_title"><?php echo smartyTranslate(array('s'=>"Kwixo in one time payment by credit card option after receipt",'mod'=>'kwixo'),$_smarty_tpl);?>
</span>				<br/><?php echo smartyTranslate(array('s'=>"Payment after receiving one time by Credit Card",'mod'=>'kwixo'),$_smarty_tpl);?>
				<br/><br/><span onClick="popuprnp1xrnp();return false;"><u><?php echo smartyTranslate(array('s'=>'Learn more','mod'=>'kwixo'),$_smarty_tpl);?>
</u></span>			</span>		</a>	</p><?php }?><?php if ($_smarty_tpl->tpl_vars['kwixo_credit']->value=='1'){?>	<p class="payment_module">		<a id="kwixo_payment" href="<?php echo $_smarty_tpl->tpl_vars['kwixo_credit_link']->value;?>
">			<span class="kwixo_payment_img"><img src="<?php echo $_smarty_tpl->tpl_vars['logo_kwixo_credit']->value;?>
" /></span>			<span class="kwixo_payment_text"><span class="kwixo_payment_title"><?php echo smartyTranslate(array('s'=>"Payment in installments with payment after receipt",'mod'=>'kwixo'),$_smarty_tpl);?>
</span>				<br/><?php echo smartyTranslate(array('s'=>"Payment in installments - Flow after receipt",'mod'=>'kwixo'),$_smarty_tpl);?>
				<br/><br/><span onClick="popuprnp3x();return false;"><u><?php echo smartyTranslate(array('s'=>'Learn more','mod'=>'kwixo'),$_smarty_tpl);?>
</u></span>				<span onClick="popupsimulcred('<?php echo $_smarty_tpl->tpl_vars['url_simul']->value;?>
');return false;"><u><?php echo smartyTranslate(array('s'=>'Evaluate my monthly','mod'=>'kwixo'),$_smarty_tpl);?>
</u></span>			</span>		</a>	</p><?php }?><?php }} ?>