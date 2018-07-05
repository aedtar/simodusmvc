<?php
	class Laporan_model extends CI_Model{

		
		public function get_all_data_bulanan($data1){
//                    untuk menghitung waktu operasi model ini
                        $this->benchmark->mark('code_start');
                        
                        $tgl_awal=$data1['tgl_awal'];
//                        $tes='1';
////                        $this->db->where('order_date <=', $second_date);
//                                $data2=$data1('tgl_awal');
                                $this->db->order_by('no_dummy','asc');
//                                $this->db->where('no_dummy >=', $tes);
                                $this->db->where('tgl_pakai >=', $tgl_awal);
                                
                                $this->db->where('unit', $this->session->userdata('unit'));
                                $query = $this->db->get('tbl_metdum_stok');
                                
                                return $result = $query->result_array();
                        $this->benchmark->mark('code_end');
                    
		}
                
                
		
	}

?>