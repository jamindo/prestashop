<!-- Block inscription -->
{if $logged}
<div id="credits_block" class="block">
<h4>Mon compte</h4>
<ul class="myaccount_lnk_list">
<br></br>
	<h3>Mon solde: {$nb_credits} bukyz</h3>
	
	<li><a href="{$link->getPageLink('buy-credits', true)|escape:'html'}"> Achat de credit</a></li>
	{if $has_customer_an_address}
	</br>
	<li><a href="{$link->getPageLink('address', true)|escape:'html'}">Enregistrer mon adresse</a></li>
	{/if}
	</br>
	<li><a href="{$link->getPageLink('personal-history', true)|escape:'html'}">Historique des enchères</a></li>
	</br>
	<li><a href="{$link->getPageLink('followed-bid', true)|escape:'html'}">Mes enchères</a></li>
	</br>
	<li><a href="{$link->getPageLink('winned-bid', true)|escape:'html'}">Mes enchères remportés</a></li>
	</br>
	<li><a href="{$link->getPageLink('addresses', true)|escape:'html'}">Mes adresses</a></li>
	</br>
	<li><a href="{$link->getPageLink('identity', true)|escape:'html'}">Mes informations</a></li>
	</ul>
</div>
{/if}
<!-- /Block inscription -->