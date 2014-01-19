<?php /* Smarty version Smarty-3.1.14, created on 2014-01-19 18:08:48
         compiled from "C:\xampp\htdocs\prestashop\themes\default\buy-credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1311652d11188829382-49016751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85e0a371eff5ae79810451f0016edd209a86276e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\buy-credits.tpl',
      1 => 1390151318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1311652d11188829382-49016751',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d1118887ad91_27610493',
  'variables' => 
  array (
    'link' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d1118887ad91_27610493')) {function content_52d1118887ad91_27610493($_smarty_tpl) {?>
<!-- script pour le bouton "j'aime" de facebook ! -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">
function getValue(selected){
	document.getElementById('amount').value=selected;
}
</script>



<div class="fb"><a href="http://www.facebook.com">	
		<img border="0" src="img/fb.jpg" alt="Facebook" title="Facebook" style="float: left;" />
	</a>
	<h2>Cliquez maintenant sur J'aime</h2></br>
et recevez tout de suite 2 BukyZ gratuitement !
	
</div>
<!-- Insertion du bouton "j'aime" de facebook ! -->
<div class="fb-like" data-href="https://www.facebook.com/pages/Buzcom/1404881823086454" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>

<br></br><br></br>
<div class="tableDiv">
	<h2>1.Choisissez un Pack de BukyZ</h2>
		<span>Choisissez la quantité de BukyZ souhaitée, le bonus augmente en fonction de la quantité choisie.</span>
	 <br></br>
	 <table align="center" width="500px">
	<tr>
		<td align="center"><img src="img/fleche_bas.png"></td>
		<td align="center">Pack</td>
		<td align="center">BukyZ</td>
		<td align="center">Bonus</td>
		<td align="center">TOTAL</td>
	</tr>
   <tbody>
   <tr onclick="getValue('5');">
		<td  align="center"><input type="radio" id="a5" value="5" name="price"></td>
		<td align="center"><strong>5€</strong></td>
		<td  align="center"><span>5</span></td>
		<td align="center"><span>+0</span></td>
		<td  align="center"><span>5</span></td>
	</tr>
	 <tr onclick="getValue('20');">
		<td align="center"><input type="radio" id="a20" value="20" name="price"></td>
		<td align="center"><strong>20€</strong></td>
		<td align="center"><span>20</span></td>
		<td align="center"><span>+2</span></td>
		<td align="center"><span>22</span></td>
	</tr>
	<tr onclick="getValue('50');">
		<td align="center"><input type="radio" id="a50" value="50" name="price" checked=""></td>
		<td align="center"><strong>50€</strong></td>
		<td align="center"><span>50</span></td>
		<td align="center"><span>+15</span></td>
		<td align="center"><span>65</span></td>
	</tr>
	<tr onclick="getValue('100');">
		<td align="center"><input type="radio" id="a100" value="100" name="price"></td>
		<td align="center"><span><strong>100€</strong></span></td>
		<td align="center"><span class="fontBlack">100</span></td>
		<td align="center"><span class="fontOrange">+40</span></td>
		<td align="center"><span class="fontBlack">140</span></td>
	</tr>
	<tr onclick="getValue('250');">
		<td align="center"><input type="radio" id="a250" value="250" name="price"></td>
		<td align="center"><strong>250€</strong></td>
		<td align="center"><span>250</span></td>
		<td align="center"><span>+125</span></td>
		<td align="center"><span>375</span></td>
	</tr>
</tbody>	
	 </table>
</div>
<br></br>
<h2>2.Choisissez un moyen de Paiement</h2>

<div class="paiement_block">
	<ul id="payment_list" class="clear">
		<li>
			<h3>Carte Bancaire</h3>
			<table width="500px" align="center">
				<tr>
					<td><img src="img/sigle_cb.gif"></td>
					<td>
						<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('payment',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
							<input type="submit" id="SubmitCBPayment" name="SubmitCBPayment" class="button" value="Payer par carte">
							<input type="hidden" name="amount" id="amount" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" />
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
							<input type="hidden" name="ma_variable" id="ma_variable" value="" />
						</form>
					</td>
				</tr>
			</table>
			</br>
		</li>
	</ul>
</div>
<br></br><?php }} ?>