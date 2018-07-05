<?php
	class Monitoring_model extends CI_Model{

		

		public function get_all_data(){
//                    untuk menghitung waktu operasi model ini
                        $this->benchmark->mark('code_start');
                        
                                $this->db->order_by('no_dummy','asc');
                                $this->db->where('unit', $this->session->userdata('unit'));
                                $query = $this->db->get('tbl_metdum_stok');
                                return $result = $query->result_array();
                        $this->benchmark->mark('code_end');
                    
		}


	}

?>