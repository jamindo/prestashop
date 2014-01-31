<br></br>
<div class="tableDiv">
	<h2>1.Récapitulatif de votre Commande</h2>
	<Table width=500px>
		<tr>
			<td></td>
			<td> Lot </td>
			<td> Sous-Total </td>
		</tr>
		{for $i=0 to $nb_bid}
		<tr>
			<td><img src="{$current_bid[$i].product_image}"></td>
			<td><a href="index.php?controller=finished-bid-detail?id={$current_bid[$i].id_bid}">{$current_bid[$i].product_name} - Lot n&deg;{$current_bid[$i].id_bid}</td>
			<td><strong>{$winned_bids[$i].value}</strong></td>
		<tr>
		{/for}
		<tr>
			<td></td>
			<td><strong>Total:</strong></td>
			<td><strong>{$total}</strong></td>
		<tr>
	</Table>
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
							<input type="hidden" name="forBid" id="forBid" value="0" />
							<input type="hidden" name="bids_selected" id="bids_selected" value="{$bids_id}" />
						</form>
					</td>
				</tr>
			</table>
			<br></br>
		</li>
	</ul>
</div>
<br></br>