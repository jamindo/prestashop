<?php /* Smarty version Smarty-3.1.14, created on 2014-01-31 18:18:32
         compiled from "C:\xampp\htdocs\prestashop\themes\default\winned-bid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2036352ebbfa1780585-68599356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8115aa936a4398e033e6cc2320f5045b727f938d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\winned-bid.tpl',
      1 => 1391188693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2036352ebbfa1780585-68599356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ebbfa17c34c4_49437318',
  'variables' => 
  array (
    'nb_unpaid_bid' => 0,
    'nb_winned_bids' => 0,
    'i' => 0,
    'current_bid' => 0,
    'winned_bids' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ebbfa17c34c4_49437318')) {function content_52ebbfa17c34c4_49437318($_smarty_tpl) {?><h3>Enchères remportées</h3>
<?php if ($_smarty_tpl->tpl_vars['nb_unpaid_bid']->value>1){?>
<form action="index.php?controller=finished-bid-recap" method="post">
		<input type="submit" id="SubmitMultipleBidRecap" name="SubmitMultipleBidRecap" class="button" value="Récupérer tous les lots">
</form>
<?php }?>
</br>
	<Table WIDTH=700>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_winned_bids']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['nb_winned_bids']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
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
					<span id="value_sell">Vendu pour: <?php echo $_smarty_tpl->tpl_vars['winned_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['value'];?>
€</span><br></br>
					<span id="value">Valeur du lot: <?php echo $_smarty_tpl->tpl_vars['current_bid']->value[$_smarty_tpl->tpl_vars['i']->value]['product_value'];?>
€</span><br></br>
					<span id="savings">Economie:<?php echo $_smarty_tpl->tpl_vars['winned_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['saving'];?>
%</span><br></br>
					<span id="finish">Enchère terminée <?php echo $_smarty_tpl->tpl_vars['current_bid']->value[$_smarty_tpl->tpl_vars['i']->value]['expiration_date'];?>
</span><br></br>
					<br></br>
				</td>
				<td>
						<?php if ($_smarty_tpl->tpl_vars['winned_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['paid']==0){?>
							<form action="index.php?controller=finished-bid-recap" method="post">
								<input type="hidden" id="bidId" name="bidId" value=<?php echo $_smarty_tpl->tpl_vars['current_bid']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
> 
								<input type="submit" id="SubmitBidRecap" name="SubmitBidRecap" class="button" value="Récupérer le lot">
							</form>
						<?php }?>
					<h4><a href="index.php?controller=finished-bid-detail?id=<?php echo $_smarty_tpl->tpl_vars['current_bid']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
">> Voir le détail de l'enchère</a></h4>
				</td>
			</tr>
		<?php }} ?>
	</Table>
	</br>
	<?php if ($_smarty_tpl->tpl_vars['nb_unpaid_bid']->value>3){?>
<form action="index.php?controller=finished-bid-recap" method="post">
		<input type="submit" id="SubmitMultipleBidRecap" name="SubmitMultipleBidRecap" class="button" value="Récupérer tous les lots">
</form>
<?php }?><?php }} ?>