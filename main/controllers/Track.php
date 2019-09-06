<?php if ( ! defined('BASEPATH')) exit('No direct access allowed');

class Track extends Main_Controller {


    public function __construct() {
		parent::__construct();                                                                    //  calls the constructor

		$this->lang->load('home');
        $this->load->model('Orders_model');
	}
	public function index() {
        
        //print_r(json_encode($this->Orders_model->getOrder(44444)));
        $data = array();
        $input_value = $this->input->post('ordernumber');
        if(isset($input_value)){
            $result = $this->Orders_model->getOrder($input_value);
            if($input_value === $result){
                $data['status'] = false;
                $data['order_number'] = $input_value;
                $data['result'] = array();
            } else {
                $data['status'] = true;
                $data['order_number'] = $input_value;
                $data['result'] = $result;
            }
        }
        if ($this->input->is_ajax_request()) {
            $this->output->set_output(json_encode($data));											// encode the json array and set final out to be sent to jQuery AJAX
        } else {
            $this->template->render('track-my-order', $data);
        }

	}
}


/* End of file home.php */
/* Location: ./main/controllers/home.php */
