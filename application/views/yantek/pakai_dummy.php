<!DOCTYPE html>
<html>

<head>
	<title>SIMODUS | Pemakaian Dummy</title>
	<?php include('link.php') ?>
	<!-- ini link meta dan css -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<?php include('header.php'); ?>
		<!-- manggil header (navbar nya) -->

		<?php include('sidebar.php'); ?>
		<!-- manggil sidebar (menu kiri nya) -->

		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Dummy
					<small>Pakai</small>
				</h1>
			</section>
			<section class="content">

				<div class="row">
					<div class="col-xs-12">
						<div class="box box-success">
							<div class="box-header">
								<div class="pull-left">
									<button data-toggle="modal" data-target="#tambah" type="button" class="btn btn-primary btn-sm">Tambah Data</button>
								</div>
							</div>
						<div class="box-body">
							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nomor Dummy</th>
										<th>Nomor Meter Rusak</th>
										<th>Nama Pelanggan</th>
										<th>No HP Pelanggan</th>
										<th>Stand Dummy</th>
										<th>Sisa Pulsa</th>
										<th>Call Center</th>  
										<th>Status</th>                       

									</tr>
								</thead>
								<tbody>
									<?php $n=0; foreach ($datas1 as $row){ $n++;?>
									<tr>
										<td><?php echo $n; ?></td>
										<td><?php echo $row->no_dummy ?></td>
										<td><?php echo $row->no_meter_rusak ?></td>
										<td><?php echo $row->no_hp_pel ?></td>
										<td><?php echo $row->nm_pel ?></td>
										<td><?php echo $row->std_dummy ?></td>
										<td><?php echo $row->sisa_pulsa?></td>
										<td><?php echo $row->nm_cc?></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
							<div class="box-header">
								<div align="center">
								<form method="post" action="<?php echo base_url(); ?>index.php/c_Yantek/action">
									<input type="submit" name="export" class="btn btn-success" value="Export" />
								</form>

							</div>
								
							</div>

						</div>
					</div>
				</div>
				<!-- Modal -->
                <div id="tambah" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- konten modal-->
                        <div class="modal-content">
                        <form action="<?php echo base_url('index.php/c_Yantek/tambah_dummy');?>" role="form" enctype="multipart/form-data" method="post">
                            <!-- heading modal -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Masukkan Data Pakai Dummy</h4>
                            </div>
                            <!-- body modal -->
                            <div class="modal-body">
							<div class="form-group">
                                <label>No Dummy</label>
                                <select name="no_dummy" class="form-control">
                                	<option disabled selected>Pilih No Dummy</option>
                                	<?php foreach($dummy as $row){?>
                                		<option value="<?php echo $row['no_dummy']; ?>"><?php  echo $row['no_dummy']; ?></option>
                                	<?php } ?>      
                                </select>
                            </div>
							<div class="form-group">
                                <label>No Meter Rusak</label>
                                <input type="text" class="form-control" name="no_meter_rusak" placeholder="Masukkan Nomor Meter Yang Rusak" required="requaired">
                            </div>
                            <div class="form-group">
                                <label>Nama Pelanggan</label>
                                <input type="text" class="form-control" name="nm_pel" placeholder="Masukkan Nama Pelanggan" required="requaired">
                            </div>
                            <div class="form-group">
                                <label>No HP Pelanggan</label>
                                <input type="text" class="form-control" name="no_hp_pel" placeholder="Masukkan Nomor HP Pelanggan" required="requaired">
                            </div>

                            <div class="form-group">
                                <label>Alasan Rusak</label>
                                <select name="alasan_rusak" class="form-control">
                                	<option disabled selected>Pilih Alasan Rusak</option>
                                	<option value="1">Token tidak dapat dimasukkan</option>
                                	<option value="2">Sisa kredit pada kWh meter hilang/bertambah saat listrik padam</option>
                                	<option value="3">Kerusakan pada keypad</option>
                                	<option value="4">LCD mati/rusak</option>
                                	<option value="5">kWh Meter rusak (akibat petir/terbakar)</option>
                                	<option value="6">Sisa kredit tidak bertambah saat kredit baru dimasukkan</option>
                                	<option value="7">Baut tutup terminal patah</option>
                                	<option value="8">Tegangan dibawah 180V tidak bisa hidup</option>
                                	<option value="9">Micro switch rusak / tidak keluar tegangan</option>
                                	<option value="10">ID meter pada display dan nameplate tidak sama</option>
                                	<option value="11">Sisa kredit tidak berkurang</option>
                                	<option value="12">Display overload tanpa beban</option>
                                	<option value="13">Terminal kWh meter rusak</option>
                                	<option value="14">Meter periksa/tutup dibuka lampu tetap nyala</option>
                                	<option value="15">Timbul rusak</option>
                                	<option value="16">kWh minus</option>
                                	<option value="17">kWh bertambah</option>
                                	<option value="18">Lain-lain</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Stand Dummy</label>
                                <input type="number" name="std_dummy" class="form-control" id="std_dummy" placeholder="Masukkan Stand Dummy">
                            </div>
							<div class="form-group">
                                <label>Sisa Pulsa</label>
                                <input type="text" class="form-control" name="sisa_pulsa" placeholder="Masukkan Sisa Pulsa Pelanggan" required="requaired">
                            </div>
							<div class="form-group">
                                <label>Nama CC</label>
                                <input type="text" class="form-control" name="nama_cc" placeholder="Masukkan Nama Call Center" required="requaired">
                            </div>

                            <!-- <div class="form-group">
                              <label>Upload File dummy</label><br>
                              <label class="custom-file-upload btn btn-default">
                                  <input required="required" type="file" name="file_dummy"/>
                              </label>
                              
                            </div> -->
                            <div><button type="submit" class="btn btn-warning">Simpan</button></div>
                            </div>
                            <!-- footer modal -->

                        </form>
                        </div>
                    </div>
                </div>
                <!-- Modal -->

		</section>
		<!-- /.content -->
	</div>



	<!-- /.content-wrapper -->
	<footer class="main-footer text-center">
		<strong>Copyright &copy; 2017 <a href="">Aulia Rahmi</a> & <a href="">Putri Ayu Andira</a>.</strong> All rights reserved.
	</footer>
	<div class="control-sidebar-bg"></div>
	</div>

	<?php include('script.php') ?>

</body>

</html>
