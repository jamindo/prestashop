<?php /* Smarty version Smarty-3.1.14, created on 2014-01-31 17:40:23
         compiled from "C:\xampp\htdocs\prestashop\themes\default\finished-bid-recap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2327452ea21dcbb8d74-86525750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf56b987a70a84e84e63feb1bb519915df1db1ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\finished-bid-recap.tpl',
      1 => 1391186399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2327452ea21dcbb8d74-86525750',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ea21dcd29cf1_02215005',
  'variables' => 
  array (
    'nb_bid' => 0,
    'i' => 0,
    'current_bid' => 0,
    'winned_bids' => 0,
    'total' => 0,
    'link' => 0,
    'bids_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea21dcd29cf1_02215005')) {function content_52ea21dcd29cf1_02215005($_smarty_tpl) {?><br></br>
<div class="tableDiv">
	<h2>1.Récapitulatif de votre Commande</h2>
	<Table width=500px>
		<tr>
			<td></td>
			<td> Lot </td>
			<td> Sous-Total </td>
		</tr>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_bid']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['nb_bid']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
		<tr>
			<td><img src="<?php echo $_smarty_tpl->tpl_vars['current_bid']->value[$_smarty_tpl->tpl_vars['i']->value]['product_image'];?>
"></td>
			<td><a href="index.php?controller=finished-bid-detail?id=<?php echo $_smarty_tpl->tpl_vars['current_bid']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['current_bid']->value[$_smarty_tpl->tpl_vars['i']->value]['product_name'];?>
 - Lot n&deg;<?php echo $_smarty_tpl->tpl_vars['current_bid']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
</td>
			<td><strong><?php echo $_smarty_tpl->tpl_vars['winned_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['value'];?>
</strong></td>
		<tr>
		<?php }} ?>
		<tr>
			<td></td>
			<td><strong>Total:</strong></td>
			<td><strong><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</strong></td>
		<tr>
	</Table>
</div>
<br></br>
<h2>2.Choisissez un moyen de Paiement</h2>

<div class="paiement_block">
	<ul id="payment_list" class="clear">
		<li>
			<h3>Carte Bancaire</h3>
			<table width="500px" align="center">
				<tr>
					<td><img src="img/sigle_cb.gif"></td>
					<td>
						<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('payment',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
							<input type="submit" id="SubmitCBPayment" name="SubmitCBPayment" class="button" value="Payer par carte">
							<input type="hidden" name="amount" id="amount" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" />
							<input type="hidden" name="forBid" id="forBid" value="0" />
							<input type="hidden" name="bids_selected" id="bids_selected" value="<?php echo $_smarty_tpl->tpl_vars['bids_id']->value;?>
" />
						</form>
					</td>
				</tr>
			</table>
			<br></br>
		</li>
	</ul>
</div>
<br></br><?php }} ?>