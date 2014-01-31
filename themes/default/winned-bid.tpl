<h3>Enchères remportées</h3>
{if $nb_unpaid_bid > 1}
<form action="index.php?controller=finished-bid-recap" method="post">
		<input type="submit" id="SubmitMultipleBidRecap" name="SubmitMultipleBidRecap" class="button" value="Récupérer tous les lots">
</form>
{/if}
</br>
	<Table WIDTH=700>
		{for $i=0 to $nb_winned_bids}
		<tr>
			<td> <img src="{$current_bid[$i].product_image}"></td>
			<td>
			<a href="index.php?controller=finished-bid-detail?id={$current_bid[$i].id_bid}">Lot n&deg;{$current_bid[$i].id_bid} - {$current_bid[$i].product_name}</a><br></br>
					<span id="value_sell">Vendu pour: {$winned_bids[$i].value}€</span><br></br>
					<span id="value">Valeur du lot: {$current_bid[$i].product_value}€</span><br></br>
					<span id="savings">Economie:{$winned_bids[$i].saving}%</span><br></br>
					<span id="finish">Enchère terminée {$current_bid[$i].expiration_date}</span><br></br>
					<br></br>
				</td>
				<td>
						{if $winned_bids[$i].paid == 0}
							<form action="index.php?controller=finished-bid-recap" method="post">
								<input type="hidden" id="bidId" name="bidId" value={$current_bid[$i].id_bid}> 
								<input type="submit" id="SubmitBidRecap" name="SubmitBidRecap" class="button" value="Récupérer le lot">
							</form>
						{/if}
					<h4><a href="index.php?controller=finished-bid-detail?id={$current_bid[$i].id_bid}">> Voir le détail de l'enchère</a></h4>
				</td>
			</tr>
		{/for}
	</Table>
	</br>
	{if $nb_unpaid_bid > 3}
<form action="index.php?controller=finished-bid-recap" method="post">
		<input type="submit" id="SubmitMultipleBidRecap" name="SubmitMultipleBidRecap" class="button" value="Récupérer tous les lots">
</form>
{/if}