{if $fromCBPayment == true}
<fieldset>
	<form action="{$link->getPageLink('payment', true)|escape:'html'}" method="post">
	<table align="center" width="300px">
		<tr>
			<td><span id="amount">Montant total</span></td>
			<td><span id="amountT">{$amount} EUR</span></td>
			
		</tr>
		<tr>
			<td><span id="card">Type de carte *</span></td>
			<td>
				<select name="cardType">
					<option value="visa">Visa</option>
					<option value="mastercard">MasterCard</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><span id="cardId">Numéro de carte *</span></td>
			<td>
				<input type="text" class="text" id="card_number" name="card_number" value="{if isset($smarty.post.card_number)}{$smarty.post.card_number}{/if}" />
			</td>
		</tr>
		<tr>
			<td><span id="card_expiration">Date d'expiration *</span></td>
			<td>
				<select name="month">
					<option value="mm">mm</option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select> &nbsp;&nbsp;&nbsp;
				<select name="year">
					<option value="aa">aa</option>
					<option value="14">2014</option>
					<option value="15">2015</option>
					<option value="16">2016</option>
					<option value="17">2017</option>
					<option value="18">2018</option>
					<option value="19">2019</option>
					<option value="20">2020</option>
					<option value="21">2021</option>
					<option value="22">2022</option>
					<option value="23">2023</option>
				</select> &nbsp;&nbsp;&nbsp;
				<span id="cryptog">CVC *</span>
				<input type="text" class="text" style="width: 20px" id="crypto" name="crypto" value="{if isset($smarty.post.crypto)}{$smarty.post.crypto}{/if}" />
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" id="SubmitPayment" name="SubmitPayment" class="button" value="Valider">
				<input type="hidden" name="amount" id="amount" value="{$amount}" />
			</td>
		</tr>
	</table>
	</form>
</fieldset>
{/if}

{if $fromPayment == true}
	<form action="{$link->getPageLink('payment', true)|escape:'html'}" method="post">
		<span id="sucess"> Paiement accepté, veuillez cliquer sur le bouton ci dessous pour récupérer vos crédits</span>
		<input type="submit" id="GetCredits" name="GetCredits" class="button" value="Récupérer mes crédits">
		<input type="hidden" name="total" id="total" value="{$amount}" />
	</form>
{/if}