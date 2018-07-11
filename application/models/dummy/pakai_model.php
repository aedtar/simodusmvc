<?php
	class Pakai_model extends CI_Model{

		public function get_all_users(){
//                    untuk menghitung waktu operasi model ini
                        $this->benchmark->mark('code_start');
                        $this->db->select(
                                'id_meter,no_dummy,no_meter_rusak,alasan_rusak,tgl_pakai,'
                                . 'std_dummy,sisa_pulsa,nama_cc,'
                                . 'aktivasi'
                                );
                        $this->db->order_by('id_meter','desc');
                        $this->db->limit(150);
                        $this->db->where('unit', $this->session->userdata('unit'));
                        $query = $this->db->get('tbl_metdum_pakai');
                        return $result = $query->result_array();
                        $this->benchmark->mark('code_end');                    
		}
                
		public function add_pakai($data){
			$this->db->insert('tbl_metdum_pakai', $data);
                        
                        $lastid= $this->db->insert_id();
                        $tgl_pakai = date("Y-m-d H:i:s");
                        $no_dummy=$data['no_dummy'];
                        $no_meter_rusak=$data['no_meter_rusak'];
                        $data_last=array(
                            'id_dummy' => $lastid,
                            'tgl_pakai' =>$tgl_pakai,
                            'tgl_aktivasi' => NULL,
                            'tgl_kembali' => NULL,
                            'no_dummy' => $no_dummy,
                            'status' => NULL,
                            'no_meter_rusak' => $no_meter_rusak,
                            'posko' => $this->session->userdata('name')
                        );
                        $this->db->where('no_dummy', $no_dummy);
                        $this->db->where('unit', $this->session->userdata('unit'));
			$this->db->update('tbl_metdum_stok', $data_last);
                        return true;
		}

		public function del($id){
			$this->db->delete('tbl_metdum_pakai', array('id_meter' => $id));
                        $ready='ready';
                        $data_last=array(
                            'id_dummy' => NULL,
                            'tgl_pakai' => NULL,
                            'tgl_aktivasi' => NULL,
                            'tgl_kembali' => NULL,
                            'status' => $ready,
                            'no_meter_rusak' => NULL
                        );
                        $this->db->where('id_dummy', $id);
			$this->db->update('tbl_metdum_stok', $data_last);
                        return true;
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
                
//		public function update_stok($data_stok,$no_dummy){
//                        $this->db->where('no_dummy', $no_dummy);
//                        $this->db->where('unit', $this->session->userdata('unit'));
//			$this->db->update('tbl_metdum_stok', $data_stok);
//			return true;
//                        
//		}

		public function edit_dummy($data, $id){
			$this->db->where('id_meter', $id);
			$this->db->update('tbl_metdum_pakai', $data);
			return true;
		}

	}

?>