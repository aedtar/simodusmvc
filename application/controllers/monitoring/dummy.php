<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dummy extends MY_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('monitoring/dummy_model', 'dummy_model');
		}

		public function index(){
			$data['all_data'] =  $this->dummy_model->get_all_data();
			$data['view'] = 'monitoring/mon_dummy';
			$this->load->view('admin/layout', $data);
		}
		
		
	}


?>