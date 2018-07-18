<?php
session_start();
class C_dosen extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}

public function delete_tugas()
{
		$id = $this->input->post('kd_tugas');
			$kd_tugas = $this->uri->segment(4);
			$kd_dosen = $this->session->userdata('username');
				$this->db->where('id', $kd_tugas);
				$this->db->delete('tb_tugas');
				redirect('dosen/c_dosen/lihat_tugas');

}

	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('dosen/index', $data);
	}

	public function edit_tugas(){
		$this->load->model('model_user');
		$username 			= $this->session->userdata('username');
		$datas['datas2'] = $this->model_user->cek_mk($username)->result();
		$this->load->view('dosen/edit_tugas', $datas);
	}
	public function update_tugas(){
		$this->load->model('model_user');
		$id = $_GET['id'];
		$username 			= $this->session->userdata('username');
		$nama_tugas 		= $this->input->post('nama_tugas');
		$kd_mk 					= $this->input->post('kd_mk');
		$deadline 			= $this->input->post('deadline');
		$data = explode("_", $kd_mk);
		$datas = array(
			'kd_mk'  							=> $data[0],
			'kd_kls'							=> $data[1],
			'kd_dosen'  					=> $username,
			'nama'								=> $nama_tugas,
			'deadline'  					=> $deadline
		);
		$this->db->where('id', $id);
		$this->db->update('tb_tugas',$datas);
		echo "<script>alert('Jadwal Berhasil di Tambah');history.go(-1);</script>";
		redirect('/dosen/c_dosen/lihat_tugas');
	}

	public function lihat_tugas()
	{
		$this->load->model('model_user');
		$username = $this->session->userdata('username');
		$datas['data1'] = $this->model_user->lihat_tugas($username)->result();
		$datas['datas2'] = $this->model_user->cek_mk($username)->result();
		$this->load->view('dosen/tugas', $datas);
	}

	public function lihatdata()
	{
		$this->load->model('model_user');
		$datal['datal'] = $this->model_user->data_mahasiswa()->result();
		$this->load->view('dosen/tampilanmahasiswa',$datal);
	}


	public function simpan(){
		$datal = array(
			'nim' 				=> $this->input->post('nim'),
			'nama' 				=> $this->input->post('nama'),
			'jurusan' 			=> $this->input->post('jurusan'),
			'matakuliah'  		=> $this->input->post('matakuliah'),
			'semester'  		=> $this->input->post('semester'),
			'nilaitugas'  		=> $this->input->post('nilaitugas'),
			'nilaiuts'  		=> $this->input->post('nilaiuts'),
			'nilaiuas'  		=> $this->input->post('nilaiuas'));
			$this->db->insert('mahasiswa',$datal);
			echo "<script>alert('Data Berhasil Di perbarui');history.go(-1);</script>";

	}


		public function editmaha(){
		$this->load->model('model_user');
		$nil = $this->uri->segment(4);
		$data['editmahasiswa'] = $this->model_user->editmahasiswa($nil)->row_array();
		$this->load->view('dosen/editdata',$data);

	}

	public function edit_simpan(){
		$id = $this->input->post('id');
		$datal = array(
			'nim' 				=> $this->input->post('nim'),
			'nama' 				=> $this->input->post('nama'),
			'jurusan' 			=> $this->input->post('jurusan'),
			'matakuliah'  		=> $this->input->post('matakuliah'),
			'semester'  		=> $this->input->post('semester'),
			'nilaitugas'  		=> $this->input->post('nilaitugas'),
			'nilaiuts'  		=> $this->input->post('nilaiuts'),
			'nilaiuas'  		=> $this->input->post('nilaiuas'));
		$this->db->where('nim',$id);
		$this->db->update('mahasiswa',$datal);
			echo "<script>alert('Data Berhasil Di perbarui');history.go(-1);</script>";
		redirect('/dosen/c_dosen/lihatdata');
	}



	public function delete(){
		$nip = $this->uri->segment(3);
			$this->db->where('nim',$nim);
			$this->db->delete('mahasiswa');
				echo "<script>alert('Data Berhasil Di Hapus');history.go(-1);</script>";
			redirect('admin/c_admin/lihatdata');
	}


	public function logout() {
	$sess_array = array('username' => '',
	'password' => '');
	$this->session->unset_userdata('logged_in', $sess_array);
	$data['message_display'] = 'Successfully Logout';
	$this->load->view('login', $data);
	}

	public function data(){
		$this->load->model('model_user');
		$username = $this->session->userdata('username');
		$datas['datas'] = $this->model_user->jadwal($username)->result();
		$this->load->view('dosen/data',$datas);
	}


	public function simpanjadwal(){
		$datal = array(
			'makul_id' 			=> $this->input->post('makul_id'),
			'nama_makul' 		=> $this->input->post('nama_makul'),
			'dosen'		  		=> $this->input->post('dosen'),
			'ruang'		  		=> $this->input->post('ruang'),
			'jam'		  		=> $this->input->post('jam'),
			'sks'		  		=> $this->input->post('sks'),
			'semester'  		=> $this->input->post('semester'));
			$this->db->insert('jadwal',$datal);
			echo "<script>alert('Data Berhasil Di perbarui');history.go(-1);</script>";

	}

	public function lihat_materi(){
		$this->load->model('model_user');
		$username = $this->session->userdata('username');
		$datas['datas1'] = $this->model_user->lihat_materi($username)->result();
		$datas['datas2'] = $this->model_user->cek_mk($username)->result();
		$this->load->view('dosen/materi',$datas);
	}

	public function tambah_tugas()
	{
		$this->load->model('model_user');
		$username 			= $this->session->userdata('username');
		$nama_tugas 		= $this->input->post('nama_tugas');
		$kd_mk 					= $this->input->post('kd_mk');
		$deadline 			= $this->input->post('deadline');
		$data = explode("_", $kd_mk);
		$datas = array(
			'kd_mk'  							=> $data[0],
			'kd_kls'							=> $data[1],
			'kd_dosen'  					=> $username,
			'nama'								=> $nama_tugas,
			'deadline'  					=> $deadline
		);
		$this->db->insert('tb_tugas',$datas);
		echo "<script>alert('Jadwal Berhasil di Tambah');history.go(-1);</script>";
		redirect('/dosen/c_dosen/lihat_tugas');
	}


	public function tambah_materi(){
		$this->load->model('model_user');
		$username 			= $this->session->userdata('username');
		$kd_mk 					= $this->input->post('kd_dosen');
		$code1 					= $this->model_user->cek_kode($kd_mk)->result();
		$code2 					= $this->model_user->ambil_kode($kd_mk)->result();
		$pertemuan			= $this->input->post('pertemuan');
		foreach ($code1 as $cek) {
			if ( $cek->jumlah == 0 ) {
			    $kd_materi = 0;
			}
			else{
				foreach ($code2 as $ambil) {
			    $kd_materi = $ambil->jumlah + 1;
				}
			}
		}
			$this->load->library('upload');
			$nmfile = "MATERI_".$username."_".$kd_mk."_".$pertemuan; //nama file
			$config['upload_path'] = './uploads/'; //path folder
			$config['allowed_types'] = 'pdf|docx'; //type yang dapat diakses
			$config['max_size'] = '10204'; //maksimum besar file 10 MB
			$config['file_name'] = $nmfile; //nama yang terupload nantinya
			$this->upload->initialize($config);

			if ($this->upload->do_upload('file_materi')){
				$gbr = $this->upload->data();
				$filename = $gbr['file_name'];
		}

		$datas = array(
			'nama_materi' 				=> $this->input->post('nama_materi'),
			'kd_mk'  							=> $kd_mk,
			'kd_dosen'  					=> $username,
			'path'  							=> $this->upload->data()['file_name'],
			'pertemuan'  					=> $pertemuan
		);
		$this->db->insert('tb_materi',$datas);
		echo "<script>alert('Jadwal Berhasil di Tambah');history.go(-1);</script>";
		redirect('/dosen/c_dosen/lihat_materi');
	}

	public function validasi(){
		$nim = $_GET['nim'];
		$kd_mk = $_GET['kd_mk'];
		$kd_kls = $_GET['kd_kls'];
		$nama_mk = $_GET['nama_mk'];
		$datas = array(
			'status' => 1,
		);
	  $this->load->model('model_user');
	  $validasi = $this->model_user->update_mhs($kd_mk, $kd_kls, $nim, $datas);
	  if($validasi){
	     $link = base_url('index.php/dosen/c_dosen/req_mk');
	     echo "<script>alert('Permintaan matakuliah $nama_mk Mahasiswa dengan NIM : $nim Sukses!');window.location.replace('$link');</script>";
    }

	}

	public function req_mk(){
		$username = $this->session->userdata('username');
		$query = "SELECT * FROM `tb_user` join tb_mk_pilihan join tb_mk WHERE tb_user.username=tb_mk_pilihan.username and tb_mk_pilihan.kd_mk=tb_mk.kd_mk and tb_mk_pilihan.kd_kls=tb_mk.kd_kls and tb_mk.kd_dosen='$username' and tb_mk_pilihan.status=0";
		$hasil['data'] = $this->db->query($query)->result();
		$this->load->view('dosen/validasi',$hasil);
	}



	public function hapus_materi($id){
			$kd_materi = $this->uri->segment(4);
			$this->db->where('kd_materi', $kd_materi);
			$this->db->delete('tb_materi');
			redirect('dosen/c_dosen/lihat_materi');
	}

	public function quis()
		{
			$this->load->model('model_user');
			$username = $this->session->userdata('username');
			$datas['datas2'] = $this->model_user->cek_mk($username)->result();
			$this->load->view('dosen/quis', $datas);
		}

			public function profil()
			{
				$this->load->view('dosen/profil');
			}

	public function set_info_kuis()
	{
		$this->load->model('model_user');
		$username 			= $this->session->userdata('username');
		$kd_mk 					= $this->input->post('kd_mk');
		$banyak_soal		= $this->input->post('banyak_soal');
		$start 		= $this->input->post('start');
		$finish 		= $this->input->post('finish');
		$data = explode("_", $kd_mk);
		$datas = array(
			'kd_mk'  							=> $data[0],
			'kd_kls'							=> $data[1],
			'banyak_soal'  				=> $banyaksoal,
			'durasi_ujian'				=> $durasi_ujian
		);
		$this->load->view('dosen/quis', $datas);
	}

}
?>
