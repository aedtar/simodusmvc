<?php
	class Pakai_model extends CI_Model{

		public function add_user($data){
			$this->db->insert('ci_users', $data);
			return true;
		}

		public function get_all_dummy_pakai(){
			$query = $this->db->get('tbl_metdum_pakai');
			return $result = $query->result_array();
		}

		public function get_user_by_id($id){
			$query = $this->db->get_where('ci_users', array('id' => $id));
			return $result = $query->row_array();
		}

		public function edit_user($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}

	}

?>