/*
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
*/

/*
* NOTICE OF LICENSE
*
* This source file is licensed under the Open Software License version 3.0
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
**/

/**
 * Misc JavaScript functions.
 */

function payzenAddOption(first, deleteText) {
	if(first) {
		$('#payzen_multi_options_btn').css('display', 'none');
		$('#payzen_multi_options_table').css('display', '');
	}
	
	var timestamp = new Date().getTime();
	
	var optionLine = '<tr id="payzen_multi_option_' + timestamp + '">' +
					 '	<td><input name="PAYZEN_MULTI_OPTIONS[' + timestamp + '][label]" style="width: 150px;" type="text"/></td>' + 
					 '	<td><input name="PAYZEN_MULTI_OPTIONS[' + timestamp + '][amount_min]" style="width: 80px;" type="text"/></td>' +
					 '	<td><input name="PAYZEN_MULTI_OPTIONS[' + timestamp + '][amount_max]" style="width: 80px;" type="text"/></td>' +
					 '	<td><input name="PAYZEN_MULTI_OPTIONS[' + timestamp + '][contract]" style="width: 70px;" type="text"/></td>' +
					 '	<td><input name="PAYZEN_MULTI_OPTIONS[' + timestamp + '][count]" style="width: 70px;" type="text"/></td>' +
					 '	<td><input name="PAYZEN_MULTI_OPTIONS[' + timestamp + '][period]" style="width: 70px;" type="text"/></td>' +
					 '	<td><input name="PAYZEN_MULTI_OPTIONS[' + timestamp + '][first]" style="width: 70px;" type="text"/></td>' +
					 '	<td><input type="button" value="' + deleteText + '" onclick="javascript: payzenDeleteOption(' + timestamp + ');"/></td>' +
					 '</tr>';
							
	$(optionLine).insertBefore('#payzen_multi_option_add');
}

function payzenDeleteOption(key) {
	$('#payzen_multi_option_' + key).remove();
	
	if($('#payzen_multi_options_table tbody tr').length == 1) {
		$('#payzen_multi_options_btn').css('display', '');
		$('#payzen_multi_options_table').css('display', 'none');
	}	
}