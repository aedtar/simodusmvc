<?php
	class Dummy_model extends CI_Model{

		public function entri_model($data,$data_stok,$no_dummy,$id){
			$this->db->insert('tbl_aktivasi', $data);
                        $this->update_tbl_metdum_pakai($id);
			$this->load->model('dummy/stok_model', 'stok_model');
                        $this->stok_model->update_stok($data_stok,$no_dummy);
                        return true;
		}

		public function get_all_users(){
//                    untuk menghitung waktu operasi model ini
                        $this->benchmark->mark('code_start');
                                $this->db->order_by('tgl_pakai','asc');
                                $this->db->limit(150);
                                $this->db->like('unit', $this->session->userdata('unit'));
                                
                                $tes1='non aktif';
                                $tes2='belum';
                                
                                $this->db->where('aktivasi', $tes1);
                                $this->db->where('kembali', $tes2);
        //                        $this->db->where('unit', $this->session->userdata('unit'));
                                $query = $this->db->get('tbl_metdum_pakai');
                                return $result = $query->result_array();

                        $this->benchmark->mark('code_end');
                    
		}

		public function get_all_data(){
//                    untuk menghitung waktu operasi model ini
                        $this->benchmark->mark('code_start');
                                $this->db->order_by('no_dummy','asc');
                                $this->db->where('unit', $this->session->userdata('unit'));
                                $query = $this->db->get('tbl_metdum_stok');
                                return $result = $query->result_array();
                        $this->benchmark->mark('code_end');
                    
		}

		public function get_dummy(){
                        $tes='ready';
                        $this->db->order_by('no_dummy','asc');
                        $this->db->where('unit', $this->session->userdata('unit'));
                        $this->db->where('status', $tes);
                        $query = $this->db->get('tbl_metdum_stok');
                        
			return $result = $query->result_array();
		}
                                
                
                
		public function get_dummy_by_id($id){
			$query = $this->db->get_where('tbl_metdum_pakai', array('id_meter' => $id));
			return $result = $query->row_array();
		}
                
		public function update_tbl_metdum_pakai($id){
                        $tes = 'aktif';
                        $data_stok = array(
                                'aktivasi' => $tes,
                        );
                        $this->db->where('id_meter', $id);
			$this->db->update('tbl_metdum_pakai', $data_stok);
			return true;
                        
		}

		public function edit_dummy($data, $id){
			$this->db->where('id_meter', $id);
			$this->db->update('tbl_metdum_pakai', $data);
			return true;
		}

	}

?>