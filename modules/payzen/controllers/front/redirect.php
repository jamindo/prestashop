<?php
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

/*
* NOTICE OF LICENSE
*
* This source file is licensed under the Open Software License version 3.0
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
**/

/**
 * This controller prepares form and redirects to PayZen payment gateway.
 */
class PayzenRedirectModuleFrontController extends ModuleFrontController {
	public $display_column_left = false;

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent() {
		parent::initContent();

		if($this->context->cart->nbProducts() <= 0) {
			$this->context->smarty->assign('payzen_empty_cart', true);
		} else {
			$this->context->smarty->assign('payzen_empty_cart', false);
			
			$data = array();
			$logo = '';
			
			$type = Tools::getValue('payzen_payment_type'); /* the selected payzen payment type */
			switch ($type) {
				case 'standard' :
					if (Configuration::get('PAYZEN_STD_CARD_DATA_MODE') == 2 || Configuration::get('PAYZEN_STD_CARD_DATA_MODE') == 3) {
						$data['card_type'] = Tools::getValue('payzen_card_type');
						
						if (Configuration::get('PAYZEN_STD_CARD_DATA_MODE') == 3) {
							$data['card_number'] = Tools::getValue('payzen_card_number');
							$data['cvv'] = Tools::getValue('payzen_cvv');
							$data['expiry_month'] = Tools::getValue('payzen_expiry_month');
							$data['expiry_year'] = Tools::getValue('payzen_expiry_year');
						}
					}
						
					$logo = 'BannerLogo1.gif';
					break;
						
				case 'multi' :
					$data['opt'] = Tools::getValue('payzen_opt');
					
					$logo = 'BannerLogo2.gif';
					break;
				
				default:
					// TODO define the default behaviour
					break;
			}
			
			$module = new Payzen();
			$params = $module->getFormFields($type, $data);

			$this->context->smarty->assign('payzen_params', $params);
			$this->context->smarty->assign('payzen_url', Configuration::get('PAYZEN_PLATFORM_URL'));
			$this->context->smarty->assign('payzen_logo', $logo);
		}
		
		$this->setTemplate('redirect.tpl');	
	}
}
?>