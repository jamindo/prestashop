<?php /* Smarty version Smarty-3.1.14, created on 2014-01-19 10:08:31
         compiled from "C:\xampp\htdocs\prestashop\themes\default\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2400552daac995dd884-95146656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6f40c6057ea36dcd5a5c032488801cd07c461d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\payment.tpl',
      1 => 1390122482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2400552daac995dd884-95146656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52daac9961eb08_37805058',
  'variables' => 
  array (
    'fromCBPayment' => 0,
    'link' => 0,
    'amount' => 0,
    'fromPayment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52daac9961eb08_37805058')) {function content_52daac9961eb08_37805058($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['fromCBPayment']->value==true){?>
<fieldset>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('payment',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
	<table align="center" width="300px">
		<tr>
			<td><span id="amount">Montant total</span></td>
			<td><span id="amountT"><?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
 EUR</span></td>
			
		</tr>
		<tr>
			<td><span id="card">Type de carte *</span></td>
			<td>
				<select name="cardType">
					<option value="visa">Visa</option>
					<option value="mastercard">MasterCard</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><span id="cardId">Numéro de carte *</span></td>
			<td>
				<input type="text" class="text" id="card_number" name="card_number" value="<?php if (isset($_POST['card_number'])){?><?php echo $_POST['card_number'];?>
<?php }?>" />
			</td>
		</tr>
		<tr>
			<td><span id="card_expiration">Date d'expiration *</span></td>
			<td>
				<select name="month">
					<option value="mm">mm</option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select> &nbsp;&nbsp;&nbsp;
				<select name="year">
					<option value="aa">aa</option>
					<option value="14">2014</option>
					<option value="15">2015</option>
					<option value="16">2016</option>
					<option value="17">2017</option>
					<option value="18">2018</option>
					<option value="19">2019</option>
					<option value="20">2020</option>
					<option value="21">2021</option>
					<option value="22">2022</option>
					<option value="23">2023</option>
				</select> &nbsp;&nbsp;&nbsp;
				<span id="cryptog">CVC *</span>
				<input type="text" class="text" style="width: 20px" id="crypto" name="crypto" value="<?php if (isset($_POST['crypto'])){?><?php echo $_POST['crypto'];?>
<?php }?>" />
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" id="SubmitPayment" name="SubmitPayment" class="button" value="Valider">
				<input type="hidden" name="amount" id="amount" value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
" />
			</td>
		</tr>
	</table>
	</form>
</fieldset>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['fromPayment']->value==true){?>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('payment',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
		<span id="sucess"> Paiement accepté, veuillez cliquer sur le bouton ci dessous pour récupérer vos crédits</span>
		<input type="submit" id="GetCredits" name="GetCredits" class="button" value="Récupérer mes crédits">
		<input type="hidden" name="total" id="total" value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
" />
	</form>
<?php }?><?php }} ?>