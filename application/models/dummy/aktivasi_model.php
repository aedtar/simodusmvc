<?php
	class Aktivasi_model extends CI_Model{
            
            //mendapatkan data dummy yang belum diaktivasi
		public function get_all_users(){
                        $this->benchmark->mark('code_start');
                                $this->db->order_by('tgl_pakai','asc');
                                $this->db->where('unit', $this->session->userdata('unit'));
                                $tes1='non aktif';
                                $this->db->where('aktivasi', $tes1);
                                $query = $this->db->get('tbl_metdum_pakai');
                                return $result = $query->result_array();
                        $this->benchmark->mark('code_end');                    
		}

                //menginput data entri dummy
		public function entri_model($data,$data_lama){
                    $this->db->trans_start();
			$this->db->insert('tbl_aktivasi', $data);
                                                                        
                        $this->db->where('id_meter', $data['id_meter']);
			$this->db->update('tbl_metdum_pakai', $data_lama);
                                                
                        $status='teraktivasi';
                        $no_dummy=$data['no_dummy'];
                        $tgl_aktivasi=$data['tgl_aktivasi'];
                        $data_last=array(
                            'tgl_aktivasi' => $tgl_aktivasi,
                            'status' => $status
                        );
                        $this->db->where('no_dummy', $no_dummy);
                        $this->db->where('unit', $this->session->userdata('unit'));
			$this->db->update('tbl_metdum_stok', $data_last);                       
                    $this->db->trans_complete();
                    
                    if ($this->db->trans_status() === FALSE) {
                        # Something went wrong.
                        $this->db->trans_rollback();
                        return FALSE;
                    } 
                    else {
                        # Everything is Perfect. 
                        # Committing data to the database.
                        $this->db->trans_commit();
                        return TRUE;
                    }
                        
		}


                //data histori meter yang telah diaktivasi
		public function get_histori(){
//                    untuk menghitung waktu operasi model ini
                        $this->benchmark->mark('code_start');
                                $this->db->order_by('tgl_aktivasi','asc');
                                $this->db->where('unit', $this->session->userdata('unit'));
                                $query = $this->db->get('tbl_aktivasi');
                                return $result = $query->result_array();
                        $this->benchmark->mark('code_end');                    
		}
                
                //mendapatkan data terkativasi dari dummy untuk diedit
		public function get_dummy_by_id($id){
			$query = $this->db->get_where('tbl_metdum_pakai', array('id_meter' => $id));
			return $result = $query->row_array();
		}
                
		public function edit_dummy($data, $id){
			$this->db->where('id_meter', $id);
			$this->db->update('tbl_metdum_pakai', $data);
			return true;
		}

	}

?>