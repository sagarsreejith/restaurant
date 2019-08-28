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
 */
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Reviews Model Class
 *
 * @category       Models
 * @package        TastyIgniter\Models\Governates_model.php
 * @link           http://docs.tastyigniter.com
 */
class Governates_model extends TI_Model {

    public function getAllGovernates(){
       $this->db->from('governates');

         $query = $this->db->get();
			$result = array();

			if ($query->num_rows() > 0) {
				$result = $query->result_array();
            }
            
            print_r($result);

			return $result;
        
    }
}

/* End of file reviews_model.php */
/* Location: ./system/tastyigniter/models/reviews_model.php */