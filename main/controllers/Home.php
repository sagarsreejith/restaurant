<?php if ( ! defined('BASEPATH')) exit('No direct access allowed');

class Home extends Main_Controller {

	public function index() {
        $this->lang->load('home');
        $data = array();
        if ($this->config->item('maps_api_key')) {
            $map_key = '&key=' . $this->config->item('maps_api_key');
        } else {
            $map_key = '';
        }
        $this->GetAllRestaurans();
        $this->template->setScriptTag('https://maps.googleapis.com/maps/api/js?v=3' .$map_key.'&libraries=geometry,places', 'google-maps-js', '104330');
        $this->template->setTitle($this->lang->line('text_heading'));
        $data['restaurants'] = $this->GetAllRestaurans();
		$this->template->render('home', $data);
    }
    
    public function GetAllRestaurans(){
        //  calls the constructor
        $this->load->model('Locations_model');
        $locations = $this->Locations_model->getList(array());
        return $locations;
    }
}


/* End of file home.php */
/* Location: ./main/controllers/home.php */
