<?php /* Smarty version Smarty-3.1.14, created on 2014-01-29 15:56:21
         compiled from "C:\xampp\htdocs\prestashop\themes\default\finished-bid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1861752d3b43d8e9dc4-89013521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22689ba6b7a69a8e38e96f5e5a6f9232b72beeed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\finished-bid.tpl',
      1 => 1391007376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1861752d3b43d8e9dc4-89013521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d3b43d8eaca9_79454118',
  'variables' => 
  array (
    'nb_finished_bids' => 0,
    'i' => 0,
    'current_bid' => 0,
    'finished_bids' => 0,
    'customer' => 0,
    'winner' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d3b43d8eaca9_79454118')) {function content_52d3b43d8eaca9_79454118($_smarty_tpl) {?><h3>Enchères terminées</h3>
	<Table WIDTH=700>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_finished_bids']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['nb_finished_bids']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
		<tr>
			<td> <img src="<?php echo $_smarty_tpl->tpl_vars['current_bid']->value[$_smarty_tpl->tpl_vars['i']->value]['product_image'];?>
"></td>
			<td>
			<a href="index.php?controller=finished-bid-detail?id=<?php echo $_smarty_tpl->tpl_vars['current_bid']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
">Lot n&deg;<?php echo $_smarty_tpl->tpl_vars['current_bid']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
 - <?php echo $_smarty_tpl->tpl_vars['current_bid']->value[$_smarty_tpl->tpl_vars['i']->value]['product_name'];?>
</a><br></br>
					<span id="value_sell">Vendu pour: <?php echo $_smarty_tpl->tpl_vars['finished_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['value'];?>
€</span><br></br>
					<span id="value">Valeur du lot: <?php echo $_smarty_tpl->tpl_vars['current_bid']->value[$_smarty_tpl->tpl_vars['i']->value]['product_value'];?>
€</span><br></br>
					<span id="savings">Economie:<?php echo $_smarty_tpl->tpl_vars['finished_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['saving'];?>
%</span><br></br>
					<span id="finish">Enchère terminée <?php echo $_smarty_tpl->tpl_vars['current_bid']->value[$_smarty_tpl->tpl_vars['i']->value]['expiration_date'];?>
</span><br></br>
					<br></br>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['finished_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['id_customer']==$_smarty_tpl->tpl_vars['customer']->value){?>
						<?php if ($_smarty_tpl->tpl_vars['finished_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['paid']==0){?>
							<form action="index.php?controller=finished-bid-recap" method="post">
								<input type="hidden" id="bidId" name="bidId" value=<?php echo $_smarty_tpl->tpl_vars['current_bid']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
> 
								<input type="submit" id="SubmitGetBid" name="SubmitGetBid" class="button" value="Récupérer le lot">
							</form>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['finished_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['paid']==1){?>
							<span id="winner"><strong>Vous avez remporté cette enchère!</strong></span><br></br>
						<?php }?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['finished_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['id_customer']!=$_smarty_tpl->tpl_vars['customer']->value){?>
					<span id="winner">Enchère remportée par :<strong><?php echo $_smarty_tpl->tpl_vars['winner']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</strong></span><br></br>
					<?php }?>
					<h4><a href="index.php?controller=finished-bid-detail?id=<?php echo $_smarty_tpl->tpl_vars['current_bid']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
">> Voir le détail de l'enchère</a></h4>
				</td>
			</tr>
		<?php }} ?>
	</Table><?php }} ?>