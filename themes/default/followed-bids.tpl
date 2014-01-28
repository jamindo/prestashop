<script type="text/javascript">
function CompteARebours(){
	var date_actuelle = new Date(); // On déclare la date d'aujourd'hui.
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
		var texte = " <strong>Enchère terminée</strong>";
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

<h3>Mes Enchères</h3>
	<Table WIDTH=700>
		{for $i=0 to $nb_followed_bids}
			{if $finished_bid[$i] == 0}
			<tr>
				<td> <img src="{$followed_bids[$i].product_image}"></td>
				<td>
					<a href="index.php?controller=bid?id={$followed_bids[$i].id_bid}">Lot n&deg;{$followed_bids[$i].id_bid} - {$followed_bids[$i].product_name}</a><br></br>
					<form action="index.php?controller=followed-bid" method="post"> 
						<input type="hidden" id="bidId" name="bidId" value={$followed_bids[$i].id_bid}>
						<input type="hidden" id="fromPage" name="fromPage" value="true">
						<input type="image" src="img/book.png" id="SubmitUnbook" name="SubmitUnbook">
					</form>
					<p id="affichage"></p>
					<p id="expirDate" style="display:none;">{$date_bids[$i]}</p>
					Valeur du lot: {$followed_bids[$i].product_value}€<br></br>
					Coût d'une enchère: 1 bukyZ<br></br>
					Fin de l'enchère:{$followed_bids[$i].expiration_date}<br></br>
					<br></br>
				</td>
				<td>
					<form action="{$link->getPageLink('bid', true)|escape:'html'}" method="post">
						<input type="text" id="simpleBid" name="simpleBid" value="{if isset($smarty.post.simple_bid)}{$smarty.post.simple_bid}{/if}" style="width: 30px" />
						<input type="hidden" id="bidId" name="bidId" value={$followed_bids[$i].id_bid}> 
						<input type="submit" id="SubmitBid" name="SubmitBid" class="button" value="Entrer une offre"><br></br>
						<input type="text" id="startBid" name="startBid" value="{if isset($smarty.post.start_bid)}{$smarty.post.start_bid}{/if}" style="width: 30px"/>
						<input type="text" id="closedBid" name="closedBid" style="width: 30px" value="{if isset($smarty.post.closed_bid)}{$smarty.post.closed_bid}{/if}" />
						<input type="submit" id="SubmitMultipleBid" name="SubmitMultipleBid" class="button" value="Entrer une offre multiple">
					</form>
				</td>
			</tr>
			{/if}
			{if $finished_bid[$i] == 1}
			<tr>
				<td> <img src="{$followed_bids[$i].product_image}"></td>
				<td>
					<a href="index.php?controller=">Lot n&deg;{$followed_bids[$i].id_bid} - {$followed_bids[$i].product_name}</a><br></br>
					<form action="index.php?controller=followed-bid" method="post"> 
						<input type="hidden" id="bidId" name="bidId" value={$followed_bids[$i].id_bid}>
						<input type="hidden" id="fromPage" name="fromPage" value="true">
						<input type="image" src="img/book.png" id="SubmitUnbook" name="SubmitUnbook">
					</form>
					<span id="value_sell">Vendu pour: {$sell[$i]}€</span><br></br>
					<span id="value">Valeur du lot: {$followed_bids[$i].product_value}€</span><br></br>
					<span id="savings">Economie:{$save[$i]}%</span><br></br>
					<span id="finish">Enchère terminée {$followed_bids[$i].expiration_date}</span><br></br>
					<br></br>
				</td>
				<td>
					{if $winner_id[$i] == $customer}
						{if $paid[$i] == 0}
							<form action="index.php?controller=" method="post">
								<input type="hidden" id="bidId" name="bidId" value={$followed_bids[$i].id_bid}> 
								<input type="submit" id="SubmitGetBid" name="SubmitGetBid" class="button" value="Récupérer le lot">
							</form>
						{/if}
						{if $paid[$i] == 1}
							<span id="winner"><strong>Vous avez remporté cette enchère!</strong></span><br></br>
						{/if}
					{/if}
					{if $winner_id[$i] != $customer}
					<span id="winner">Enchère remportée par :<strong>{$winner[$i]}</strong></span><br></br>
					{/if}
					<h4><a href="index.php?controller=finished-bid?id={$followed_bids[$i].id_bid}">> Voir le détail de l'enchère</a></h4>
				</td>
			</tr>
			{/if}
		{/for}
	</Table>