<script type="text/javascript">
function CompteARebours(){
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
	} else {
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
				<p id="affichage"></p>
				<p id="expirDate" style="display:none;">{$date}</p>
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
<h4><a href="index.php?controller=personal-history?id={$selected_bid.id_bid}">> Voir mes enchères sur ce lot</a></h4>
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