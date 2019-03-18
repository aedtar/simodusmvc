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

		public function get_all_data_balik(){
//                    untuk menghitung waktu operasi model ini
                        $this->benchmark->mark('code_start');
                        $aktif='aktif';
                        $belum='belum';
                        
//                                $this->db->order_by('no_dummy','asc');
//                                $this->db->where('unit', $this->session->userdata('unit'));
                                $this->db->select('*');
                                $this->db->where('tbl_metdum_pakai.unit', $this->session->userdata('unit'));
                                $this->db->where('tbl_metdum_pakai.aktivasi',$aktif);
                                $this->db->where('tbl_metdum_pakai.kembali',$belum);
                                
                                $this->db->from('tbl_metdum_pakai');
                                $this->db->join('tbl_aktivasi','tbl_metdum_pakai.id_meter=tbl_aktivasi.id_meter');
                                
                                $query = $this->db->get();
                                return $result = $query->result_array();
                                
                        $this->benchmark->mark('code_end');
                    
		}

	}

?>