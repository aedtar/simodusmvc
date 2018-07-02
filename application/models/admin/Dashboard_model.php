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
//                
                    
		}
                
		public function change_pwd($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}

	}

?>