<?php if ( ! defined('BASEPATH')) exit('No direct access allowed');

class Track extends Main_Controller {

	public function index() {
        $this->lang->load('home');
        
        
        if ($this->config->item('maps_api_key')) {
            $map_key = '&key=' . $this->config->item('maps_api_key');
        } else {
            $map_key = '';
        }
        
        $this->template->setScriptTag('https://maps.googleapis.com/maps/api/js?v=3' .$map_key.'&libraries=geometry,places', 'google-maps-js', '104330');
        $this->template->setTitle($this->lang->line('text_heading'));

		$this->template->render('track-my-order');
	}
}


/* End of file home.php */
/* Location: ./main/controllers/home.php */
