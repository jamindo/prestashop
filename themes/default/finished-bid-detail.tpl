<h2><a href="index.php?controller=bid?id={$selected_bid.id_bid}">{$selected_bid.product_name} - Lot n&deg;{$selected_bid.id_bid}</a></h2>
<div id="bid_detail" class="clear">
	<div class="center_block">
				<span class="bidPrice">Cout d'une enchère: 1 bukyZ</span>
				<br></br> 
				<span class="bidExpiration">Enchère terminée {$selected_bid.expiration_date}</span>
</div>
<div class="right_block">
	<img src="{$selected_bid.product_image_big}">
</div>
<div class="bottom_result">
	<div>
	<h4>Informations sur la vente:</h4>
	 </br>
	{if $customer_id == $finished_bid.id_customer}
		<span id="winnerY"> Vous avez remporté ce lot pour {$finished_bid.value}€ et ainsi fait une économie de {$finished_bid.saving}% , Félicitations !</span>
		{if $finished_bid.paid == 0}
							<form action="index.php?controller=finished-bid-recap" method="post">
								<input type="hidden" id="bidId" name="bidId" value={$finished_bid.id_bid}> 
								<input type="submit" id="SubmitBidRecap" name="SubmitBidRecap" class="button" value="Récupérer le lot">
							</form>
		{/if}
	{/if}
	{if $customer_id != $finished_bid.id_customer}
	<span id="winner"> {$winner_login} a remporté ce lot pour {$finished_bid.value}€ soit une économie de {$finished_bid.saving}%</span>
	{/if}
	</div>
	</br>
	<div>
	</br>
	<h4>Détail des enchères sur ce lot:</h4>
		<TABLE>
			<tr>
				<td>Valeur</td>
				<td>Nombre d'offres</td>
			</tr>
			{for $i=0 to $total_nb}
				<tr>
					<td>{$bid_placed[$i].bid_value}</td>
					<td>
						<img src="img/degrade.png" width="{$display[$i]}px" height="15px">
					{$nb_bids_per_value[$i]}
					</td>
				</tr>
			{/for}
		</TABLE>
	</div>
</div>	
</div>	