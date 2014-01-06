{if isset($bid_sucess)}
<div id="bid_result" class="clear">
<Table Border=3 WIDTH=500>
	<tr>
		<td ALIGN="center">Mise</td>
		<td ALIGN="center">Resultat</td>
	<tr>
	{for $i=0 to $table_size}
		<tr>
			<td ALIGN="center">{$bids[$i]}</td>
			{if $results[$i] == 1}
			<td ALIGN="center" BGCOLOR="green">Enchere Unique la plus Basse !</td>
			{/if}
			{if $results[$i] == 2}
			<td ALIGN="center" BGCOLOR="orange">Enchere Unique mais trop Haute !</td>
			{/if}
			{if $results[$i] == 3}
			<td ALIGN="center" BGCOLOR="red">Enchere non Unique !</td>
			{/if}
		</tr>
	{/for}
</Table>
<br></br>
<div class="bottom_result">			
	<form action="{$link->getPageLink('bid', true)|escape:'html'}" method="post">
		<input type="text" id="simpleBid" name="simpleBid" value="{if isset($smarty.post.simple_bid)}{$smarty.post.simple_bid}{/if}" style="width: 30px" />
		<input type="hidden" id="bidId" name="bidId" value={$selected_bid.id_bid}> 
		<input type="submit" id="SubmitBid" name="SubmitBid" class="button" value="Entrer une nouvelle offre">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" id="startBid" name="startBid" value="{if isset($smarty.post.start_bid)}{$smarty.post.start_bid}{/if}" style="width: 30px"/>
		<input type="text" id="closedBid" name="closedBid" style="width: 30px" value="{if isset($smarty.post.closed_bid)}{$smarty.post.closed_bid}{/if}" />
		<input type="submit" id="SubmitMultipleBid" name="SubmitMultipleBid" class="button" value="Entrer une nouvelle offre multiple">
	</form>
</div>
</div>
<br></br>
{/if}

<h2><a href="index.php?controller=bid?id={$selected_bid.id_bid}">{$selected_bid.product_name} - Lot n&deg;{$selected_bid.id_bid}</a></h2>
<div id="bid_detail" class="clear">
	<div class="center_block">
				<span class="timeRemainingBeforeExpiration">Temps restant:</span> 
				<br></br> 
				<span class="bidPrice">Cout d'une enchere: 1 bukyZ</span>
				<br></br> 
				<span class="bidExpiration">Fin de l'enchere: {$selected_bid.expiration_date}</span>
</div>
<div class="right_block">
	<img src="{$selected_bid.product_image_big}">
</div>
<div class="bottom_block">			
	<form action="{$link->getPageLink('bid', true)|escape:'html'}" method="post">
		<input type="text" id="simpleBid" name="simpleBid" value="{if isset($smarty.post.simple_bid)}{$smarty.post.simple_bid}{/if}" style="width: 30px" />
		<input type="hidden" id="bidId" name="bidId" value={$selected_bid.id_bid}> 
		<input type="submit" id="SubmitBid" name="SubmitBid" class="button" value="Entrer une offre">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" id="startBid" name="startBid" value="{if isset($smarty.post.start_bid)}{$smarty.post.start_bid}{/if}" style="width: 30px"/>
		<input type="text" id="closedBid" name="closedBid" style="width: 30px" value="{if isset($smarty.post.closed_bid)}{$smarty.post.closed_bid}{/if}" />
		<input type="submit" id="SubmitMultipleBid" name="SubmitMultipleBid" class="button" value="Entrer une offre multiple">
	</form>
</div>
<br></br>
<Table Border=3 WIDTH=500>
	<tr>
		<td ALIGN="center">Date</td>
		<td ALIGN="center">Mise</td>
		<td ALIGN="center">Resultat</td>
	</tr>
	{for $i=0 to $nb_results_history}
		<tr>
			<td ALIGN="center">
				{$credits_history[$i].bid_date}
			</td>
			<td ALIGN="center">
				{$credits_history[$i].bid_value}
			</td>
			
			{if $result_history[$i] == 1}
			<td ALIGN="center" BGCOLOR="green">Enchere Unique la plus Basse !</td>
			{/if}
			{if $result_history[$i] == 2}
			<td ALIGN="center" BGCOLOR="orange">Enchere Unique mais trop Haute !</td>
			{/if}
			{if $result_history[$i] == 3}
			<td ALIGN="center" BGCOLOR="red">Enchere non Unique !</td>
			{/if}
		</tr>
	{/for}
</Table>
<br></br>
<Table Border=3 WIDTH=500>
	<tr>
		<td>Valeur</td>
		<td>{$selected_bid.product_value}&euro;</td>
	<tr>
	<tr>
		<td>Frais de Livraison</td>
		<td>Livraison offerte !</td>
	</tr>
		<tr>
		<td>Description du produit</td>
		<td>{$selected_bid.product_description}</td>
	</tr>
</Table>
</div>