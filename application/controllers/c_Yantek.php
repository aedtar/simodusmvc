<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Yantek extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('yantek/index');
	}
	
	public function dashboard()
	{
		$this->load->view('yantek/dahboard');
	}

	public function lihat_pemdum(){
		$this->load->model('model_user_new');
		$username = $this->session->userdata('username');
		$datas['datas1'] = $this->model_user_new->lihat_pemdum($username);
		$this->load->view('yantek/pakai_dummy',$datas);
		}
			///function action export data
			function action()
			{
				$this->load->model("model_user_new");
				$this->load->library("excel");
				$object = new PHPExcel();

				$object->setActiveSheetIndex(0);
				$table_columns = array("Tanggal Pemakaian", "Nomor Dummy", "Nomor Meter Rusak", "Nama Pelanggan", "No Hp Pelanggan", "Alasan Rusak", "Stand Dummy", "Sisa Pulsa", "Call Center");
				$column = 0;

				foreach ($table_columns as $field) 
				{
					$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
					$column++;
				}

				$datas1 = $this->model_user_new->lihat_pemdum();

				$excel_row = 2;
				foreach ($datas1 as $row) 
				{
					$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->no_dummy);
					$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->no_meter_rusak);
					$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->nm_pel);
					$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->no_hp_pel);
					$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->std_dummy);
					$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->sisa_pulsa);
					$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->nm_cc);
					$excel_row++;
				}

				$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
				header('Content-Type: application/vnd.ms-excel');
				header('Content-Disposition: attachment;filename="laporan_dummy.xls"');
				$object_writer->save('php://output');

			}

		public function add_dummy()
		{
			$this->load->model('model_user_new');
			$username = $this->session->userdata('username');
			$level = $this->session->userdata('level');
			$datas['datas'] = $this->model_user_new->pemakaian_dummy($username)->result();
			$this->load->view('yantek/pakai_dummy', $datas);
		}

		public function download_materi()
		{

			$this->load->helper('download');

			$this->load->helper('url');
		//$this->db->
			$id = $_GET['id_materi'];
			$username = $this->session->userdata('username');
			$query = "select path from tbl_materi WHERE tbl_materi.id_materi = '$id'";
			$hasil = $this->db->query($query);
			echo "ID File : "; echo $id;

			foreach ($hasil->result() as $key) {
				echo "Nama File : "; echo $key->path;
				$alamat = "/uploads/".$key->path;
				force_download( $key->path.".pdf", $alamat.".pdf");
				echo $alamat;
			}
		}
	
		public function tambah_tugas(){
		$username 			= $this->session->userdata('username');


		$datas = array(
			'id_tugas' 			=> $this->input->post('id_tugas'),
			'kd_mapel'			=> $this->input->post('kd_mapel'),
			'nama'				=> $this->input->post('nama'),
			'kelas'				=> $this->input->post('kelas'),
			'kd_guru'			=> $this->input->post('kd_guru'),
			'deadline' 			=> $this->input->post('deadline'),
			);
			$this->db->insert('tbl_tugas',$datas);
			echo "<script>alert('Jadwal Berhasil di Tambah');history.go(-1);</script>";
			redirect('/controllerSiswa/lihat_tugas');
	}
	
		public function lihat_tugas(){
		$this->load->model('model_user_new');
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$datas['datas2'] = $this->model_user_new->tugas($level)->result();
		$this->load->view('siswa/tugas', $datas);
	}
	
		public function lihat_ujian(){
		$this->load->model('model_user_new');
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$datas['datas'] = $this->model_user_new->ujian($level)->result();
		$this->load->view('siswa/ujian', $datas);
	}
	
		public function kirim_tugas(){
			$kelas = $_GET['kelas'];
			$kd_mapel = $_GET['kd_mapel'];
			$id_tugas = $_GET['id_tugas'];
			$id_user = $this->session->userdata('username');
			$data = array(
			'kelas' => $kelas,
			'kd_mapel' => $kd_mapel,
			'id_tugas' => $id_tugas,
			'id_user' => $id_user);
			$this->load->view('siswa/kirim_tugas', $data);
	}
	
		public function jawab_tugas(){
		$kelas = $_GET['kelas'];
		$kd_mapel = $_GET['kd_mapel'];
		$id_tugas = $_GET['id_tugas'];
		$nama_tugas = $_GET['nama_tugas'];
		$kd_guru = $_GET['kd_guru'];
		$id_user = $this->session->userdata('username');
		$wkt_upload = date("Y-m-d H:i:s");
			$this->load->library('upload');
			$nmfile = "file_".time(); //nama file
			$config['upload_path'] = './uploads/'; //path folder
			$config['allowed_types'] = 'pdf|docx|rar|zip'; //type yang dapat diakses
			$config['max_size'] = '10204'; //maksimum besar file 10 MB
			$config['file_name'] = $nmfile; //nama yang terupload nantinya
			$this->upload->initialize($config);

			if ($this->upload->do_upload('file_tugas')){
				$gbr = $this->upload->data();
				$filename = $gbr['file_name'];
			}
		
		$data = array(
			'id_user' => $id_user,
			'id_tugas' => $id_tugas,
			'kd_mapel' => $kd_mapel,
			'kelas' => $kelas,
			'nama_tugas'=>$nama_tugas,
			'kd_guru'=>$kd_guru,
			'path' => $this->upload->data()['file_name']
		);
		$this->load->model('model_user_new');
		$add = $this->model_user_new->jawab_tugas($data);
		if($add){ //jika mengembalikan nilai true
				echo "<script>alert('Data Berhasil Di perbarui');history.go(-1);</script>";
			} else {
				echo "<script>alert('Gagal menambahkan data');history.go(-1);</script>";
			}

		}
	
	
	
	public function kirim_ujian(){
			$kelas = $_GET['kelas'];
			$kd_mapel = $_GET['kd_mapel'];
			$id_ujian = $_GET['id_ujian'];
			$id_user = $this->session->userdata('username');
			$data = array(
			'kelas' => $kelas,
			'kd_mapel' => $kd_mapel,
			'id_ujian' => $id_ujian,
			'id_user' => $id_user);
			$this->load->view('siswa/kirim_ujian', $data);
	}
	
		public function jawab_ujian(){
		$kelas = $_GET['kelas'];
		$kd_mapel = $_GET['kd_mapel'];
		$id_ujian = $_GET['id_ujian'];
		$kd_guru = $_GET['kd_guru'];
		$id_user = $this->session->userdata('username');
		$selesai_ujian = date("Y-m-d H:i:s");
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
		
		$data = array(
			'id_user' => $id_user,
			'id_ujian' => $id_ujian,
			'kd_mapel' => $kd_mapel,
			'kelas' => $kelas,
			'kd_guru'=>$kd_guru,
			'path' => $this->upload->data()['file_name']
		);
		$this->load->model('model_user_new');
		$add = $this->model_user_new->jawab_ujian($data);
		if($add){ //jika mengembalikan nilai true
				echo "<script>alert('Data Berhasil Di perbarui');history.go(-1);</script>";
			} else {
				echo "<script>alert('Gagal menambahkan data');history.go(-1);</script>";
			}

		}
	
		public function nilai_tugas(){
		$this->load->model('model_user_new');
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$datas['datas'] = $this->model_user_new->lihat_nilai_tgs($level)->result();
		$this->load->view('siswa/lihat_nilai_tgs', $datas);
		}
	
		public function nilai_ujian(){
		$this->load->model('model_user_new');
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$datas['datas'] = $this->model_user_new->lihat_nilai_ujian($level)->result();
		$this->load->view('siswa/lihat_nilai_tgs', $datas);
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
