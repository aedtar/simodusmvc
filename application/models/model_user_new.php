<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user_new extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('tb_user', $data);
			return $query;
		}
		// public function materi($level){
		// $data = $this->db->query("SELECT * FROM tbl_materi where kelas='$level'");
		// return $data;
		// }
		public function dummy($level){
		$data = $this->db->query("SELECT * FROM tb_pakai where username='$level'");
		return $data;
		}
			public function lihat_pemdum(){
			$this->db->order_by("id_pakai", "DESC");
			$query = $this->db->get('tb_pakai');
			return $query->result();
			}

				// function export_data()
				// {
				// 	$this->db->order_by("id_pakai", "DESC");
				// 	$query = $this->db->get("tb_pakai");
				// 	return $query->result();
				// }

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
		
			public function mapel_siswa($username){
			$datas = $this->db->query("SELECT * FROM tbl_materi JOIN tbl_mapel JOIN tbl_user WHERE tbl_materi.kelas=tbl_user.level and tbl_user.username = '$username' AND tbl_materi.kd_mapel=tbl_mapel.kd_mapel");
			return $datas;
			}
		
			public function cek_mapel($username){
			$datas = $this->db->query("SELECT * FROM tbl_mapel where kd_guru='$username'");
			return $datas;
			}
		
		public function tugas($level){
		$data = $this->db->query("SELECT * FROM tbl_tugas where kelas='$level'");
		return $data;
		}
			public function lihat_tugas($username){
			$data = $this->db->get_where('tbl_tugas', array('kd_guru'=>$username));
			return $data;
			}
			
			public function cek_tugas($username){
			$datas = $this->db->query("SELECT * FROM tbl_tugas where kd_guru='$username'");
			return $datas;
			}
		
			public function cek_kelas($username){
			$data = $this->db->get_where('tbl_mapel', array('kd_guru'=>$username));
			return $data;
			}
			public function kirim_tugas($username){
			$datas = $this->db->get_where('tbl_kirim_tgs', array('id_user'=>$username));
			return $datas;
			}
			
			public function jawab_tugas($data){
				$this->db->insert('tbl_kirim_tgs', $data);
				return true;
			}
			
			public function jawab_siswa($username){
			$datas = $this->db->query("SELECT * FROM tbl_kirim_tgs JOIN tbl_user JOIN tbl_tugas JOIN tbl_mapel WHERE tbl_kirim_tgs.kelas=tbl_user.level AND tbl_tugas.kd_mapel=tbl_kirim_tgs.kd_mapel AND tbl_tugas.id_tugas=tbl_kirim_tgs.id_tugas AND tbl_kirim_tgs.kd_mapel=tbl_mapel.kd_mapel");
			return $datas;
			}
		
		public function ujian($level){
		$data = $this->db->query("SELECT * FROM tbl_ujian where kelas='$level'");
		return $data;
		}
		
			public function lihat_ujian($username){
			$data = $this->db->get_where('tbl_ujian', array('kd_guru'=>$username));
			return $data;
			}
			
			public function cek_ujian($username){
			$datas = $this->db->query("SELECT * FROM tbl_ujian where kd_guru='$username'");
			return $datas;
			}
		
			public function cek_kelas_ujian($username){
			$data = $this->db->get_where('tbl_mapel', array('kd_guru'=>$username));
			return $data;
			}
			public function kirim_ujian($username){
			$datas = $this->db->get_where('tbl_kirim_ujian', array('id_user'=>$username));
			return $datas;
			}
			public function jawab_ujian($data){
			$this->db->insert('tbl_kirim_ujian', $data);
			return true;
			}
			public function jawab_siswa_nilai($username){
			$datas = $this->db->query("SELECT * FROM tbl_kirim_ujian JOIN tbl_user JOIN tbl_ujian JOIN tbl_mapel WHERE tbl_kirim_ujian.kelas=tbl_user.level AND tbl_ujian.kd_mapel=tbl_kirim_ujian.kd_mapel AND tbl_ujian.id_ujian=tbl_kirim_ujian.id_ujian AND tbl_kirim_ujian.kd_mapel=tbl_mapel.kd_mapel AND path");
			return $datas;
			}
		
		
		
	}