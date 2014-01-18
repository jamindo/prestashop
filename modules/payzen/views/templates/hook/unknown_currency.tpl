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

<p class="payment_module">
	<img src="{$base_dir}modules/payzen/images/BannerLogo1.gif" alt="{l s='Payment method unavailable for the currency : ' mod='payzen'} {$payzen_unknown_currency->sign}({$payzen_unknown_currency->name})" />
	{l s='Payment method unavailable for the currency : ' mod='payzen'} {$payzen_unknown_currency->sign}({$payzen_unknown_currency->name})
</p>