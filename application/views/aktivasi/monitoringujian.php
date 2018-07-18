<!DOCTYPE html>
<html>

<head>
	<title>Elearning | ujian</title>
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
					Bahan Ajar
					<small>Ujian</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Ujian</li>
				</ol>
			</section>



			<section class="content">

				<div class="row">
					<div class="col-xs-12">
						<div class="box box-success">
							<div class="box-body">
								<table id="example1" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>No</th>
											<th>id_ujian</th>
											<th>kode Mapel</th>
											<th>Nama Mata Pelajaran</th>
											<th>Nama ujian</th>
											<th>kelas</th>
											<th>kd_guru</th>
											<th>path</th>
											<th>aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
                      $n=0;
                      foreach ($datas2 as $tugas){ $n++;
                  ?>
											<tr>
												<td>
													<?php echo $n; ?>
												</td>
												<td>
													<?php echo $tugas->id_ujian ?>
												</td>
												<td>
													<?php echo $tugas->kd_mapel ?>
												</td>
												<td>
													<?php echo $tugas->nama_mapel ?>
												</td>
												<td>
													<?php echo $tugas->nama ?>
												</td>
												<td>
													<?php echo $tugas->kelas ?>
												</td>
												<td>
													<?php echo $tugas->kd_guru ?>
												</td>
												<td>
													<?php echo $tugas->path ?>
												</td>
												<td>
													<button type="button" class="btn btn-primary btn-sm">Download</button>
												</td>
											</tr>
											<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<!-- Modal -->
				<div id="tambah" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- konten modal-->
						<div class="modal-content">
							<form action="<?php echo base_url('index.php/controllerGuru/tambah_tugas');?>" role="form" enctype="multipart/form-data" method="post">
								<!-- heading modal -->
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Masukkan Data Tugas</h4>
								</div>
								<!-- body modal -->
								<div class="modal-body">

									<div class="form-group">
										<label>Id Tugas</label>
										<input type="text" class="form-control" name="id_tugas" placeholder="masukkan id_tugas ..." required="requaired">
									</div>

									<div class="form-group">
										<label>Kode mapel</label>
										<input type="text" class="form-control" name="kd_mapel" placeholder="kode mapel ..." required="requaired">
									</div>

									<div class="form-group">
										<label>Nama Tugas</label>
										<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Tugas" required="requaired">
									</div>
									<div class="form-group">
										<label>Kelas</label>
										<select class="form-control" name="kelas">
                                  <?php
                                      foreach ($hasil as $kelas){

                                  ?>

                                  <option value="<?php echo $kelas->kelas; ?>"><?php echo $kelas->kelas; ?></option>
                                  <?php } ?>
                                </select>

									</div>
									<div class="form-group">
										<label>kode Guru</label>
										<input type="text" class="form-control" name="kd_guru" placeholder="kode guru ..." required="requaired">
									</div>
									<div class="form-group">
										<label>Deadline</label>
										<input type="date" class="form-control" name="deadline" required="requaired">
									</div>

									<div class="modal-footer">
										<button type="submit" class="btn btn-primary">Simpan</button>
									</div>


								</div>

						</div>
						<!-- footer modal -->


						</form>
					</div>
				</div>
		</div>
		<!-- Modal -->

		</section>
		<!-- /.content -->
		<footer class="main-footer text-center">
			<strong>Copyright &copy; 2017 <a href="">Aulia Rahmi</a> & <a href="">Putri Ayu Andira</a>.</strong> All rights reserved.
		</footer>
	</div>



	<!-- /.content-wrapper -->

	<div class="control-sidebar-bg"></div>
	</div>

	<?php include('script.php') ?>

</body>

</html>
