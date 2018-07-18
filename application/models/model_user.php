<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('tbl_user', $data);
			return $query;
		}


	public function data_dosen(){
  			$data = $this->db->get_where('login_akademik');
  			return $data;
	}

  public function d_krs($nim){
		$query = $this->db->query('select * from tb_mk order by kd_mk asc');
		return $query->result();
  }

	public function update_mhs($kd_mk, $kd_kls, $nim, $data){
		$this->db->where('kd_mk', $kd_mk);
		$this->db->where('username', $nim);
		$this->db->where('kd_kls', $kd_kls);
		$query = $this->db->update('tb_mk_pilihan', $data);
		return TRUE;
	}

public function lihat_tugas($username)
{
	$query = "SELECT * FROM tb_tugas JOIN tb_mk WHERE tb_mk.kd_mk = tb_tugas.kd_mk and tb_mk.kd_kls = tb_tugas.kd_kls AND tb_mk.kd_dosen = '$username'";
	$hasil = $this->db->query($query);
	return $hasil;
}

public function upload_tugas($data){
	$this->db->insert('tb_kirim_tugas', $data);
        return TRUE;
}

public function input_krsa($nim){
    $kd_mk = $_GET['kd_mk'];
		$kd_kls = $_GET['kd_kls'];
		$data = array(
        'kd_mk' => $kd_mk,
        'username' => $nim,
        'status' => 1,
				'kd_kls' => $kd_kls
);
    return $this->db->insert('tb_mk_pilihan', $data);

}

public function update($username, $data){
    	$this->db->where('username', $username);
    	$query = $this->db->update('tb_user', $data);
    	return TRUE;
    }

public function delete_krsa(){
    $pilih = $_GET['pilih'];
    $pindah ="DELETE FROM krs WHERE id_jadwal='$pilih'";
    return $this->db->query($pindah);

}


public function detail_krsm($nim){
        	$data = $this->db->query("select * from tb_mk INNER JOIN tb_mk_pilihan where username = $nim and tb_mk_pilihan.status = 1 and tb_mk_pilihan.kd_mk = tb_mk.kd_mk and tb_mk_pilihan.kd_kls = tb_mk.kd_kls order by tb_mk.kd_mk");
        return $data;
  }



public function master_mahasiswa(){
        $data = $this->db->get_where('mahasiswa');
        return $data;
      }


    function edit($ni){
        return $this->db->get_where('login_akademik',array('username'=>$ni));
    }


  function edit_mhs($ns){
        return $this->db->get_where('mahasiswa',array('nim'=>$ns));
    }

		public function tugas($username){
		        $data = $this->db->query("SELECT * FROM `tb_tugas`join tb_mk_pilihan where tb_mk_pilihan.username = $username and tb_mk_pilihan.kd_mk = tb_tugas.kd_mk");
		        return $data;
		      }

					public function jadwal($username){
							        $data = $this->db->get_where('tb_mk', array('kd_dosen'=>$username));
							        return $data;
							  }

								public function lihat_materi($username){
								        $data = $this->db->get_where('tb_materi', array('kd_dosen'=>$username));
								        return $data;
								 }

								 public function cek_mk($username){
												 $data = $this->db->get_where('tb_mk', array('kd_dosen'=>$username));
												 return $data;
									}

									public function cek_kode($kd_mk){
										$query = "SELECT COUNT(kd_materi) as jumlah FROM tb_materi where kd_mk = '$kd_mk'";
										return $this->db->query($query);
									}

									public function ambil_kode($kd_mk){
										$query = "SELECT max(kd_materi) as jumlah FROM tb_materi WHERE kd_mk = '$kd_mk'";
										return $this->db->query($query);
									}
public function materi($username){
	$data = $this->db->query("SELECT * FROM `tb_materi`join tb_mk_pilihan join tb_mk where tb_mk_pilihan.username = '$username' and tb_mk_pilihan.kd_mk = tb_materi.kd_mk and tb_mk_pilihan.kd_kls = tb_mk.kd_kls");
	return $data;
}

	}


?>
