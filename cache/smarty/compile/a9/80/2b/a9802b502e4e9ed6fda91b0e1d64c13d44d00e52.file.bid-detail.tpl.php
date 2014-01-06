<?php /* Smarty version Smarty-3.1.14, created on 2014-01-02 17:32:32
         compiled from "C:\xampp\htdocs\prestashop\themes\default\bid-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2450752c1408b6b9fc1-03116260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9802b502e4e9ed6fda91b0e1d64c13d44d00e52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\bid-detail.tpl',
      1 => 1388680340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2450752c1408b6b9fc1-03116260',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c1408b73d008_73436646',
  'variables' => 
  array (
    'bid_sucess' => 0,
    'table_size' => 0,
    'i' => 0,
    'bids' => 0,
    'results' => 0,
    'link' => 0,
    'selected_bid' => 0,
    'nb_results_history' => 0,
    'credits_history' => 0,
    'result_history' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c1408b73d008_73436646')) {function content_52c1408b73d008_73436646($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['bid_sucess']->value)){?>
<div id="bid_result" class="clear">
<Table Border=3 WIDTH=500>
	<tr>
		<td ALIGN="center">Mise</td>
		<td ALIGN="center">Resultat</td>
	<tr>
	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['table_size']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['table_size']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
		<tr>
			<td ALIGN="center"><?php echo $_smarty_tpl->tpl_vars['bids']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</td>
			<?php if ($_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value]==1){?>
			<td ALIGN="center" BGCOLOR="green">Enchere Unique la plus Basse !</td>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value]==2){?>
			<td ALIGN="center" BGCOLOR="orange">Enchere Unique mais trop Haute !</td>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value]==3){?>
			<td ALIGN="center" BGCOLOR="red">Enchere non Unique !</td>
			<?php }?>
		</tr>
	<?php }} ?>
</Table>
<br></br>
<div class="bottom_result">			
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('bid',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
		<input type="text" id="simpleBid" name="simpleBid" value="<?php if (isset($_POST['simple_bid'])){?><?php echo $_POST['simple_bid'];?>
<?php }?>" style="width: 30px" />
		<input type="hidden" id="bidId" name="bidId" value=<?php echo $_smarty_tpl->tpl_vars['selected_bid']->value['id_bid'];?>
> 
		<input type="submit" id="SubmitBid" name="SubmitBid" class="button" value="Entrer une nouvelle offre">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" id="startBid" name="startBid" value="<?php if (isset($_POST['start_bid'])){?><?php echo $_POST['start_bid'];?>
<?php }?>" style="width: 30px"/>
		<input type="text" id="closedBid" name="closedBid" style="width: 30px" value="<?php if (isset($_POST['closed_bid'])){?><?php echo $_POST['closed_bid'];?>
<?php }?>" />
		<input type="submit" id="SubmitMultipleBid" name="SubmitMultipleBid" class="button" value="Entrer une nouvelle offre multiple">
	</form>
</div>
</div>
<br></br>
<?php }?>

<h2><a href="index.php?controller=bid?id=<?php echo $_smarty_tpl->tpl_vars['selected_bid']->value['id_bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['selected_bid']->value['product_name'];?>
 - Lot n&deg;<?php echo $_smarty_tpl->tpl_vars['selected_bid']->value['id_bid'];?>
</a></h2>
<div id="bid_detail" class="clear">
	<div class="center_block">
				<span class="timeRemainingBeforeExpiration">Temps restant:</span> 
				<br></br> 
				<span class="bidPrice">Cout d'une enchere: 1 bukyZ</span>
				<br></br> 
				<span class="bidExpiration">Fin de l'enchere: <?php echo $_smarty_tpl->tpl_vars['selected_bid']->value['expiration_date'];?>
</span>
</div>
<div class="right_block">
	<img src="<?php echo $_smarty_tpl->tpl_vars['selected_bid']->value['product_image_big'];?>
">
</div>
<div class="bottom_block">			
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('bid',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
		<input type="text" id="simpleBid" name="simpleBid" value="<?php if (isset($_POST['simple_bid'])){?><?php echo $_POST['simple_bid'];?>
<?php }?>" style="width: 30px" />
		<input type="hidden" id="bidId" name="bidId" value=<?php echo $_smarty_tpl->tpl_vars['selected_bid']->value['id_bid'];?>
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
<br></br>
<Table Border=3 WIDTH=500>
	<tr>
		<td ALIGN="center">Date</td>
		<td ALIGN="center">Mise</td>
		<td ALIGN="center">Resultat</td>
	</tr>
	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_results_history']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['nb_results_history']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
		<tr>
			<td ALIGN="center">
				<?php echo $_smarty_tpl->tpl_vars['credits_history']->value[$_smarty_tpl->tpl_vars['i']->value]['bid_date'];?>

			</td>
			<td ALIGN="center">
				<?php echo $_smarty_tpl->tpl_vars['credits_history']->value[$_smarty_tpl->tpl_vars['i']->value]['bid_value'];?>

			</td>
			
			<?php if ($_smarty_tpl->tpl_vars['result_history']->value[$_smarty_tpl->tpl_vars['i']->value]==1){?>
			<td ALIGN="center" BGCOLOR="green">Enchere Unique la plus Basse !</td>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['result_history']->value[$_smarty_tpl->tpl_vars['i']->value]==2){?>
			<td ALIGN="center" BGCOLOR="orange">Enchere Unique mais trop Haute !</td>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['result_history']->value[$_smarty_tpl->tpl_vars['i']->value]==3){?>
			<td ALIGN="center" BGCOLOR="red">Enchere non Unique !</td>
			<?php }?>
		</tr>
	<?php }} ?>
</Table>
<br></br>
<Table Border=3 WIDTH=500>
	<tr>
		<td>Valeur</td>
		<td><?php echo $_smarty_tpl->tpl_vars['selected_bid']->value['product_value'];?>
&euro;</td>
	<tr>
	<tr>
		<td>Frais de Livraison</td>
		<td>Livraison offerte !</td>
	</tr>
		<tr>
		<td>Description du produit</td>
		<td><?php echo $_smarty_tpl->tpl_vars['selected_bid']->value['product_description'];?>
</td>
	</tr>
</Table>
</div><?php }} ?>