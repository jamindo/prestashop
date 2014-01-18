{*
#####################################################################################################
#
#					Module pour la plateforme de paiement PayZen
#						Version : 1.1 (révision 50362)
#									########################
#					Développé pour Prestashop
#						Version : 1.5.0.x
#						Compatibilité plateforme : V2
#									########################
#					Développé par Lyra Network
#						http://www.lyra-network.com/
#						19/08/2013
#						Contact : support@payzen.eu
#
#####################################################################################################
*}

{*
* NOTICE OF LICENSE
*
* This source file is licensed under the Open Software License version 3.0
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*}

{if $check_url_warn == true}
	<p class="warning">
		{if $maintenance_mode == true}
			{l s='The shop is in maintenance mode.The automatic notification (peer to peer connection between the payment platform and your shopping cart solution) cannot work.' mod='payzen'}
		{else}
			{l s='The automatic notification (peer to peer connection between the payment platform and your shopping cart solution) hasn\'t worked. Have you correctly set up the server URL in your store backoffice?' mod='payzen'}
			<br />
			{l s='For understanding the problem, please read the documentation of the module : <br />&nbsp;&nbsp;&nbsp;- Chapter &laquo;To read carefully before going further&raquo;<br />&nbsp;&nbsp;&nbsp;- Chapter &laquo;Server URL settings&raquo;' mod='payzen'}
		{/if}
		
		<br />
		{l s='If you think this is an error, you can contact our' mod='payzen'}
		<a href="{$link->getPageLink('contact', true)}">{l s='customer support' mod='payzen'}</a>.
	</p>
	
	<br/><br/>
{/if}

{if $prod_info == true}
	<p class="warning">
		{l s='<u><b>GOING INTO PRODUCTION</b></u><br />You want to know how to put your shop into production mode, please go to this URL : ' mod='payzen'}<a href="https://secure.payzen.eu/html/faq/prod" target="_blank">https://secure.payzen.eu/html/faq/prod</a>
	</p>
	
	<br/><br/>
{/if}

{if $error_msg == true}
	<p class="warning">
		{l s='Your order has been registered with a payment error.' mod='payzen'}
		
		{l s='Please contact our' mod='payzen'}&nbsp;<a href="{$link->getPageLink('contact', true)}">{l s='customer support' mod='payzen'}</a>.
	</p>
{else}
	<p>{l s='Your order on' mod='payzen'} <span class="bold">{$shop_name}</span> {l s='is complete.' mod='payzen'}
		<br /><br />
		{l s='We registered your payment of ' mod='payzen'} <span class="price">{$total_to_pay}</span>
		<br /><br />{l s='For any questions or for further information, please contact our' mod='payzen'} <a href="{$link->getPageLink('contact', true)}">{l s='customer support' mod='payzen'}</a>.
	</p>
{/if}