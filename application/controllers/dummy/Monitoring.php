<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Monitoring extends MY_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('dummy/monitoring_model', 'monitoring_model');
		}

		public function index(){
			$data['all_data'] =  $this->monitoring_model->get_all_data();
			$data['view'] = 'dummy/monitoring/mon_dummy';
			$this->load->view('admin/layout', $data);
		}
                
		public function belumbalik(){
			$data['all_data'] =  $this->monitoring_model->get_all_data_balik();
			$data['view'] = 'dummy/monitoring/belum_balik';
			$this->load->view('admin/layout', $data);
		}
		
		
	}


?>