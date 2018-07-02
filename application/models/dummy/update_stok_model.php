<?php
	class Update_stok_model extends CI_Model{

		public function add_pakai($data){
			$this->db->insert('tbl_metdum_pakai', $data);
			return true;
		}

		public function get_all_users(){
//                    untuk menghitung waktu operasi model ini
                        $this->benchmark->mark('code_start');

                                $this->db->order_by('id_meter','desc');
                                $this->db->limit(1000);
                                $this->db->like('unit', $this->session->userdata('unit'));
        //                        $this->db->where('unit', $this->session->userdata('unit'));

                                $query = $this->db->get('tbl_metdum_pakai');
        //                       $query = $this->db->get_where('tbl_metdum_pakai',array('unit' => $this->session->userdata('unit')));
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
                
                
                
		public function get_user_by_id($id){
			$query = $this->db->get_where('ci_users', array('id' => $id));
			return $result = $query->row_array();
		}

		public function update_stok($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}

	}

?>