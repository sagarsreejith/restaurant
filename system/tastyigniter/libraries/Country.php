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
				
				if(empty($address['apt_no']) && empty($address['office'])){
					$format = '<b>Address Type : </b> House'. "\n" .'<b>House No:</b> {building_no}'. "\n" . '<b>Avenue: </b>{avenue}'. "\n" . '<b> Block: </b> {address_1}' . "\n" . '<b>Street: </b>{address_2}' . "\n" . '<b>Area: </b> {city}'. "\n" . '<b>Governate: </b> {state}' . "\n" . '{country}';
				} elseif (!empty($address['apt_no']) && empty($address['office'])){
					$format = '<b>Address Type : </b> Apartment'. "\n" .'<b>Building No: </b> {building_no}'. "\n" . '<b>Avenue: </b>{avenue}'. "\n" . '<b>Apartment No: </b> {apt_no}'. "\n" . '<b>Floor: </b> {floor}'. "\n" . '<b> Block: </b> {address_1}' . "\n" . '<b>Street: </b>{address_2}' . "\n" . '<b>Area: </b> {city}'. "\n" . '<b>Governate: </b> {state}' . "\n" . '{country}';
				} else {
					$format = '<b>Address Type : </b> Office'. "\n" .'<b>Building No:</b> {building_no}'. "\n" . '<b>Avenue: </b>{avenue}'. "\n" . '<b>Floor: </b> {floor}'. "\n" . '<b>Office: </b> {office}'. "\n" . '<b> Block: </b> {address_1}' . "\n" . '<b>Street: </b>{address_2}' . "\n" . '<b>Area: </b> {city}'. "\n" . '<b>Governate: </b> {state}' . "\n" . '{country}';
				}
				
			}

			$find = array(
				'{building_no}',
				'{avenue}',
				'{apt_no}',
				'{floor}',
				'{office}',
				'{address_1}',
				'{address_2}',
				'{city}',
				'{postcode}',
				'{state}',
				'{country}'
			);

			$replace = array(
				'building_no' 	=> (isset($address['building_no'])) ? $address['building_no'] : '',
				'avenue' 		=> (isset($address['avenue'])) ? $address['avenue'] : '',
				'apt_no' 		=> (isset($address['apt_no'])) ? $address['apt_no'] : '',
				'floor' 		=> (isset($address['floor'])) ? $address['floor'] : '',
				'office' 		=> (isset($address['office'])) ? $address['office'] : '',
				'address_1' 	=> (isset($address['address_1'])) ? $address['address_1'] : '',
				'address_2' 	=> (isset($address['address_2'])) ? $address['address_2'] : '',
				'city'      	=> (isset($address['city'])) ? $address['city'] : '',
				'postcode'  	=> (isset($address['postcode'])) ? $address['postcode'] : '',
				'state'     	=> (isset($address['state'])) ? $address['state'] : '',
				'country' 		=> (isset($address['country'])) ? $address['country'] : ''
			);

			return str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));
		}
	}
}
// END Country Class

/* End of file Country.php */
/* Location: ./system/tastyigniter/libraries/Country.php */