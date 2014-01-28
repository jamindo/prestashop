<h3>Enchères terminées</h3>
	<Table WIDTH=700>
		{for $i=0 to $nb_finished_bids}
		<tr>
			<td> <img src="{$current_bid[$i].product_image}"></td>
			<td>
			<a href="index.php?controller=">Lot n&deg;{$current_bid[$i].id_bid} - {$current_bid[$i].product_name}</a><br></br>
					<span id="value_sell">Vendu pour: {$finished_bids[$i].value}€</span><br></br>
					<span id="value">Valeur du lot: {$current_bid[$i].product_value}€</span><br></br>
					<span id="savings">Economie:{$save[$i]}%</span><br></br>
					<span id="finish">Enchère terminée {$current_bid[$i].expiration_date}</span><br></br>
					<br></br>
				</td>
				<td>
					{if $finished_bids[$i].id_customer == $customer}
						{if $finished_bids[$i].paid == 0}
							<form action="index.php?controller=" method="post">
								<input type="hidden" id="bidId" name="bidId" value={$current_bid[$i].id_bid}> 
								<input type="submit" id="SubmitGetBid" name="SubmitGetBid" class="button" value="Récupérer le lot">
							</form>
						{/if}
						{if $finished_bids[$i].paid == 1}
							<span id="winner"><strong>Vous avez remporté cette enchère!</strong></span><br></br>
						{/if}
					{/if}
					{if $finished_bids[$i].id_customer != $customer}
					<span id="winner">Enchère remportée par :<strong>{$winner[$i]}</strong></span><br></br>
					{/if}
					<h4><a href="index.php?controller=finished-bid?id={$followed_bids[$i].id_bid}">> Voir le détail de l'enchère</a></h4>
				</td>
			</tr>
		{/for}
	</Table>