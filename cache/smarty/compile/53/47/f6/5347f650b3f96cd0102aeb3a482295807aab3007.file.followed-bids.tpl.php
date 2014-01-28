<?php /* Smarty version Smarty-3.1.14, created on 2014-01-28 17:37:28
         compiled from "C:\xampp\htdocs\prestashop\themes\default\followed-bids.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203152d3b42b8853c9-02736964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5347f650b3f96cd0102aeb3a482295807aab3007' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\followed-bids.tpl',
      1 => 1390927043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203152d3b42b8853c9-02736964',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d3b42b9ca1d7_55580477',
  'variables' => 
  array (
    'nb_followed_bids' => 0,
    'i' => 0,
    'finished_bid' => 0,
    'followed_bids' => 0,
    'date_bids' => 0,
    'link' => 0,
    'sell' => 0,
    'save' => 0,
    'winner_id' => 0,
    'customer' => 0,
    'paid' => 0,
    'winner' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d3b42b9ca1d7_55580477')) {function content_52d3b42b9ca1d7_55580477($_smarty_tpl) {?><script type="text/javascript">
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
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_followed_bids']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['nb_followed_bids']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<?php if ($_smarty_tpl->tpl_vars['finished_bid']->value[$_smarty_tpl->tpl_vars['i']->value]==0){?>
			<tr>
				<td> <img src="<?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['product_image'];?>
"></td>
				<td>
					<a href="index.php?controller=bid?id=<?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
">Lot n&deg;<?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
 - <?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['product_name'];?>
</a><br></br>
					<form action="index.php?controller=followed-bid" method="post"> 
						<input type="hidden" id="bidId" name="bidId" value=<?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
>
						<input type="hidden" id="fromPage" name="fromPage" value="true">
						<input type="image" src="img/book.png" id="SubmitUnbook" name="SubmitUnbook">
					</form>
					<p id="affichage"></p>
					<p id="expirDate" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['date_bids']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</p>
					Valeur du lot: <?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['product_value'];?>
€<br></br>
					Coût d'une enchère: 1 bukyZ<br></br>
					Fin de l'enchère:<?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['expiration_date'];?>
<br></br>
					<br></br>
				</td>
				<td>
					<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('bid',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
						<input type="text" id="simpleBid" name="simpleBid" value="<?php if (isset($_POST['simple_bid'])){?><?php echo $_POST['simple_bid'];?>
<?php }?>" style="width: 30px" />
						<input type="hidden" id="bidId" name="bidId" value=<?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
> 
						<input type="submit" id="SubmitBid" name="SubmitBid" class="button" value="Entrer une offre"><br></br>
						<input type="text" id="startBid" name="startBid" value="<?php if (isset($_POST['start_bid'])){?><?php echo $_POST['start_bid'];?>
<?php }?>" style="width: 30px"/>
						<input type="text" id="closedBid" name="closedBid" style="width: 30px" value="<?php if (isset($_POST['closed_bid'])){?><?php echo $_POST['closed_bid'];?>
<?php }?>" />
						<input type="submit" id="SubmitMultipleBid" name="SubmitMultipleBid" class="button" value="Entrer une offre multiple">
					</form>
				</td>
			</tr>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['finished_bid']->value[$_smarty_tpl->tpl_vars['i']->value]==1){?>
			<tr>
				<td> <img src="<?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['product_image'];?>
"></td>
				<td>
					<a href="index.php?controller=bid?id=<?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
">Lot n&deg;<?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
 - <?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['product_name'];?>
</a><br></br>
					<form action="index.php?controller=followed-bid" method="post"> 
						<input type="hidden" id="bidId" name="bidId" value=<?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
>
						<input type="hidden" id="fromPage" name="fromPage" value="true">
						<input type="image" src="img/book.png" id="SubmitUnbook" name="SubmitUnbook">
					</form>
					<span id="value_sell">Vendu pour: <?php echo $_smarty_tpl->tpl_vars['sell']->value[$_smarty_tpl->tpl_vars['i']->value];?>
€</span><br></br>
					<span id="value">Valeur du lot: <?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['product_value'];?>
€</span><br></br>
					<span id="savings">Economie:<?php echo $_smarty_tpl->tpl_vars['save']->value[$_smarty_tpl->tpl_vars['i']->value];?>
%</span><br></br>
					<span id="finish">Enchère terminée <?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['expiration_date'];?>
</span><br></br>
					<br></br>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['winner_id']->value[$_smarty_tpl->tpl_vars['i']->value]==$_smarty_tpl->tpl_vars['customer']->value){?>
						<?php if ($_smarty_tpl->tpl_vars['paid']->value[$_smarty_tpl->tpl_vars['i']->value]==0){?>
							<form action="index.php?controller=" method="post">
								<input type="hidden" id="bidId" name="bidId" value=<?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
> 
								<input type="submit" id="SubmitGetBid" name="SubmitGetBid" class="button" value="Récupérer le lot">
							</form>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['paid']->value[$_smarty_tpl->tpl_vars['i']->value]==1){?>
							<span id="winner"><strong>Vous avez remporté cette enchère!</strong></span><br></br>
						<?php }?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['winner_id']->value[$_smarty_tpl->tpl_vars['i']->value]!=$_smarty_tpl->tpl_vars['customer']->value){?>
					<span id="winner">Enchère remportée par :<strong><?php echo $_smarty_tpl->tpl_vars['winner']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</strong></span><br></br>
					<?php }?>
					<h4><a href="index.php?controller=finished-bid?id=<?php echo $_smarty_tpl->tpl_vars['followed_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
">> Voir les détails de l'enchère</a></h4>
				</td>
			</tr>
			<?php }?>
		<?php }} ?>
	</Table><?php }} ?>