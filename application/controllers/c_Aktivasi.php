<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Aktivasi extends CI_Controller {

	
	public function index()
	{
		$this->load->view('aktivasi/index');
	}
	
	
	public function lihat_materi(){
		$this->load->model('model_user_new');
		$username = $this->session->userdata('username');
		$datas['datas1'] = $this->model_user_new->lihat_materi($username)->result();
		$datas['datas2'] = $this->model_user_new->cek_mapel($username)->result();
		$datas['hasil'] = $this->model_user_new->cek_kelas($username)->result();
		$this->load->view('guru/materi',$datas);
	}
	
	public function tambah_materi(){
		$username 			= $this->session->userdata('username');
		$this->load->library('upload');
			$nmfile = "file_".time(); //nama file
			$config['upload_path'] = './uploads/'; //path folder
			$config['allowed_types'] = 'pdf|docx|rar|zip'; //type yang dapat diakses
			$config['max_size'] = '10204'; //maksimum besar file 10 MB
			$config['file_name'] = $nmfile; //nama yang terupload nantinya
			$this->upload->initialize($config);

			if ($this->upload->do_upload('file_ujian')){
				$gbr = $this->upload->data();
				$filename = $gbr['file_name'];
			}
		
		$datas = array(
			'id_materi' 		=> $this->input->post('id_materi'),
			'username'	 		=> $this->input->post('username'),
			'nama_materi'		=> $this->input->post('nama_materi'),
			'judul_pertemuan'	=> $this->input->post('judul_pertemuan'),
			'kelas'				=> $this->input->post('kelas'),
			'kd_guru'			=> $this->input->post('kd_guru'),
			'kd_mapel' 			=> $this->input->post('kd_mapel'),
			'path'				=> $this->upload->data()['file_name']
			);
		$this->db->insert('tbl_materi',$datas);
		echo "<script>alert('Jadwal Berhasil di Tambah');history.go(-1);</script>";
		redirect('/controllerGuru/lihat_materi');

	}
	
		public function hapus_materi($id){
			$this->db->delete('tbl_materi', array('nama_materi'=>$id));
				echo "<script>alert('Data Berhasil Di Hapus');history.go(-1);</script>";
			redirect('/controllerGurulihat_materi');
	}
	
	public function lihat_tugas(){
		$this->load->model('model_user_new');
		$username = $this->session->userdata('username');
		$datas['datas1'] = $this->model_user_new->lihat_tugas($username)->result();//melihat tugas yang didapat dari guru//
		$datas['datas2'] = $this->model_user_new->cek_tugas($username)->result();
		$datas['hasil'] = $this->model_user_new->cek_kelas($username)->result();
		$this->load->view('guru/tugas',$datas);
	}
	
	public function tambah_tugas(){
		$username 			= $this->session->userdata('username');
		
		$datas = array(
			'id_tugas'	 		=> $this->input->post('id_tugas'),
			'kd_mapel'			=> $this->input->post('kd_mapel'),
			'nama'				=> $this->input->post('nama'),
			'kelas'				=> $this->input->post('kelas'),
			'kd_guru'			=> $this->input->post('kd_guru'),
			'deadline' 			=> $this->input->post('deadline'),
			);
		$this->db->insert('tbl_tugas',$datas);
		echo "<script>alert('Jadwal Berhasil di Tambah');history.go(-1);</script>";
		redirect('/controllerGuru/lihat_tugas');

	}
		public function monitoringtugas(){
			$this->load->model('model_user_new');
			$username = $this->session->userdata('username');
			$datas['datas1'] = $this->model_user_new->kirim_tugas($username)->result();
			$datas['datas2'] = $this->model_user_new->jawab_siswa($username)->result();
			$datas['hasil'] = $this->model_user_new->cek_kelas($username)->result();
			$this->load->view('guru/monitoringtugas',$datas);
			
		}
	
	
	
	public function tambah_ujian(){
		$username 			= $this->session->userdata('username');
		
		$datas = array(
			'id_ujian'	 		=> $this->input->post('id_ujian'),
			'kd_mapel'			=> $this->input->post('kd_mapel'),
			'nama_ujian'		=> $this->input->post('nama_ujian'),
			'kelas'				=> $this->input->post('kelas'),
			'mulai_ujian'		=> $this->input->post('mulai_ujian'),
			'selesai_ujian'		=> $this->input->post('selesai_ujian'),
			'kd_guru'			=> $this->input->post('kd_guru'),
			);
		$this->db->insert('tbl_ujian',$datas);
		echo "<script>alert('Jadwal Berhasil di Tambah');history.go(-1);</script>";
		redirect('/controllerGuru/lihat_ujian');

	}
	
		public function lihat_ujian(){
		$this->load->model('model_user_new');
		$username = $this->session->userdata('username');
		$datas['datas1'] = $this->model_user_new->lihat_ujian($username)->result();//melihat tugas yang didapat dari guru//
		$datas['datas2'] = $this->model_user_new->cek_ujian($username)->result();
		$datas['hasil'] = $this->model_user_new->cek_kelas_ujian($username)->result();
		$this->load->view('guru/ujian',$datas);
	}
		public function monitoringujian(){
			$this->load->model('model_user_new');
			$username = $this->session->userdata('username');
			$datas['datas1'] = $this->model_user_new->kirim_ujian($username)->result();
			$datas['datas2'] = $this->model_user_new->jawab_ujian($username)->result();
			$datas['hasil'] = $this->model_user_new->cek_kelas($username)->result();
			$this->load->view('guru/monitoringujian',$datas);
			
		}
	
	
		public function hapus_tugas($id){
			$this->db->delete('tbl_tugas', array('id_tugas'=>$id));
				echo "<script>alert('Data Berhasil Di Hapus');history.go(-1);</script>";
			redirect('/controllerGurulihat_tugas');
	}
		public function logout(){
			// Removing session data
			$sess_array = array('username' => '',
			'password' => '');
			$this->session->unset_userdata('logged_in', $sess_array);
			$data['message_display'] = 'Successfully Logout';
			$this->load->view('login', $data);
			
		}
	
	
	
}
