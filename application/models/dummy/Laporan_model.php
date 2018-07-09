<?php
	class Laporan_model extends CI_Model{

		
		public function get_all_data_bulanan($data1){
////                    untuk menghitung waktu operasi model ini
//                        $this->benchmark->mark('code_start');
//                        
                        $tes='4';
////                        $this->db->where('order_date <=', $second_date);
//                                $data2=$data1('tgl_awal');
                                $tgl_awal=$data1['tgl_awal'];
                                $tgl_akhir=$data1['tgl_akhir'];
//                                $this->db->order_by('no_dummy','asc');
////                                $this->db->where('no_dummy >=', $tes);
//                                $this->db->where('tgl_pakai >=', $tgl_awal);
//                                
//                                $this->db->where('unit', $this->session->userdata('unit'));
//                                $query = $this->db->get('tbl_metdum_stok');
//                                
//                                return $result = $query->result_array();
                                
                    
                    
                    
//                                $tgl_awal= $all_data['tgl_awal'];
//                                $this->db->select('*');
//                                $this->db->where('tbl_metdum_pakai.unit', $this->session->userdata('unit'));
//                                $this->db->where('tgl_pakai >=', $tgl_awal);
//                                $this->db->where('tgl_pakai <=', $tgl_akhir);
//                                
//                                
//                                
//                                $this->db->from('tbl_metdum_pakai');
//                                $this->db->join('tbl_aktivasi','tbl_metdum_pakai.id_meter=tbl_aktivasi.id_meter');
//                                
//                                $query = $this->db->get();
                                
                                
                                
                                $this->db->select('*');
                                $this->db->where('tbl_aktivasi.unit', $this->session->userdata('unit'));
                                $this->db->where('tgl_pakai >=', $tgl_awal);
                                $this->db->where('tgl_pakai <=', $tgl_akhir);
                                
                                
                                
                                $this->db->from('tbl_aktivasi');
                                $this->db->join('tbl_metdum_pakai','tbl_metdum_pakai.id_meter=tbl_aktivasi.id_meter');
                                
                                $query = $this->db->get();
                                
                                
                                return $result = $query->result_array();
                                
                        $this->benchmark->mark('code_end');
                    
		}
                
                
		
	}

?>