<?php
	class Dashboard_model extends CI_Model{

		public function login($data){
			$query = $this->db->get_where('tbl_user', array('username' => $data['username']));
			if ($query->num_rows() == 0){     
				return false;
			}
			else{
				//Compare the password attempt with the password we have stored.
                            $result = $query->row_array();
//			    $validPassword = password_verify($data['password'], $result['password']);
                            if ($data['password']= md5($result['password'])){
                                $validPassword = TRUE;
                            }
			    if($validPassword){
			        return $result = $query->row_array();
			    }
				
			}
		}

//		public function get_all_data(){
//			$this->db->where('id', $id);
//			$this->db->update('tbl_user', $data);
//			return true;
//		}

                
		public function get_all_data(){
                $this->db->where('unit', $this->session->userdata('unit'));
                $query = $this->db->get('tbl_metdum_stok');
                return $result = $query->num_rows();
		}
                
		public function get_all_data2(){
                $this->db->where('unit', $this->session->userdata('unit'));
                $this->db->where('tgl_aktivasi', NULL);
                $query = $this->db->get('tbl_metdum_stok');
                return $result = $query->num_rows();
		}
                
                
		public function change_pwd($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}

	}

?>