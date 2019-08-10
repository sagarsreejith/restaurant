<?php
/**
 * TastyIgniter
 *
 * An open source online ordering, reservation and management system for restaurants.
 *
 * @package   TastyIgniter
 * @author    SamPoyigi
 * @copyright TastyIgniter
 * @link      http://tastyigniter.com
 * @license   http://opensource.org/licenses/GPL-3.0 The GNU GENERAL PUBLIC LICENSE
 * @since     File available since Release 1.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Country Class
 *
 * @category       Libraries
 * @package        TastyIgniter\Libraries\Country.php
 * @link           http://docs.tastyigniter.com
 */
class Country {

	public function addressFormat($address = array()) {
		if (!empty($address) AND is_array($address)) {
			if (!empty($address['format'])) {
				$format = $address['format'];
			} else {
				$format = '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{state}' . "\n" . '{country}';
			}

			$find = array(
				'{address_1}',
				'{address_2}',
				'{city}',
				'{postcode}',
				'{state}',
				'{country}',
				'{building}',
				'{avenue}',
				'{apt}',
				'{floor}',
				'{office}'
			);

			$replace = array(
				'address_1' 	=> (isset($address['address_1'])) ? $address['address_1'] : '',
				'address_2' 	=> (isset($address['address_2'])) ? $address['address_2'] : '',
				'city'      	=> (isset($address['city'])) ? $address['city'] : '',
				'postcode'  	=> (isset($address['postcode'])) ? $address['postcode'] : '',
				'state'     	=> (isset($address['state'])) ? $address['state'] : '',
				'country' 		=> (isset($address['country'])) ? $address['country'] : '',
				'building' 		=> (isset($address['building_no'])) ? $address['building_no'] : '',
				'avenue' 		=> (isset($address['avenue'])) ? $address['avenue'] : '',
				'apt' 		=> (isset($address['apt_no'])) ? $address['apt_no'] : '',
				'floor' 		=> (isset($address['floor'])) ? $address['floor'] : '',
				'office' 		=> (isset($address['office'])) ? $address['office'] : ''
			);

			return str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));
		}
	}
}
// END Country Class

/* End of file Country.php */
/* Location: ./system/tastyigniter/libraries/Country.php */