<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 18:48:43
         compiled from "C:\xampp\htdocs\prestashop\modules\blockbids\blockbids.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1557752caec7b85ef96-84656407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73556f202a5df5c465005838308b9d0f90dd415b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blockbids\\blockbids.tpl',
      1 => 1389029905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1557752caec7b85ef96-84656407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nb_bids' => 0,
    'bids' => 0,
    'bid' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caec7b8c2c28_08789115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caec7b8c2c28_08789115')) {function content_52caec7b8c2c28_08789115($_smarty_tpl) {?><!-- Bloc Enchères -->

<h3><?php echo $_smarty_tpl->tpl_vars['nb_bids']->value;?>
 Encheres en cours</h3>
<div class="error" id="place_bid_error" style="display:none"></div>
<ul id="block_bids" class="clear">
	<ul id="bid_list" class="clear">
		<?php  $_smarty_tpl->tpl_vars['bid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bid']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bid']->key => $_smarty_tpl->tpl_vars['bid']->value){
$_smarty_tpl->tpl_vars['bid']->_loop = true;
?>
		<li>
			<h2><a href="index.php?controller=bid?id=<?php echo $_smarty_tpl->tpl_vars['bid']->value['id_bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['bid']->value['product_name'];?>
 - Lot n&deg;<?php echo $_smarty_tpl->tpl_vars['bid']->value['id_bid'];?>
</a></h2>
			<div class="center_block">
				<span class="timeRemainingBeforeExpiration">Temps restant:</span> 
				<br></br> 
				<span class="bidPrice">Valeur du lot: <?php echo $_smarty_tpl->tpl_vars['bid']->value['product_value'];?>
&euro;</span>
				<br></br> 
				<span class="bidPrice">Cout d'une enchere: 1 bukyZ</span>
				<br></br> 
				<span class="bidExpiration">Fin de l'enchere: <?php echo $_smarty_tpl->tpl_vars['bid']->value['expiration_date'];?>
</span>
			</div>
			<div class="right_block">
			<img src="<?php echo $_smarty_tpl->tpl_vars['bid']->value['product_image'];?>
">
			</div>
			<div class="bottom_block">
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('bid',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
				<input type="text" id="simpleBid" name="simpleBid" value="<?php if (isset($_POST['simple_bid'])){?><?php echo $_POST['simple_bid'];?>
<?php }?>" style="width: 30px" />
				<input type="hidden" id="bidId" name="bidId" value=<?php echo $_smarty_tpl->tpl_vars['bid']->value['id_bid'];?>
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
		<?php } ?>
	</ul>
</ul><?php }} ?>