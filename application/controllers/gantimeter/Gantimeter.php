<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Gantimeter extends MY_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('gantimeter/gantimeter_model', 'gantimeter_model');
		}

		public function index(){
			$data['all_users'] =  $this->gantimeter_model->get_all_users();
			$data['view'] = 'gantimeter/paska_list';
			$this->load->view('admin/layout', $data);
		}
		
		public function add(){
			if($this->input->post('submit')){

                                $this->form_validation->set_rules('idpel', 'IDPEL', 'trim|required');
                                $this->form_validation->set_rules('nama', 'Nama Pelanggan', 'trim|required');
                                $this->form_validation->set_rules('no_meter_lama', 'Nomor Meter Lama', 'trim|required');
                                $this->form_validation->set_rules('no_meter_baru', 'Nomor Meter Baru', 'trim|required');
                                $this->form_validation->set_rules('alasan_ganti', 'Alasan Penggantian', 'trim|required');
                                $this->form_validation->set_rules('ptgs_ganti', 'Petugas Pasang', 'trim|required');
                                $this->form_validation->set_rules('stand_bongkar', 'Stand Bongkar', 'trim|required');

				if ($this->form_validation->run() == FALSE) {
					$data['view'] = 'gantimeter/paska_add';
					$this->load->view('admin/layout', $data);
				}
				else{
					$data = array(
                                                'id' => $this->input->post(''),
                                                'tanggal_ganti' => $this->input->post('tanggal_ganti'),
                                                'idpel' => $this->input->post('idpel'),
                                                'nama' => $this->input->post('nama'),
                                                'alamat' => $this->input->post('alamat'),
                                                'tarif' => $this->input->post('tarif'),
                                                'daya' => $this->input->post('daya'),
                                                'alasan_ganti' => $this->input->post('alasan_ganti'),
                                                'no_meter_lama' => $this->input->post('no_meter_lama'),
                                                'stand_bongkar' => $this->input->post('stand_bongkar'),
                                                'no_meter_baru' => $this->input->post('no_meter_baru'),
                                                'ptgs_ganti' => $this->input->post('ptgs_ganti'),
                                                'tanggal_entri' => $this->input->post(''),
                                                'unit' => $this->session->userdata('unit'),
                                                'id_user' => $this->session->userdata('admin_id'),
					);
                                                                            
					$data = $this->security->xss_clean($data);
					$result = $this->gantimeter_model->add_paska($data);
					if($result ){
						$this->session->set_flashdata('msg', 'Record is Added Successfully!');
						redirect(base_url('gantimeter/gantimeter'));
					}
				}
			}
			else{
					$data['view'] = 'gantimeter/paska_add';
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