<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Tagsus extends MY_Controller {

		public function __construct(){
			parent::__construct();
//			$this->load->model('dummy/aktivasi_model', 'aktivasi_model');
		}

		public function index(){
//			$data['all_users'] =  $this->aktivasi_model->get_all_users();
			$data['view'] = 'dummy/tagsus/tagsus_list';
			$this->load->view('admin/layout', $data);
		}
		
	}


?>