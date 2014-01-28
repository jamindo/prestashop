<!-- Bloc Ench�res -->
<script type="text/javascript">
function CompteARebours(){
	var sel = {$nb_bids-1};
	var date_actuelle = new Date(); // On d�clare la date d'aujourd'hui.
    var expir =  document.getElementById("expirDate").innerHTML;   
	var expiration = expir.split(" ");
	
	var expiration_date = new Date(expiration[2], expiration[1]-1, expiration[0], expiration[3], expiration[4], expiration[5]);
	var tps_restant = expiration_date.getTime() - date_actuelle.getTime(); 
	var s_restantes = tps_restant / 1000; // On convertit en secondes
	var i_restantes = s_restantes / 60;
	var H_restantes = i_restantes / 60;
	var d_restants = H_restantes / 24;
	
	s_restantes = Math.floor(s_restantes % 60); // Secondes restantes
	i_restantes = Math.floor(i_restantes % 60); // Minutes restantes
	H_restantes = Math.floor(H_restantes % 24); // Heures restantes
	d_restants = Math.floor(d_restants); // Jours restants
	if(d_restants < 0){
		var texte = " <strong>Enchère terminée!</strong>";
		document.getElementById('SubmitBid').disabled=true;
		document.getElementById('SubmitMultipleBid').disabled=true;
		setInterval(CompteARebours, 10); 
		location.reload();
	}
	else {
		var texte ="";
		if(d_restants > 0){
			texte += "<strong>" +d_restants+ " j </strong>";
		}
		if(H_restantes > 0){
			texte += "<strong>" +H_restantes+ " h </strong>";
		}
		if(i_restantes > 0){
			texte += "<strong>" +i_restantes+ " min </strong>";
		}
		if(s_restantes > 0){
			texte += "<strong>" +s_restantes+ "sec </strong>";
		}
	}
	document.getElementById("affichage").innerHTML = texte;
}
setInterval(CompteARebours, 1000); 
</script>
<h3>{$nb_bids} Encheres en cours</h3>
<div class="error" id="place_bid_error" style="display:none"></div>
<ul id="block_bids" class="clear">
	<ul id="bid_list" class="clear">
		{for $i=0 to $nb_bids-1}
		<li>
			<h2><a href="index.php?controller=bid?id={$bids[$i].id_bid}">{$bids[$i].product_name} - Lot n&deg;{$bids[$i].id_bid}</a></h2>
			<form action="index.php?controller=followed-bid" method="post"> 
					<input type="hidden" id="bidId" name="bidId" value={$bids[$i].id_bid}>
					{if $bookmark[$i] == 1}
					<input type="image" src="img/book.png" id="SubmitUnbook" name="SubmitUnbook">
					{/if}
					{if $bookmark[$i] == 0}
					<input type="image" src="img/unbook.png" id="SubmitBook" name="SubmitBook">
					{/if}
			</form>
			<div class="center_block">
				<p id="affichage"></p>
				<p id="expirDate" style="display:none;">{$date_bids[$i]}</p>
				<span class="bidPrice">Valeur du lot: {$bids[$i].product_value}&euro;</span>
				<br></br> 
				<span class="bidPrice">Cout d'une enchere: 1 bukyZ</span>
				<br></br> 
				<span class="bidExpiration">Fin de l'enchere:{$bids[$i].expiration_date}</span>
			</div>
			<div class="right_block">
			<img src="{$bids[$i].product_image}">
			</div>
			<div class="bottom_block">
			<form action="{$link->getPageLink('bid', true)|escape:'html'}" method="post">
				<input type="text" id="simpleBid" name="simpleBid" value="{if isset($smarty.post.simple_bid)}{$smarty.post.simple_bid}{/if}" style="width: 30px" />
				<input type="hidden" id="bidId" name="bidId" value={$bids[$i].id_bid}> 
				<input type="submit" id="SubmitBid" name="SubmitBid" class="button" value="Entrer une offre">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" id="startBid" name="startBid" value="{if isset($smarty.post.start_bid)}{$smarty.post.start_bid}{/if}" style="width: 30px"/>
				<input type="text" id="closedBid" name="closedBid" style="width: 30px" value="{if isset($smarty.post.closed_bid)}{$smarty.post.closed_bid}{/if}" />
				<input type="submit" id="SubmitMultipleBid" name="SubmitMultipleBid" class="button" value="Entrer une offre multiple">
			</form>
			</div>
		</li>
		{/for}
	</ul>
</ul>