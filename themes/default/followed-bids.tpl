<script>
function CompteARebours(){
	 var date_actuelle = new Date();
	 var expiration_date = document.getElementById("affichage");
}
</script>

<h3>Mes Enchères</h3>
	<Table WIDTH=700>
		{for $i=0 to $nb_followed_bids}
			<tr>
				<td> <img src="{$followed_bids[$i].product_image}"> </td>
				<td>
					<a href="index.php?controller=bid?id={$followed_bids[$i].id_bid}">Lot n&deg;{$followed_bids[$i].id_bid} - {$followed_bids[$i].product_name}</a><br></br>
					<p id="affichage"></p>
					Valeur du lot: {$followed_bids[$i].product_value}€<br></br>
					Coût d'une enchère: 1 bukyZ<br></br>
					Fin de l'enchère: {$followed_bids[$i].expiration_date}<br></br>
				</td>
				<td>
					<form action="{$link->getPageLink('bid', true)|escape:'html'}" method="post">
						<input type="text" id="simpleBid" name="simpleBid" value="{if isset($smarty.post.simple_bid)}{$smarty.post.simple_bid}{/if}" style="width: 30px" />
						<input type="hidden" id="bidId" name="bidId" value={$bid.id_bid}> 
						<input type="submit" id="SubmitBid" name="SubmitBid" class="button" value="Entrer une offre"><br></br>
						<input type="text" id="startBid" name="startBid" value="{if isset($smarty.post.start_bid)}{$smarty.post.start_bid}{/if}" style="width: 30px"/>
						<input type="text" id="closedBid" name="closedBid" style="width: 30px" value="{if isset($smarty.post.closed_bid)}{$smarty.post.closed_bid}{/if}" />
						<input type="submit" id="SubmitMultipleBid" name="SubmitMultipleBid" class="button" value="Entrer une offre multiple">
					</form>
				</td>
			</tr>
		{/for}
	</Table>