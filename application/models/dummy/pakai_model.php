<?php
	class Pakai_model extends CI_Model{

            //untuk mendapatkan data dummy yang baru digunakan
		public function get_all_users(){                    
                        $this->benchmark->mark('code_start');
                        return $this->db    ->select(
                                                'id_meter,no_dummy,no_meter_rusak,alasan_rusak,tgl_pakai,'
                                                . 'std_dummy,sisa_pulsa,nama_cc,'
                                                . 'aktivasi')
                                            ->order_by('id_meter','desc')
                                            ->limit(150)
                                            ->where('unit', $this->session->userdata('unit'))
                                            ->get('tbl_metdum_pakai')
                                            ->result_array();
                        
                        $this->benchmark->mark('code_end');                    
		}
                
                
            //simpan data pemakaian dummy
		public function add_pakai($data){
			$this->db->insert('tbl_metdum_pakai', $data);   
                        
                        $lastid= $this->db->insert_id();
                        
                        $tgl_pakai = date("Y-m-d H:i:s");
                        $no_dummy=$data['no_dummy'];
                        $no_meter_rusak=$data['no_meter_rusak'];
                        $status = 'terpakai';
                        $data_last=array(
                            'id_dummy' => $lastid,
                            'tgl_pakai' =>$tgl_pakai,
                            'tgl_aktivasi' => NULL,
                            'tgl_kembali' => NULL,
                            'status' => $status,
                            'no_meter_rusak' => $no_meter_rusak,
                            'posko' => $this->session->userdata('name')
                        );
                        $this->db->where('no_dummy', $no_dummy);
                        $this->db->where('unit', $this->session->userdata('unit'));
			$this->db->update('tbl_metdum_stok', $data_last);
                        return true;
		}
                
                
                
                //hapus data pemakaian dummy
		public function del($id,$no_dummy){
                    
//			$query = $this->db->get_where('tbl_metdum_pakai', array('id_meter' => $id));
//			$no_dummy = $query['no_dummy'];
//                        
//                        $query   =  $this->db       ->select('no_dummy,id_meter')
//                                                    ->limit(1)
//                                                    ->where('unit', $this->session->userdata('unit'))
//                                                    ->where('id_meter', $id)
//                                                    ->get('tbl_metdum_pakai');
//                        $no_dummy   =  $query->row_array();
                        
                        $ready="ready";
                        $data_last=array(
                            'tgl_pakai' => NULL,
                            'tgl_aktivasi' => NULL,
                            'tgl_kembali' => NULL,
                            'status' => $ready,
                            'posko' => NULL,
                            'no_meter_rusak' => NULL
                        );
			$this->db->where('no_dummy', $no_dummy)
                                 ->where('unit', $this->session->userdata('unit'))
                                 ->update('tbl_metdum_stok', $data_last);
//                                    
			$this->db->delete('tbl_metdum_pakai', array('id_meter' => $id));
                        return true;
		}

                //dapat nomor dummy yang masih standby
		public function get_dummy(){
                        $tes='ready';
                        $this->db->order_by('no_dummy','asc');
                        $this->db->where('unit', $this->session->userdata('unit'));
                        $this->db->where('status', $tes);
                        $query = $this->db->get('tbl_metdum_stok');
			return $result = $query->result_array();
		}
                                
                
                //dapat data dummy yang sudah dipakai untuk diedit
		public function get_dummy_by_id($id){
			$query = $this->db->get_where('tbl_metdum_pakai', array('id_meter' => $id));
			return $result = $query->row_array();
		}
                
                //mengupdate database setelah diedit
		public function edit_dummy($data, $id){
			$this->db->where('id_meter', $id);
			$this->db->update('tbl_metdum_pakai', $data);
			return true;
		}

	}

?>