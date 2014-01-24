<?php /* Smarty version Smarty-3.1.14, created on 2014-01-24 10:45:15
         compiled from "C:\xampp\htdocs\prestashop\themes\default\personal-bid-history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:265352c734516224e1-80732232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b61c971d3ac96d0a85112637298699e77aaa0e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\personal-bid-history.tpl',
      1 => 1390556682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265352c734516224e1-80732232',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c7345166d357_42543527',
  'variables' => 
  array (
    'link' => 0,
    'nb_bids_list' => 0,
    'i' => 0,
    'bids_list' => 0,
    'fromSearch' => 0,
    'nb_search_results_history' => 0,
    'lot_history' => 0,
    'lot_name' => 0,
    'credits_history' => 0,
    'search_results_history' => 0,
    'default' => 0,
    'nb_lasts_bids' => 0,
    'lasts_bids' => 0,
    'result_history' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c7345166d357_42543527')) {function content_52c7345166d357_42543527($_smarty_tpl) {?><h1>Historique de mes encheres</h1>

<h2>Effectuer une recherche</h2>

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('personal-history',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
	Selectionner un lot : 
	<select name="BidList">
		<option value="all"> Indifferent </option>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_bids_list']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['nb_bids_list']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['bids_list']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
">Lot n&deg;<?php echo $_smarty_tpl->tpl_vars['bids_list']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
 - <?php echo $_smarty_tpl->tpl_vars['bids_list']->value[$_smarty_tpl->tpl_vars['i']->value]['product_name'];?>
</option>
		<?php }} ?>
	</select>
	<input type="submit" id="SubmitSearch" name="SubmitSearch" class="button" value="Go">
</form>
<br></br>
<?php if (isset($_smarty_tpl->tpl_vars['fromSearch']->value)){?>
	<Table Border=3 WIDTH=500>
	<tr>
		<td ALIGN="center">Lot</td>
		<td ALIGN="center">Mise</td>
		<td ALIGN="center">Resultat</td>
	</tr>
	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_search_results_history']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['nb_search_results_history']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
		<tr>
<td ALIGN="center"><a href="index.php?controller=bid?id=<?php echo $_smarty_tpl->tpl_vars['lot_history']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
">Lot n&deg;<?php echo $_smarty_tpl->tpl_vars['lot_name']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lot_name']->value[$_smarty_tpl->tpl_vars['i']->value]['product_name'];?>
</a></td>
			<td ALIGN="center">
				<?php echo $_smarty_tpl->tpl_vars['credits_history']->value[$_smarty_tpl->tpl_vars['i']->value]['bid_value'];?>

			</td>
			
			<?php if ($_smarty_tpl->tpl_vars['search_results_history']->value[$_smarty_tpl->tpl_vars['i']->value]==1){?>
			<td ALIGN="center" BGCOLOR="green">Enchere Unique la plus Basse !</td>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['search_results_history']->value[$_smarty_tpl->tpl_vars['i']->value]==2){?>
			<td ALIGN="center" BGCOLOR="orange">Enchere Unique mais trop Haute !</td>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['search_results_history']->value[$_smarty_tpl->tpl_vars['i']->value]==3){?>
			<td ALIGN="center" BGCOLOR="red">Enchere non Unique !</td>
			<?php }?>
		</tr>
	<?php }} ?>
</Table>
<?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['default']->value)){?>
<br></br>
<h2>Dernieres mises</h2>
<Table Border=3 WIDTH=500>
	<tr>
    	<td ALIGN="center">Lot</td>
        <td ALIGN="center">Mise</td>
        <td ALIGN="center">Resultat</td>
        <td ALIGN="center">Date</td>
    </tr>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_lasts_bids']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['nb_lasts_bids']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
	<tr>
		<td ALIGN="center"><a href="index.php?controller=bid?id=<?php echo $_smarty_tpl->tpl_vars['lasts_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
">Lot n&deg;<?php echo $_smarty_tpl->tpl_vars['lasts_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['id_bid'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lot_history']->value[$_smarty_tpl->tpl_vars['i']->value]['product_name'];?>
</a></td>
		<td ALIGN="center"><?php echo $_smarty_tpl->tpl_vars['lasts_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['bid_value'];?>
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
		<td ALIGN="center"><?php echo $_smarty_tpl->tpl_vars['lasts_bids']->value[$_smarty_tpl->tpl_vars['i']->value]['bid_date'];?>
</td>
	</tr>
    <?php }} ?>
</Table>
<?php }?>
<?php }} ?>