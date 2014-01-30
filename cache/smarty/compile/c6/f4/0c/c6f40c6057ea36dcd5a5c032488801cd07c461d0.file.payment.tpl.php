<?php /* Smarty version Smarty-3.1.14, created on 2014-01-29 18:10:03
         compiled from "C:\xampp\htdocs\prestashop\themes\default\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2400552daac995dd884-95146656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6f40c6057ea36dcd5a5c032488801cd07c461d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\payment.tpl',
      1 => 1391015399,
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
                <div id="contour" class="contour">
                        <div id="carteForm" class="carteForm">
                                <div id="carte"><h1>Effectuer le paiment</h1><div>Saisissez les informations de votre carte bancaire.</div><br>
        
                                        <div id="CB_img"><img src="img/sigle_cb.gif" height="40 px" width="205px" alt="CB / VISA / MASTERCARD"></div>
                                        <div><strong>Montant: <?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
€</strong></div>
                                        <div class="mainBox numeroCarteBox">
                                                <div class="label" id="numeroCarte">
                                                        <label for="nombre">Numéro de la carte</label>
                                                </div>
                                                <div class="content">
                                                        <div id="elem_nombre"><input type="text" name="nombre" maxlength="19" size="24" value="" id="nombre" class="maxwidth disableAutoComplete" autocomplete="off"></div>
                                                </div>
                                                <div class="clearboth"></div>
                                        </div>
        
                                        <div class="mainBox dateExpirationCarteBox">
                                                <div class="label" id="dateExpirationCarte">
                                                        <label for="dateExpiration_mois">Date d'expiration</label>
                                                </div>
                                                <div class="content">
                                                        <select name="dateExpiration_annee" id="dateExpiration_annee" class="minwidth"><option value="14" selected="selected">2014</option>
                                                                <option value="15">2015</option>
                                                                <option value="16">2016</option>
                                                                <option value="17">2017</option>
                                                                <option value="18">2018</option>
                                                                <option value="19">2019</option>
                                                                <option value="20">2020</option>
                                                                <option value="21">2021</option>
                                                                <option value="22">2022</option>
                                                                <option value="23">2023</option>
                                                                <option value="24">2024</option>
                                                        </select>
                                                        <div id="elem_dateExpiration_mois"><select name="dateExpiration_mois" id="dateExpiration_mois" class="minwidth"><option value="01" selected="selected">01</option>
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
                                                        </select>
                                                        </div>
                                                </div>
                                                <div class="clearboth"></div>
                                        </div>
        
                                        <div class="mainBox cvvCarteBox">
                                                <div class="label" id="cvvCarte">
                                                        <label for="cvv">Cryptogramme visuel</label>
                                                </div>
                                                <div class="content"><div id="elem_cvv"><input type="text" name="cvv" maxlength="3" size="5" value="" id="cvv" class="minwidth disableAutoComplete" autocomplete="off"></div></div>
                                                <div class="clearboth"></div>
                                        </div>
                                </div>
                                <div class="bouton_centre">        
                                        <input type="submit" id="SubmitPayment" name="SubmitPayment" class="button" value="Valider">
                                        <input type="hidden" name="amount" id="amount" value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
" />
                                </div>
                        </div>
                </div>
        </form>
</fieldset>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['fromPayment']->value==true){?>
        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('payment',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
                <span id="sucess"> Paiement accepté, veuillez cliquer sur le bouton ci dessous pour récupérer vos crédits</span>
                <input type="submit" id="GetCredits" name="GetCredits" class="button" value="Récupérer">
                <input type="hidden" name="total" id="total" value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
" />
        </form>
<?php }?><?php }} ?>