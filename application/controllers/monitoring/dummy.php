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
		
		public function histori(){
			$data['histori'] =  $this->aktivasi_model->get_histori();
			$data['view'] = 'dummy/aktivasi/histori_aktivasi';
			$this->load->view('admin/layout', $data);
		}

		public function entri($id){
			if($this->input->post('submit')){
                                $this->form_validation->set_rules('alasan_rusak', 'Alasan Rusak', 'trim|required');
                                $this->form_validation->set_rules('sisa_pulsa', 'Sisa Pulsa', 'trim|required');
                                $this->form_validation->set_rules('id_pelanggan', 'IDPEL', 'trim|required');
                                $this->form_validation->set_rules('no_meter_baru', 'Nomor Meter Baru', 'trim|required');
                                $this->form_validation->set_rules('nama', 'Nama Petugas Aktivasi', 'trim|required');
                                
				if ($this->form_validation->run() == FALSE) {
					$data['dummy'] = $this->aktivasi_model->get_dummy_by_id($id);
					$data['view'] = 'dummy/aktivasi/aktivasi_entri';
					$this->load->view('admin/layout', $data);
				}
				else{
					$data = array(
                                                'id_meter' => $id,
                                                'no_dummy' => $this->input->post('no_dummy'),
                                                'no_meter_rusak' => $this->input->post('no_meter_rusak'),
                                                'no_meter_baru' => $this->input->post('no_meter_baru'),
                                                'id_pelanggan' => $this->input->post('id_pelanggan'),
                                                'nama' => $this->input->post('nama'),
                                                'id_user' => $this->session->userdata('admin_id'),
                                                'unit' => $this->session->userdata('unit'),
					);
                                        
                                        $edit_pakai = array(
                                                'alasan_rusak' => $this->input->post('alsan_rusak'),
                                                'sisa_pulsa' => $this->input->post('sisa_pulsa'),
                                            
                                        );
                                        
                                        $no_dummy = $this->input->post('no_dummy');
                                        $tgl_aktivasi = date("Y-m-d H:i:s");   
					$data_stok = array(
                                                'tgl_aktivasi' => $tgl_aktivasi,
                                                'no_meter_rusak' => $this->input->post('no_meter_baru'),
                                        );
                                        
					$data = $this->security->xss_clean($data);
					$result = $this->aktivasi_model->entri_model($data,$data_stok,$no_dummy,$id);
					if($result){
						$this->session->set_flashdata('msg', 'Record is Updated Successfully!');
						redirect(base_url('dummy/aktivasi'));
					}
				}
			}
			else{
				$data['dummy'] = $this->aktivasi_model->get_dummy_by_id($id);
				$data['view'] = 'dummy/aktivasi/aktivasi_entri';
				$this->load->view('admin/layout', $data);
			}
		}

		public function del($id = 0){
			$this->db->delete('tbl_metdum_pakai', array('id_meter' => $id));
			$this->session->set_flashdata('msg', 'Record is Deleted Successfully!');
			redirect(base_url('dummy/pakai'));
		}

	}


?>