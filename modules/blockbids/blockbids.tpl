<!-- Bloc Enchères -->

<h3>{$nb_bids} Encheres en cours</h3>
<div class="error" id="place_bid_error" style="display:none"></div>
<ul id="block_bids" class="clear">
	<ul id="bid_list" class="clear">
		{foreach from=$bids item=bid name=bids}
		<li>
			<h2><a href="index.php?controller=bid?id={$bid.id_bid}">{$bid.product_name} - Lot n&deg;{$bid.id_bid}</a></h2>
			<input id="book" type="checkbox" name="bookmarkBid" value="{$bid.id_bid}"/><label for="book"></label>
			<div class="center_block">
				<span class="timeRemainingBeforeExpiration">Temps restant:</span> 
				<br></br> 
				<span class="bidPrice">Valeur du lot: {$bid.product_value}&euro;</span>
				<br></br> 
				<span class="bidPrice">Cout d'une enchere: 1 bukyZ</span>
				<br></br> 
				<span class="bidExpiration">Fin de l'enchere: {$bid.expiration_date}</span>
			</div>
			<div class="right_block">
			<img src="{$bid.product_image}">
			</div>
			<div class="bottom_block">
			<form action="{$link->getPageLink('bid', true)|escape:'html'}" method="post">
				<input type="text" id="simpleBid" name="simpleBid" value="{if isset($smarty.post.simple_bid)}{$smarty.post.simple_bid}{/if}" style="width: 30px" />
				<input type="hidden" id="bidId" name="bidId" value={$bid.id_bid}> 
				<input type="submit" id="SubmitBid" name="SubmitBid" class="button" value="Entrer une offre">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" id="startBid" name="startBid" value="{if isset($smarty.post.start_bid)}{$smarty.post.start_bid}{/if}" style="width: 30px"/>
				<input type="text" id="closedBid" name="closedBid" style="width: 30px" value="{if isset($smarty.post.closed_bid)}{$smarty.post.closed_bid}{/if}" />
				<input type="submit" id="SubmitMultipleBid" name="SubmitMultipleBid" class="button" value="Entrer une offre multiple">
			</form>
			</div>
		</li>
		{/foreach}
	</ul>
</ul>