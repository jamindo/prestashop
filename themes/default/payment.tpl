{if $fromCBPayment == true}
<fieldset>
        <form action="{$link->getPageLink('payment', true)|escape:'html'}" method="post">
                <div id="contour" class="contour">
                        <div id="carteForm" class="carteForm">
                                <div id="carte"><h1>Effectuer le paiment</h1><div>Saisissez les informations de votre carte bancaire.</div><br>
        
                                        <div id="CB_img"><img src="img/sigle_cb.gif" height="40 px" width="205px" alt="CB / VISA / MASTERCARD"></div>
                                        <div><strong>Montant: {$amount}€</strong></div>
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
                                        <input type="hidden" name="amount" id="amount" value="{$amount}" />
                                </div>
                        </div>
                </div>
        </form>
</fieldset>
{/if}

{if $fromPayment == true}
        <form action="{$link->getPageLink('payment', true)|escape:'html'}" method="post">
                <span id="sucess"> Paiement accepté, veuillez cliquer sur le bouton ci dessous pour récupérer vos crédits</span>
                <input type="submit" id="GetCredits" name="GetCredits" class="button" value="Récupérer">
                <input type="hidden" name="total" id="total" value="{$amount}" />
        </form>
{/if}