<?php if ( ! defined('BASEPATH')) exit('No direct access allowed');

class Track extends Main_Controller {

	public function index() {
        $this->lang->load('home');
        
		$this->template->render('track-my-order');
	}
}


/* End of file home.php */
/* Location: ./main/controllers/home.php */
