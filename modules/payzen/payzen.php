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
* This source file is Licensed under the Open Software License version 3.0
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
**/

/**
 * PayZen payment module main class.
 */

if (!defined('_PS_VERSION_')) {
	exit;
}

require_once dirname(__FILE__) . '/lib/payzen_api.php';

class Payzen extends PaymentModule {
 	const ON_FAILURE_RETRY = 'retry';
 	const ON_FAILURE_SAVE = 'save';
	
	private $_multiLangFields = array('PAYZEN_STD_TITLE', 'PAYZEN_MULTI_TITLE');
	private $_payzenApi = null;
	
	/**
	 * Constructor
	 */
	public function __construct() {
		$this->name = 'payzen';
		$this->tab = 'payments_gateways';
		$this->version = '1.1';
		$this->author = 'Lyra Network';
		
		$this->currencies = false;

		parent::__construct();
		
		$orderId = (int)(Tools::getValue('id_order', 0));
		$order = new Order($orderId);
		if(($order->module == $this->name) && (Tools::getValue('controller', '') == 'orderconfirmation')) {
			// patch to use different display name according to the used payment mode
			$this->displayName = $order->payment;
		} else {
			$this->displayName = 'PayZen';
		}
		
		$this->description = sprintf($this->l('Accept payments by credit cards with %s'), ' PayZen');
		$this->confirmUninstall = $this->l('Are you sure you want to delete your module details ?');
	}

	/**
	 * Return the list of configuration parameters with their payzen names and default values.
	 * 
	 * @return array[array[key, name, default]] 
	 */
	private function _getAdminParameters() {
		// NB : keys are 32 chars max
		
		return array(
				array('key' => 'PAYZEN_SITE_ID', 'name' => 'site_id', 'default' => '12345678'),
				array('key' => 'PAYZEN_KEY_TEST', 'name' => 'key_test', 'default' => '1111111111111111'),
				array('key' => 'PAYZEN_KEY_PROD', 'name' => 'key_prod', 'default' => '2222222222222222'),
				array('key' => 'PAYZEN_MODE', 'name' => 'ctx_mode', 'default' => 'TEST'),
				array('key' => 'PAYZEN_PLATFORM_URL', 'name' => 'platform_url', 'default' => 'https://secure.payzen.eu/vads-payment/'),
				
				array('key' => 'PAYZEN_DEFAULT_LANGUAGE', 'default' => 'fr'),
				array('key' => 'PAYZEN_AVAILABLE_LANGUAGES', 'name' => 'available_languages', 'default' => ''),
				array('key' => 'PAYZEN_DELAY', 'name' => 'capture_delay', 'default' => ''),
				array('key' => 'PAYZEN_VALIDATION_MODE', 'name' => 'validation_mode', 'default' => ''),
				array('key' => 'PAYZEN_PAYMENT_CARDS', 'name' => 'payment_cards', 'default' => ''),
				
				array('key' => 'PAYZEN_THEME_CONFIG', 'name' => 'theme_config', 'default' => ''),
				array('key' => 'PAYZEN_SHOP_NAME', 'name' => 'shop_name', 'default' => ''),
				array('key' => 'PAYZEN_SHOP_URL', 'name' => 'shop_url', 'default' => ''),
				
				array('key' => 'PAYZEN_3DS_MIN_AMOUNT', 'default' => ''),
				
				array('key' => 'PAYZEN_REDIRECT_ENABLED', 'name' => 'redirect_enabled', 'default' => 'False'),
				array('key' => 'PAYZEN_REDIRECT_SUCCESS_T', 'name' => 'redirect_success_timeout', 'default' => '5'),
				array('key' => 'PAYZEN_REDIRECT_SUCCESS_M', 'name' => 'redirect_success_message', 'default' => 'Redirection vers la boutique dans quelques instants...'),
				array('key' => 'PAYZEN_REDIRECT_ERROR_T', 'name' => 'redirect_error_timeout', 'default' => '5'),
				array('key' => 'PAYZEN_REDIRECT_ERROR_M', 'name' => 'redirect_error_message', 'default' => 'Redirection vers la boutique dans quelques instants...'),
				array('key' => 'PAYZEN_RETURN_MODE', 'name' => 'return_mode', 'default' => 'GET'),
				array('key' => 'PAYZEN_FAILURE_MANAGEMENT', 'default' => self::ON_FAILURE_RETRY),
				array('key' => 'PAYZEN_RETURN_GET_PARAMS', 'name' => 'return_get_params', 'default' => ''),
				array('key' => 'PAYZEN_RETURN_POST_PARAMS', 'name' => 'return_post_params', 'default' => ''),
				
				array('key' => 'PAYZEN_STD_TITLE', 'default' => array('en' => 'Pay by bank card', 'fr' => 'Payer par carte bancaire')),
				array('key' => 'PAYZEN_STD_ENABLED', 'default' => 'True'),
				array('key' => 'PAYZEN_STD_AMOUNT_MIN', 'default' => ''),
				array('key' => 'PAYZEN_STD_AMOUNT_MAX', 'default' => ''),
				array('key' => 'PAYZEN_STD_CARD_DATA_MODE', 'default' => '1'),
				
				array('key' => 'PAYZEN_MULTI_TITLE', 'default' => array('en' => 'Pay by bank card in several times', 'fr' => 'Payez par carte bancaire en plusieurs fois')),
				array('key' => 'PAYZEN_MULTI_ENABLED', 'default' => 'False'),
				array('key' => 'PAYZEN_MULTI_AMOUNT_MIN', 'default' => ''),
				array('key' => 'PAYZEN_MULTI_AMOUNT_MAX', 'default' => ''),
				array('key' => 'PAYZEN_MULTI_OPTIONS', 'default' => array()),
		);
	}

	/**
	 * Returns a new PayzenMultiApi object loaded with the module configuration
	 * @return PayzenMultiApi
	 */
	public function getLoadedApi() {
		if($this->_payzenApi == null) {
			$this->_payzenApi = new PayzenMultiApi();
			$this->_payzenApi->set('version', 'V2');
			$this->_payzenApi->set('contrib', 'Prestashop1.5.0.x_1.1/' . _PS_VERSION_);
			
			foreach ($this->_getAdminParameters() as $param) {
				if(key_exists('name', $param) && isset($param['name'])) {
					// only set payzen payment params
					$this->_payzenApi->set($param['name'], Configuration::get($param['key']));
				}
			}
		}
		
		return $this->_payzenApi;
	}
	
	/**
	 * @see PaymentModuleCore::install()
	 */
	public function install() {
		if (!parent::install() || !$this->registerHook('header') || !$this->registerHook('payment')
				|| !$this->registerHook('paymentReturn') || !$this->registerHook('displayShoppingCart')) {
			return false;
		}
		
		foreach ($this->_getAdminParameters() as $param) {
			if(in_array($param['key'], $this->_multiLangFields)) {
				// multilingual field, use prestashop IDs as keys
				$default = array();
					
				$languages = Language::getLanguages(false);
				foreach ($languages as $language) {
					$default[$language['id_lang']] = key_exists($language['iso_code'], $param['default']) ? $param['default'][$language['iso_code']] : '';
				}
			} else {
				$default = $param['default'];
			}
			
			if (!Configuration::updateValue($param['key'], $default, false, false, false)) {
				return false;
			}
		}

		return true;
	}

	/**
	 * @see PaymentModuleCore::uninstall()
	 */
	public function uninstall() {
		$result = true;
		foreach ($this->_getAdminParameters() as $param) {
			$result &= Configuration::deleteByName($param['key']);
		}

		// delete all obsolete payzen params
		$result &= Db::getInstance()->execute("DELETE FROM `"._DB_PREFIX_."configuration` WHERE `name` LIKE 'PAYZEN_%'");
		
		return $result && parent::uninstall();
	}

	/**
	 * Admin form management
	 * @return string
	 */
	public function getContent() {
		$submit = Tools::isSubmit('payzen_submit_admin_form');
		if ($submit) {
			$this->postProcess();
		}
		
		return $this->_adminForm($submit);
	}

	/**
	 * Validate and save admin parameters from admin form
	 */
	public function postProcess() {
		$api = new PayzenApi(); // new instance of PayzenApi for parameters validation
		
		// load and validate from request
		foreach ($this->_getAdminParameters() as $param) {
			$key = $param['key'];
			
			$value = Tools::getValue($key, null);
			
			if(in_array($key, $this->_multiLangFields)) {
				$value = array();
					
				$languages = Language::getLanguages(false);
				foreach ($languages as $language) {
					$value[$language['id_lang']] = Tools::getValue($key . '_' . $language['id_lang'], '');
				}
			} elseif($key === 'PAYZEN_MULTI_OPTIONS') {
				if (!is_array($value) || empty($value)) {
					continue;
				}
				
				$error = false;	
				$index = 0;
				$msg =  $this->l('Invalid value for field "%s". Please check element "%s" of option "%s".');
				
				foreach ($value as $opt => $option) {
					$index ++;
					
					if (!$option['label']) {
						$this->_errors[] = sprintf($msg, $this->l('Payment options'), $this->l('Label'), $index);
						$error = true;
					}
					if (!$option['count'] || !is_numeric($option['count'])) {
						$this->_errors[] = sprintf($msg, $this->l('Payment options'), $this->l('Count'), $index);
						$error = true;
					}
					if (!$option['period'] || !is_numeric($option['period'])) {
						$this->_errors[] = sprintf($msg, $this->l('Payment options'), $this->l('Period'), $index);
						$error = true;
					}
					if ($option['first'] && (!is_numeric($option['first']) || $option['first'] < 0 || $option['first'] > 100)) {
						$this->_errors[] = sprintf($msg, $this->l('Payment options'), $this->l('1st payment'), $index);
						$error = true;
					}
				}
				
				if($error) {
					continue;
				} else {
					$value = serialize($value);
				}
			} elseif($key === 'PAYZEN_AVAILABLE_LANGUAGES' || $key === 'PAYZEN_PAYMENT_CARDS') {
				$value = is_array($value) ? implode(';', $value) : '';
			}
			
			// validate with PayzenApi
			if(key_exists('name', $param) && isset($param['name']) && !$api->set($param['name'], $value)) {
				$this->_errors[] = sprintf($this->l('Invalid value %s for field %s.'), $value, $key);
				continue;
			}
			
			// valid field : try to save into DB
			if (!Configuration::updateValue($key, $value)) {
				$this->_errors[] = sprintf($this->l('Problem occured while saving field %s.'), $key);
			} else  {
				// temporary variable set to update prestashop cache
				Configuration::set($key, $value);
			}
		}
	}

	public function _adminForm($submit=false) {
        require_once(dirname(__FILE__) . '/lib/admin/admin_display.php');
        $display = new AdminDisplay($this);
		
		$this->context->smarty->assign(
			array(
				'payzen_request_uri'  => htmlentities($_SERVER['REQUEST_URI']),
				'payzen_js_dir'		  => _PS_BASE_URL_._PS_JS_DIR_.'jquery/plugins/tabpane/',
				'payzen_module_js_dir'=> _PS_BASE_URL_.__PS_BASE_URI__.'modules/payzen/js/',
		        'payzen_common'       => $display->commonHtml(),
				'payzen_general_tab'  => $display->generalTabHtml(),
				'payzen_single_tab'	  => $display->singleTabHtml(),
				'payzen_multi_tab'	  => $display->multiTabHtml(),
				'tabs'		 		  => ($tab = (int)Tools::getValue('tabs')) ? $tab : '0',
			)
		);
		
		$message = '';
		if($submit) {
			// if no error, display OK
			if (count($this->_errors) < 1) {
				$message = '<div class="conf confirm"><img src="../img/admin/ok.gif" />' . $this->l('Settings updated.') . '</div>';
			} else {
				// Else display errors
				$message = $this->displayError(implode('<br/>', $this->_errors));
			}
		}
		$this->context->smarty->assign('payzen_message', $message);
		
		return $this->context->smarty->fetch(_PS_MODULE_DIR_ . '/payzen/views/templates/back/back_office.tpl');
	}

	/**
	 * Payment method selection page header.
	 * @param array $params
	 */
	public function hookHeader() {
		$this->context->controller->addCSS(_PS_BASE_URL_ . __PS_BASE_URI__ . 'modules/payzen/css/payzen.css', 'all');
	}
	
 	/**
	 * Payment function, redirects the client to payment page
	 * @param array $params
	 * @return void|Ambigous <string, void, boolean, mixed, unknown>
	 */
	public function hookPayment($params) {
		/* @var $cart Cart */
		$cart = $this->context->cart;
		
		// currency support
		$cartCurrency = new Currency(intval($cart->id_currency));
		$currencyCode = $this->getLoadedApi()->getCurrencyNumCode($cartCurrency->iso_code);
		if (!$currencyCode) {
			$this->context->smarty->assign('payzen_unknown_currency', $cartCurrency);
			return $this->display(__FILE__, 'unknown_currency.tpl');
		}
		
		$singleEnabled = (Configuration::get('PAYZEN_STD_ENABLED') == 'True');
		if ($singleEnabled) {
 			$title = Configuration::get('PAYZEN_STD_TITLE', $this->context->language->id);
 			if ($title == null) {
 				$title = $this->l('Pay by bank card');
 			}
 			$this->context->smarty->assign('payzen_std_title', $title);
				
			// single module amount restrictions
			$min = Configuration::get('PAYZEN_STD_AMOUNT_MIN');
			$max = Configuration::get('PAYZEN_STD_AMOUNT_MAX');
			if (($min != '' && $cart->getOrderTotal() < $min) || ($max != '' && $cart->getOrderTotal() > $max)) {
				$singleEnabled = false;
			}
			
			$cards = Configuration::get('PAYZEN_PAYMENT_CARDS');
			if(!empty($cards)) {
				$cards = explode(';', $cards);
			} else {
				// if no card type selected, display all supported cards 
				$cards = array_keys($this->getLoadedApi()->getSupportedCardTypes());
			}
			
			$this->context->smarty->assign('payzen_avail_cards', $cards);
			$this->context->smarty->assign('payzen_std_card_data_mode', Configuration::get('PAYZEN_STD_CARD_DATA_MODE'));
		}
		$this->context->smarty->assign('payzen_single_enabled', $singleEnabled);
		
		
		$multiEnabled = (Configuration::get('PAYZEN_MULTI_ENABLED') == 'True');
		if ($multiEnabled) {
 			$title = Configuration::get('PAYZEN_MULTI_TITLE', $this->context->language->id);
 			if ($title == null) {
 				$title = $this->l('Pay by bank card in several times');
 			}
 			$this->context->smarty->assign('payzen_multi_title', $title);
			
			// multi module amount restrictions
			$min = Configuration::get('PAYZEN_MULTI_AMOUNT_MIN');
			$max = Configuration::get('PAYZEN_MULTI_AMOUNT_MAX');
			if (($min != '' && $cart->getOrderTotal() < $min) || ($max != '' && $cart->getOrderTotal() > $max)) {
				$multiEnabled = false;
			}
			
			// multi payment options
			$options = Configuration::get('PAYZEN_MULTI_OPTIONS');
			
			if(!empty($options)) {
				$options = unserialize($options);
				$enabledOptions = array();
				foreach ($options as $key => $option) {	
					$min = $option['amount_min'];
					$max = $option['amount_max'];
			
					if (($min == '' || $cart->getOrderTotal() >= $min) && ($max == '' || $cart->getOrderTotal() <= $max)) {
						$enabledOptions[$key] = $option;
					}
				}
 			}
 			
 			if (isset($enabledOptions) && !empty($enabledOptions)) {
				$this->context->smarty->assign('payzen_multi_options', $enabledOptions);
			} else { 	
		   		$multiEnabled =  false;
			}
		}
		$this->context->smarty->assign('payzen_multi_enabled', $multiEnabled);
		
		return $this->display(__FILE__, 'payment.tpl');
	}
	
	/**
	 * Manage payement gateway response
	 * @param array $params
	 */
	public function hookPaymentReturn($params) {
		if (!$this->active || $params['objOrder']->module != $this->name) {
			return;
		}
		
		$error_msg = (Tools::getValue('error') == 'yes');
		
		$array = array(
				'check_url_warn' => (Tools::getValue('check_url_warn') == 'yes'),
				'maintenance_mode' => (Configuration::get('PS_SHOP_ENABLE') == '0'),
				'prod_info' => (Tools::getValue('prod_info') == 'yes'),
				'error_msg' => $error_msg
		);
		
		if ($error_msg === false) {
			$array['total_to_pay'] = Tools::displayPrice($params['total_to_pay'], $params['currencyObj'], false);
			$array['id_order'] = $params['objOrder']->id;
		}
		
		$this->context->smarty->assign($array);
		
		return $this->display(__FILE__, 'payment_return.tpl');
	}
	
	/**
	 * Before shopping cart display.
	 * @param array $params
	 */
	public function hookDisplayShoppingCart() {
		if(Tools::getValue('payzen_pay_error') == 'yes') {
			$this->context->controller->errors[] = $this->l('Your payment was not accepted. Please, try to re-order.');
			
			// unset HTTP_REFERER from smarty server variable to avoid back button display
			$server = $_SERVER;
			unset($_SERVER['HTTP_REFERER']);
			$this->context->smarty->assign('server', $_SERVER);
		}
	}
	
	// TODO to remove when So Colissimo fix cart delivery address id
	private function _getColissimoShippingAddress($cart, $psAddress, $idCustomer) {
		// So Colissimo not installed
		if(!Configuration::get('SOCOLISSIMO_CARRIER_ID')) {
			return false;
		}
	
		// So Colissimo is not selected as shipping method
		if ($cart->id_carrier != Configuration::get('SOCOLISSIMO_CARRIER_ID')) {
			return false;
		}
	
		// Get address saved by So Colissimo
		$return = Db::getInstance()->getRow('SELECT * FROM '._DB_PREFIX_.'socolissimo_delivery_info WHERE id_cart =\''.(int)($cart->id).'\' AND id_customer =\''.(int)($idCustomer).'\'');
		$newAddress = new Address();
	
		if (strtoupper($psAddress->lastname) != strtoupper($return['prname'])
			|| strtoupper($psAddress->firstname) != strtoupper($return['prfirstname'])
			|| strtoupper($psAddress->address1) != strtoupper($return['pradress3'])
			|| strtoupper($psAddress->address2) != strtoupper($return['pradress2'])
			|| strtoupper($psAddress->postcode) != strtoupper($return['przipcode'])
			|| strtoupper($psAddress->city) != strtoupper($return['prtown'])
			|| str_replace(array(' ', '.', '-', ',', ';', '+', '/', '\\', '+', '(', ')'),'',$psAddress->phone_mobile) != $return['cephonenumber']) {
				
			// Address is modified in So Colissimo page : use it as shipping address
			$newAddress->lastname = substr($return['prname'], 0, 32);
			$newAddress->firstname = substr($return['prfirstname'], 0, 32);
			$newAddress->postcode = $return['przipcode'];
			$newAddress->city = $return['prtown'];
			$newAddress->id_country = Country::getIdByName(null, 'france');
	
			if (!in_array($return['delivery_mode'], array('DOM', 'RDV'))) {
				$newAddress->address1 = $return['pradress1'];
				$newAddress->address1 .= isset($return['pradress2']) ?  ' ' . $return['pradress2'] : '';
				$newAddress->address1 .= isset($return['pradress3']) ?  ' ' . $return['pradress3'] : '';
				$newAddress->address1 .= isset($return['pradress4']) ?  ' ' . $return['pradress4'] : '';
			} else {
				$newAddress->address1 = $return['pradress3'];
				$newAddress->address2 = isset($return['pradress4']) ? $return['pradress4'] : '';
				$newAddress->other = isset($return['pradress1']) ?  $return['pradress1'] : '';
				$newAddress->other .= isset($return['pradress2']) ?  ' ' . $return['pradress2'] : '';
			}
				
			// Return the So Colissimo updated
			return $newAddress;
		} else {
			// Use initial address
			return false;
		}
	}
	
	/**
	* Generate form fields to post to the payment gateway.
	*/
	public function getFormFields($type='standard', $data=null) {
		/* @var $cust Customer */
		/* @var $cart Cart */
		$cust = $this->context->customer;
		$cart = $this->context->cart;
		
		/* @var $billingCountry Address */
		$billingAddress = new Address($cart->id_address_invoice);
		$billingCountry = new Country($billingAddress->id_country);
			
		/* @var $deliveryAddress Address */
		$deliveryAddress = new Address($cart->id_address_delivery);
			
		// TODO to remove when So Colissimo fix cart delivery address id
		$colissimoAddress = $this->_getColissimoShippingAddress($cart, $deliveryAddress, $cust->id);
		if (is_a($colissimoAddress, 'Address')) {
			$deliveryAddress = $colissimoAddress;
		}
		$deliveryCountry = new Country($deliveryAddress->id_country);
		
		/* @var $api PayzenApi */
		$api = $this->getLoadedApi();
		
		/* detect default language */
		$language = strtolower(Language::getIsoById(intval($this->context->language->id)));
		if (!$api->isSupportedLanguage($language)) {
			$language = Configuration::get('PAYZEN_DEFAULT_LANGUAGE');
		}
		
		/* detect store currency */ 
		$cartCurrency = new Currency(intval($cart->id_currency));
		$currency = $api->findCurrencyByAlphaCode($cartCurrency->iso_code);
		
		/* Amount */
		$amount = $cart->getOrderTotal();
			
		$api->set('amount', $currency->convertAmountToInteger($amount));
		$api->set('currency', $currency->num);
			
		$api->set('cust_email', $cust->email);
		$api->set('cust_id', $cust->id);
			
		$api->set('cust_first_name', $billingAddress->firstname);
		$api->set('cust_last_name', $billingAddress->lastname);
		$api->set('cust_address', $billingAddress->address1 . ' ' . $billingAddress->address2);
		$api->set('cust_zip', $billingAddress->postcode);
		$api->set('cust_city', $billingAddress->city);
		$api->set('cust_phone', $billingAddress->phone);
		$api->set('cust_country', $billingCountry->iso_code);
		if ($billingAddress->id_state) {
			$state = new State((int) ($billingAddress->id_state));
			$api->set('cust_state', $state->iso_code);
		}
			
		$api->set('ship_to_first_name', $deliveryAddress->firstname);
		$api->set('ship_to_last_name', $deliveryAddress->lastname);
		$api->set('ship_to_street', $deliveryAddress->address1);
		$api->set('ship_to_street2', $deliveryAddress->address2);
		$api->set('ship_to_zip', $deliveryAddress->postcode);
		$api->set('ship_to_city', $deliveryAddress->city);
		$api->set('ship_to_phone_num', $deliveryAddress->phone);
		$api->set('ship_to_country', $deliveryCountry->iso_code);
		if ($deliveryAddress->id_state) {
			$state = new State((int) ($deliveryAddress->id_state));
			$api->set('ship_to_state', $state->iso_code);
		}
		
		$methodLabel = '';
		
		switch ($type) {
			case 'standard' : 
				// single payment card data
					
				if(key_exists('card_type', $data) && $data['card_type']) {
					// override payemnt_cards var
					$api->set('payment_cards', $data['card_type']);
				}
					
				if(key_exists('card_number', $data) && $data['card_number']) {
					$api->set('card_number', $data['card_number']);
					$api->set('cvv', $data['cvv']);
					$api->set('expiry_year', $data['expiry_year']);
					$api->set('expiry_month', $data['expiry_month']);
				
					// override action_mode to do a silent payment
					$api->set('action_mode', 'SILENT');
				}
					
				$methodLabel = $this->l('One-time payment');
				
				break;
				
			case 'multi' : 
				// multiple payment options
					
				$multiOptions = unserialize(Configuration::get('PAYZEN_MULTI_OPTIONS'));
				$option = $multiOptions[$data['opt']];
					
				$configFirst = $option['first'];
				$first = ($configFirst != '') ? $currency->convertAmountToInteger(($configFirst / 100) * $amount) : null;
				$api->setMultiPayment(null /* to use already set amount */, $first, $option['count'], $option['period']);
					
				// override cb contract
				$api->set('contracts', ($option['contract']) ? 'CB=' . $option['contract'] : null);
					
				$methodLabel = sprintf($this->l('Payment in %s times'), $option['count']);
				
				break;
		}
		
		$api->set('order_info', $methodLabel);		
		
		// activate 3ds ?
		$threedsMpi = null;
		if(Configuration::get('PAYZEN_3DS_MIN_AMOUNT') != '' && $amount < Configuration::get('PAYZEN_3DS_MIN_AMOUNT')) {
			$threedsMpi = '2';
		}
		$api->set('threeds_mpi', $threedsMpi);
		
		$api->set('language', $language);
		$api->set('order_id', $cart->id);
		$api->set('url_return', $this->context->shop->getBaseURL() . 'index.php?fc=module&module=' . $this->name . '&controller=submit');
		
		// prepare data for PayZen payment form
		return $api->getRequestFieldsArray();
	}
	
	/**
	* Save order and transaction info.
	*/
	public function saveOrder($cart, $orderStatus, $payzenResponse) {
		// Retrieve customer from cart
		$customer = new Customer($cart->id_customer);
		
		// ps id_currency from currency iso num code
		$currencyId = Currency::getIdByIsoCodeNum((int)$payzenResponse->get('currency'));
		
		// 3ds extra message
		$msg3ds = "\n" . $this->l('3DS authentication : ');
		if ($payzenResponse->get('threeds_status') == 'Y') {
			$msg3ds .= $this->l('YES');
			$msg3ds .= "\n" . $this->l('3DS certificate : ') . $payzenResponse->get('threeds_cavv');
		} else {
			$msg3ds .= $this->l('NO');
		}
		
		// call payment module validateOrder
		$this->validateOrder(
			$cart->id, 
			$orderStatus,
			$payzenResponse->getFloatAmount(),
			$this->displayName . ' - ' . $payzenResponse->get('order_info'),
			$payzenResponse->getLogString() . $msg3ds,
			array(),		// $extraVars
			$currencyId,	// $currency_special
			false,			// $dont_touch_amount
			$customer->secure_key
		);
		
		// reload order
		$order = new Order((int)Order::getOrderByCartId($cart->id));
		
		// save transaction info
		$payments = $order->getOrderPayments();
		
		if(count($payments) == 1) { // OrderPayment created automatically by saving order
			if ($payzenResponse->get('card_brand') == 'MULTI') {	
				$sequences = json_decode($payzenResponse->get('payment_seq')); 
				$transactions = $sequences->transactions;
				
				$invoices = $order->getInvoicesCollection();
				$invoice = $invoices[0];
				$index = 0;
				$currency = $this->getLoadedApi()->findCurrencyByNumCode($payzenResponse->get('currency'));
			    
				foreach($transactions as $trs) {
					$amount = $currency->convertAmountToFloat($trs->{'amount'});
				
					if ($index == 0 ){
						$pcc = $payments[0];
						$pcc->amount= $amount;
					} else {
						if ($order->addOrderPayment($amount, null, null, null, null, $invoice)) {	
							$payments = $order->getOrderPayments();
							$pcc = $payments[$index];
						} else {
							// should never happen
							continue;
						}
					}
					
					$pcc->transaction_id = $trs->{'sequence_number'} . '-' . $trs->{'trans_id'};
					if($trs->{'ext_trans_id'}) {
						$pcc->transaction_id .= '-'. $trs->{'ext_trans_id'};
					}
					
					$pcc->card_number = $trs->{'card_number'};
					$pcc->card_brand = $trs->{'card_brand'};
					
					if ($trs->{'expiry_month'} != null && $trs->{'expiry_year'} != null) {
						$pcc->card_expiration = str_pad($trs->{'expiry_month'}, 2, '0', STR_PAD_LEFT) . '/' . $trs->{'expiry_year'};
					}
					$index++;
					$pcc->update();	   			  
				}
			} else {
				$pcc = $payments[0];
		
				$pcc->transaction_id = $payzenResponse->get('trans_id');
				$pcc->card_number = $payzenResponse->get('card_number');
				$pcc->card_brand = $payzenResponse->get('card_brand');
				$pcc->card_expiration = str_pad($payzenResponse->get('expiry_month'), 2, '0', STR_PAD_LEFT)
										. '/' . $payzenResponse->get('expiry_year');
				$pcc->card_holder = NULL;
				
				$pcc->update();
	       	}
		}
		
		return $order;
	}
}
?>