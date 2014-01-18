<?php /* Smarty version Smarty-3.1.14, created on 2014-01-17 19:34:43
         compiled from "C:\xampp\htdocs\prestashop\themes\default\credit-payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:510252d7ada65afe08-55626242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce646b8d87bc9a4c7e0732f7d34c5cab990bb1e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\credit-payment.tpl',
      1 => 1389983677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '510252d7ada65afe08-55626242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d7ada6cf79a5_04806801',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7ada6cf79a5_04806801')) {function content_52d7ada6cf79a5_04806801($_smarty_tpl) {?><h2>2.Choisissez un moyen de Paiement</h2>

<div class="paiement_block">
	<ul id="payment_list" class="clear">
		<li>
			<h3>Carte Bancaire</h3>
			<table width="500px" align="center">
				<tr>
					<td><img src="img/sigle_cb.gif"></td>
					<td>
						<form action="/prestashop/modules/tgg_atos/front-ctrl/payment-redirect.php" title="Payer par carte">
							<input type="submit" id="SubmitCBPayment" name="SubmitCBPayment" class="button" value="Payer par carte">
						</form>
					</td>
				</tr>
			</table>
			<br></br>
		</li>
		<li>
			<h3>Paypal</h3>
			<table width="500px" align="center">
				<tr>
					<td><img src="img/logo_paypal.gif"></td>
					<td>
						<form action="modules/paypal/express_checkout/payment.php" method="post">
							<input type="submit" id="SubmitPaypalPayment" name="SubmitPaypalPayment" class="button" value="Payer avec Paypal">
						</form>
					</td>
				</tr>
			</table>
			</br>
		</li>
	</ul>
</div>
<br></br>
<?php }} ?>