<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/dashboard_model', 'dashboard_model');

		}

		public function index(){
			$data['all_data'] =  $this->dashboard_model->get_all_data();
			$data['view'] = 'admin/dashboard/index';
			$this->load->view('admin/layout', $data);
		}
                
		public function monitoring(){
			$data['view'] = 'admin/dashboard/mon_dummy';
			$this->load->view('admin/layout', $data);
		}

		public function index2(){
			$data['view'] = 'admin/dashboard/index2';
			$this->load->view('admin/layout', $data);
		}
	}

?>	