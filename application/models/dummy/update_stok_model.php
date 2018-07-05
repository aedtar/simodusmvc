<?php
	class Update_stok_model extends CI_Model{

		
		public function get_dummy(){
                        $tes='ready';
                        $this->db->order_by('no_dummy','asc');
                        $this->db->where('unit', $this->session->userdata('unit'));
                        $this->db->where('status', $tes);
                        $query = $this->db->get('tbl_metdum_stok');
                        
			return $result = $query->result_array();
		}
                
                
                
		public function update_stok($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}

	}

?>