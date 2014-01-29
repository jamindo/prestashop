<?php /* Smarty version Smarty-3.1.14, created on 2014-01-21 16:33:56
         compiled from "C:\xampp\htdocs\prestashop\modules\blockbids\blockbids.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1557752caec7b85ef96-84656407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73556f202a5df5c465005838308b9d0f90dd415b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blockbids\\blockbids.tpl',
      1 => 1390306370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1557752caec7b85ef96-84656407',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caec7b8c2c28_08789115',
  'variables' => 
  array (
    'nb_bids' => 0,
    'i' => 0,
    'bids' => 0,
    'date_bids' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caec7b8c2c28_08789115')) {function content_52caec7b8c2c28_08789115($_smarty_tpl) {?><!-- Bloc Ench�res -->
<script type="text/javascript">
function CompteARebours(){
	var sel = <?php echo $_smarty_tpl->tpl_vars['nb_bids']->value-1;?>
;
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
<h3><?php echo $_smarty_tpl->tpl_vars['nb_bids']->value;?>
 Encheres en cours</h3>
<div class="error" id="place_bid_error" style="display:none"></div>
<ul id="block_bids" class="clear">
	<ul id="bid_list" class="clear">
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_bids']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['nb_bids']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
		<li>
			<h2><a href="index.php?controller=bid?id=<?php echo $_smarty_tpl->tpl_vars['bids']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['bids']->value[$_smarty_tpl->tpl_vars['i']->value]['product_name'];?>
 - Lot n&deg;<?php echo $_smarty_tpl->tpl_vars['bids']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
</a></h2>
			<form action="index.php" method="post">
				<input id="bookmarkBid" type="image" name="bookmarkBid" src="img/unbook.png"/>
			</form>
			<div class="center_block">
				<p id="affichage"></p>
				<p id="expirDate" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['date_bids']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</p>
				<span class="bidPrice">Valeur du lot: <?php echo $_smarty_tpl->tpl_vars['bids']->value[$_smarty_tpl->tpl_vars['i']->value]['product_value'];?>
&euro;</span>
				<br></br> 
				<span class="bidPrice">Cout d'une enchere: 1 bukyZ</span>
				<br></br> 
				<span class="bidExpiration">Fin de l'enchere:<?php echo $_smarty_tpl->tpl_vars['bids']->value[$_smarty_tpl->tpl_vars['i']->value]['expiration_date'];?>
</span>
			</div>
			<div class="right_block">
			<img src="<?php echo $_smarty_tpl->tpl_vars['bids']->value[$_smarty_tpl->tpl_vars['i']->value]['product_image'];?>
">
			</div>
			<div class="bottom_block">
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('bid',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
				<input type="text" id="simpleBid" name="simpleBid" value="<?php if (isset($_POST['simple_bid'])){?><?php echo $_POST['simple_bid'];?>
<?php }?>" style="width: 30px" />
				<input type="hidden" id="bidId" name="bidId" value=<?php echo $_smarty_tpl->tpl_vars['bids']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
> 
				<input type="submit" id="SubmitBid" name="SubmitBid" class="button" value="Entrer une offre">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" id="startBid" name="startBid" value="<?php if (isset($_POST['start_bid'])){?><?php echo $_POST['start_bid'];?>
<?php }?>" style="width: 30px"/>
				<input type="text" id="closedBid" name="closedBid" style="width: 30px" value="<?php if (isset($_POST['closed_bid'])){?><?php echo $_POST['closed_bid'];?>
<?php }?>" />
				<input type="submit" id="SubmitMultipleBid" name="SubmitMultipleBid" class="button" value="Entrer une offre multiple">
			</form>
			</div>
		</li>
		<?php }} ?>
	</ul>
</ul><?php }} ?>