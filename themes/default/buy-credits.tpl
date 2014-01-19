
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
						<form action="{$link->getPageLink('payment', true)|escape:'html'}" method="post">
							<input type="submit" id="SubmitCBPayment" name="SubmitCBPayment" class="button" value="Payer par carte">
							<input type="hidden" name="amount" id="amount" value="{$total}" />
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
<br></br>