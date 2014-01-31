<?php /* Smarty version Smarty-3.1.14, created on 2014-01-30 20:57:59
         compiled from "C:\xampp\htdocs\prestashop\themes\default\finished-bid-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1414352e910ca323293-10183496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08c3462cd4cc6fcc7d9a21e8da58128dedf9a582' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\finished-bid-detail.tpl',
      1 => 1391086095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1414352e910ca323293-10183496',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e910ca36d8a0_86824887',
  'variables' => 
  array (
    'selected_bid' => 0,
    'customer_id' => 0,
    'finished_bid' => 0,
    'winner_login' => 0,
    'total_nb' => 0,
    'i' => 0,
    'bid_placed' => 0,
    'display' => 0,
    'nb_bids_per_value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e910ca36d8a0_86824887')) {function content_52e910ca36d8a0_86824887($_smarty_tpl) {?><h2><a href="index.php?controller=bid?id=<?php echo $_smarty_tpl->tpl_vars['selected_bid']->value['id_bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['selected_bid']->value['product_name'];?>
 - Lot n&deg;<?php echo $_smarty_tpl->tpl_vars['selected_bid']->value['id_bid'];?>
</a></h2>
<div id="bid_detail" class="clear">
	<div class="center_block">
				<span class="bidPrice">Cout d'une enchère: 1 bukyZ</span>
				<br></br> 
				<span class="bidExpiration">Enchère terminée <?php echo $_smarty_tpl->tpl_vars['selected_bid']->value['expiration_date'];?>
</span>
</div>
<div class="right_block">
	<img src="<?php echo $_smarty_tpl->tpl_vars['selected_bid']->value['product_image_big'];?>
">
</div>
<div class="bottom_result">
	<div>
	<h4>Informations sur la vente:</h4>
	 </br>
	<?php if ($_smarty_tpl->tpl_vars['customer_id']->value==$_smarty_tpl->tpl_vars['finished_bid']->value['id_customer']){?>
		<span id="winnerY"> Vous avez remporté ce lot pour <?php echo $_smarty_tpl->tpl_vars['finished_bid']->value['value'];?>
€ et ainsi fait une économie de <?php echo $_smarty_tpl->tpl_vars['finished_bid']->value['saving'];?>
% , Félicitations !</span>
		<?php if ($_smarty_tpl->tpl_vars['finished_bid']->value['paid']==0){?>
							<form action="index.php?controller=finished-bid-recap" method="post">
								<input type="hidden" id="bidId" name="bidId" value=<?php echo $_smarty_tpl->tpl_vars['finished_bid']->value['id_bid'];?>
> 
								<input type="submit" id="SubmitBidRecap" name="SubmitBidRecap" class="button" value="Récupérer le lot">
							</form>
		<?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['customer_id']->value!=$_smarty_tpl->tpl_vars['finished_bid']->value['id_customer']){?>
	<span id="winner"> <?php echo $_smarty_tpl->tpl_vars['winner_login']->value;?>
 a remporté ce lot pour <?php echo $_smarty_tpl->tpl_vars['finished_bid']->value['value'];?>
€ soit une économie de <?php echo $_smarty_tpl->tpl_vars['finished_bid']->value['saving'];?>
%</span>
	<?php }?>
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
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['total_nb']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['total_nb']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['bid_placed']->value[$_smarty_tpl->tpl_vars['i']->value]['bid_value'];?>
</td>
					<td>
						<img src="img/degrade.png" width="<?php echo $_smarty_tpl->tpl_vars['display']->value[$_smarty_tpl->tpl_vars['i']->value];?>
px" height="15px">
					<?php echo $_smarty_tpl->tpl_vars['nb_bids_per_value']->value[$_smarty_tpl->tpl_vars['i']->value];?>

					</td>
				</tr>
			<?php }} ?>
		</TABLE>
	</div>
</div>	
</div>	<?php }} ?>