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
				
				if($address['is_rest'] === TRUE){
					$format = '{address_1}' . "\n" . '{address_2}' . "\n" . ' {city}'. "\n" . '{state}' . "\n" . '{country}';
				} elseif(empty($address['apt_no']) && empty($address['office'])){
					$format = '
							<div class="col-md-6">
									<table class="table table-hover table-dark_addr">
										<tbody>
											<tr>
												<th scope="row"> Address Type :</th>
												<td>House</td>
											</tr>
											<tr>
												<th scope="row"> House No :</th>
												<td>{building_no}</td>
											</tr>
											<tr>
												<th scope="row"> Avenue :</th>
												<td>{avenue}</td>
											</tr>
											<tr>
												<th scope="row"> Block:</th>
												<td>{address_1}</td>
											</tr>
										
										</tbody>
									</table>
							</div>

							<div class="col-md-6">
									<table class="table table-hover table-dark_addr">
										<tbody>
											<tr>
												<th scope="row"> Street:</th>
												<td>{address_2}</td>
											</tr>
											<tr>
												<th scope="row"> Area :</th>
												<td>{city}</td>
											</tr>
											<tr>
												<th scope="row"> Governate :</th>
												<td>{state}</td>
											</tr>
											<tr>
												<th scope="row"> Country :</th>
												<td>{country}</td>
											</tr>
											
										</tbody>
									</table>
							</div> ';
				} elseif (!empty($address['apt_no']) && empty($address['office'])){
					$format = '	<div class="col-md-6">
									<table class="table table-hover table-dark_addr">
										<tbody>
											<tr>
												<th scope="row"> Address Type :</th>
												<td>Apartment</td>
											</tr>
											<tr>
												<th scope="row"> Building No :</th>
												<td>{building_no}</td>
											</tr>
											<tr>
												<th scope="row"> Avenue :</th>
												<td>{avenue}</td>
											</tr>
											<tr>
												<th scope="row"> Apartment No:</th>
												<td>{apt_no}</td>
											</tr>
											<tr>
												<th scope="row"> Floor:</th>
												<td>{floor}</td>
											</tr>
										</tbody>
									</table>
								</div>
										
								<div class="col-md-6">
									<table class="table table-hover table-dark_addr">
										<tbody>
											<tr>
												<th scope="row"> Block:</th>
												<td>{address_1}</td>
											</tr>
											<tr>
												<th scope="row"> Street:</th>
												<td>{address_2}</td>
											</tr>
											<tr>
												<th scope="row"> Area:</th>
												<td>{city}</td>
											</tr>
											<tr>
												<th scope="row"> Governate :</th>
												<td>{state}</td>
											</tr>
											<tr>
												<th scope="row"> Country :</th>
												<td>{country}</td>
											</tr>
										</tbody>
									</table>
								</div>';
				} else {
					$format = '
					
								<div class="col-md-6">
									<table class="table table-hover table-dark_addr">
										<tbody>
											<tr>
												<th scope="row"> Address Type :</th>
												<td>Office</td>
											</tr>
											<tr>
												<th scope="row"> Building No :</th>
												<td>{building_no}</td>
											</tr>
											<tr>
												<th scope="row"> Avenue :</th>
												<td>{avenue}</td>
											</tr>
											<tr>
												<th scope="row"> Apartment No:</th>
												<td>{apt_no}</td>
											</tr>
											<tr>
												<th scope="row"> Floor:</th>
												<td>{floor}</td>
											</tr>
										</tbody>
									</table>
								</div>
										
								<div class="col-md-6">
									<table class="table table-hover table-dark_addr">
										<tbody>
											<tr>
												<th scope="row"> Office:</th>
												<td>{office}</td>
											</tr>
											<tr>
												<th scope="row"> Block:</th>
												<td>{address_1}</td>
											</tr>
											<tr>
												<th scope="row"> Street:</th>
												<td>{address_2}</td>
											</tr>
											<tr>
												<th scope="row"> Area:</th>
												<td>{city}</td>
											</tr>
											<tr>
												<th scope="row"> Governate :</th>
												<td>{state}</td>
											</tr>
											<tr>
												<th scope="row"> Country :</th>
												<td>{country}</td>
											</tr>
										</tbody>
									</table>
								</div>';
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

			return str_replace(array("\r\n", "\r", "\n"), '', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '', trim(str_replace($find, $replace, $format))));
		}
	}
}
// END Country Class

/* End of file Country.php */
/* Location: ./system/tastyigniter/libraries/Country.php */