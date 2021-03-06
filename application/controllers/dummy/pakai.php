<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pakai extends MY_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('dummy/pakai_model', 'pakai_model');
		}

		public function index(){
			$data['all_users'] =  $this->pakai_model->get_all_users();
			$data['view'] = 'dummy/pakai/pakai_list';
			$this->load->view('admin/layout', $data);
		}
		
		public function add(){
			if($this->input->post('submit')){

                                $this->form_validation->set_rules('no_dummy', 'Nomor Dummy', 'trim|required');
                                $this->form_validation->set_rules('no_meter_rusak', 'Nomor Meter Rusak', 'trim|required');
                                $this->form_validation->set_rules('alasan_rusak', 'Alasan Rusak', 'trim|required');
                                $this->form_validation->set_rules('ptgs_pasang', 'Petugas Pasang', 'trim|required');
                                $this->form_validation->set_rules('sisa_pulsa', 'Sisa Pulsa', 'trim|required');
                                $this->form_validation->set_rules('no_hp_plg', 'No HP pelanggan', 'trim|required');
                                $this->form_validation->set_rules('nama_cc', 'Nama Call Center', 'trim|required');
                                $this->form_validation->set_rules('std_dummy', 'Stand Dummy', 'trim|required');
                                $this->form_validation->set_rules('nama_pel', 'Nama Pelanggan', 'trim|required');

				if ($this->form_validation->run() == FALSE) {
					$data['view'] = 'dummy/pakai/pakai_add';
                                        $data['dummy']= $this->pakai_model->get_dummy();
					$this->load->view('admin/layout', $data);
				}
				else{
					$data = array(
                                                'id_meter' => $this->input->post(''),
                                                'no_dummy' => $this->input->post('no_dummy'),
                                                'no_meter_rusak' => $this->input->post('no_meter_rusak'),
                                                'alasan_rusak' => $this->input->post('alasan_rusak'),
                                                'ptgs_pasang' => $this->input->post('ptgs_pasang'),
                                                'sisa_pulsa' => $this->input->post('sisa_pulsa'),
                                                'no_hp_plg' => $this->input->post('no_hp_plg'),
                                                'nama_cc' => $this->input->post('nama_cc'),
                                                'no_dummy' => $this->input->post('no_dummy'),
                                                'std_dummy' => $this->input->post('std_dummy'),
                                                'nama_pel' => $this->input->post('nama_pel'),
                                                'aktivasi' => 'non aktif',
                                                'kembali' => 'belum',
                                                'nama' => $this->session->userdata('name'),
                                                'unit' => $this->session->userdata('unit'),
                                                'id_user' => $this->session->userdata('admin_id'),
					);
                                                                                    
                                        $tgl_pakai = date("Y-m-d H:i:s");   
					$data_stok = array(
                                                'tgl_pakai' => $tgl_pakai,
                                                'tgl_aktivasi' => NULL,
                                                'tgl_kembali' => NULL,
                                                'no_meter_rusak' => $this->input->post('no_meter_rusak'),
                                                'posko' => $this->session->userdata('name'),  
                                                'status'=> NULL,
                                        );
                                        
                                        $no_dummy = $this->input->post('no_dummy');
					$data = $this->security->xss_clean($data);
					$result = $this->pakai_model->add_pakai($data,$data_stok,$no_dummy);
					if($result ){
						$this->session->set_flashdata('msg', 'Record is Added Successfully!');
						redirect(base_url('dummy/pakai'));
					}
				}
			}
			else{
                                $data['view'] = 'dummy/pakai/pakai_add';
                                $data['dummy']= $this->pakai_model->get_dummy();
                                $this->load->view('admin/layout', $data);
			}
			
		}

		public function edit($id = 0){
			if($this->input->post('submit')){
                                $this->form_validation->set_rules('no_meter_rusak', 'Nomor Meter Rusak', 'trim|required');
                                $this->form_validation->set_rules('alasan_rusak', 'Alasan Rusak', 'trim|required');
                                $this->form_validation->set_rules('ptgs_pasang', 'Petugas Pasang', 'trim|required');
                                $this->form_validation->set_rules('sisa_pulsa', 'Sisa Pulsa', 'trim|required');
                                $this->form_validation->set_rules('no_hp_plg', 'No HP pelanggan', 'trim|required');
                                $this->form_validation->set_rules('nama_cc', 'Nama Call Center', 'trim|required');
                                $this->form_validation->set_rules('std_dummy', 'Stand Dummy', 'trim|required');
                                
				if ($this->form_validation->run() == FALSE) {
					$data['dummy'] = $this->pakai_model->get_dummy_by_id($id);
					$data['view'] = 'dummy/pakai/pakai_edit';
					$this->load->view('admin/layout', $data);
				}
				else{
					$data = array(
                                                'no_meter_rusak' => $this->input->post('no_meter_rusak'),
                                                'alasan_rusak' => $this->input->post('alasan_rusak'),
                                                'ptgs_pasang' => $this->input->post('ptgs_pasang'),
                                                'sisa_pulsa' => $this->input->post('sisa_pulsa'),
                                                'no_hp_plg' => $this->input->post('no_hp_plg'),
                                                'nama_cc' => $this->input->post('nama_cc'),
                                                'nama' => $this->session->userdata('name'),
                                                'id_user' => $this->session->userdata('admin_id'),
                                                'std_dummy' => $this->input->post('std_dummy'),
					);
					$data = $this->security->xss_clean($data);
					$result = $this->pakai_model->edit_dummy($data, $id);
					if($result){
						$this->session->set_flashdata('msg', 'Record is Updated Successfully!');
						redirect(base_url('dummy/pakai'));
					}
				}
			}
			else{
				$data['dummy'] = $this->pakai_model->get_dummy_by_id($id);
				$data['view'] = 'dummy/pakai/pakai_edit';
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