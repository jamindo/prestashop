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

{$payzen_message}

<form method="POST" action="{$payzen_request_uri}">	
	<script type="text/javascript">
		var pos_select = {$tabs};
	</script>
	
	<script type="text/javascript" src="{$payzen_js_dir}jquery.tabpane.js"></script>
	<link type="text/css" rel="stylesheet" href="{$payzen_js_dir}jquery.tabpane.css" />
	
	<script type="text/javascript" src="{$payzen_module_js_dir}payzen.js"></script>
	
	<input type="hidden" name="tabs" id="tabs" value="0" />
	
	<div class="tab-page">
		{$payzen_common}
	</div>
	
	<div class="tab-pane" id="tab-pane-1" style="width: 100%;">
		<div class="tab-page" id="step1">
		    <h4 class="tab" style="width: 210px !important;">{l s='GENERAL CONFIGURATION' mod='payzen'}</h4>
		    {$payzen_general_tab}
		</div>
		
		<div class="tab-page" id="step2">
		     <h4 class="tab" style="width: 210px !important;">{l s='ONE-TIME PAYMENT' mod='payzen'}</h4>
		     {$payzen_single_tab}
		</div>
		
		<div class="tab-page" id="step3">
		     <h4 class="tab" style="width: 210px !important;">{l s='PAYMENT IN SEVERAL TIMES' mod='payzen'}</h4>
		     {$payzen_multi_tab}		 
		</div>
	
		<div class="clear">
			<input type="submit" class="button" name="payzen_submit_admin_form" value="{l s='Save' mod='payzen'}" />
		</div>
	</div>
	
	<div class="clear"></div>
	
	<script type="text/javascript">
		function loadTab(id) {}
		setupAllTabs();
	</script>
</form>