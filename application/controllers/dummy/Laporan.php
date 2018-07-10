<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Laporan extends MY_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('dummy/laporan_model', 'laporan_model');
		}

//		public function index(){
//			$data['all_data'] =  $this->laporan_model->get_all_data();
//			$data['view'] = 'dummy/laporan/laporan1';
//			$this->load->view('admin/layout', $data);
//		}
		
		public function add($data1=0){
			if($this->input->post('submit')){

                                $this->form_validation->set_rules('tgl_awal', 'Tanggal', 'trim|required');
                                $this->form_validation->set_rules('tgl_akhir', 'Tanggal', 'trim|required');
				if ($this->form_validation->run() == FALSE) {
					$data['view'] = 'dummy/laporan/detailgangguan';
					$this->load->view('admin/layout', $data);
				}
				else{
					$data1['entri'] = array(
                                                'tgl_awal' => $this->input->post('tgl_awal'),
                                                'tgl_akhir' => $this->input->post('tgl_akhir'),
					);
                                        
                                        $data1['entri'] = $this->security->xss_clean($data1);
                                        $data['all_data'] =  $this->laporan_model->get_all_data_bulanan($data1['entri']);
                                        $data['view'] = 'dummy/laporan/excel_bulanan';
                                        $this->load->view('admin/layout', $data);
					
				}
			}
			else{
                                $data['view'] = 'dummy/laporan/detailgangguan';
                                $this->load->view('admin/layout', $data);
			}
			
		}
                
		
//		public function exportbulanan($data){
//			$data['all_data'] =  $this->laporan_model->get_all_data_bulanan($data);
//			$this->load->view('dummy/laporan/excel_bulanan', $data);
//		}
		 
	}


?>