<?php
	class Stok_model extends CI_Model{

		
		public function update_stok($data_stok,$no_dummy){
                        $this->db->where('no_dummy', $no_dummy);
                        $this->db->where('unit', $this->session->userdata('unit'));
			$this->db->update('tbl_metdum_stok', $data_stok);
			return true;
                        
		}

		
	}

?>