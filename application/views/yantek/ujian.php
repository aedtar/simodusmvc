<!DOCTYPE html>
<html>

<head>
	<title>Elearning | Ujian</title>
	<?php include('link.php') ?>
	<style>
		body.modal-open-noscroll {
			margin-right: 0!important;
			overflow: hidden;
		}
		
		.modal-open-noscroll .navbar-fixed-top,
		.modal-open .navbar-fixed-bottom {
			margin-right: 0!important;
		}

	</style>
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
							<div class="box-header">
								<div class="col-xs-4">
									<h3 class="box-title">Daftar Ujian</h3>
								</div>

							</div>
							<div class="box-body">
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th class="text-center">No</th>
											<th class="text-center">id_ujian</th>
											<th class="text-center">kd_mapel</th>
											<th class="text-center">Nama Ujian</th>
											<th class="text-center">Kelas</th>
											<th class="text-center">Mulai Ujian</th>
											<th class="text-center">Selesai Ujian</th>
											<th class="text-center">Kode Guru</th>
											<th class="text-center">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
                    $n=0;
                    foreach ($datas as $ujian){ $n++; ?>

											<tr>
												<td class="text-center">
													<?php echo $n; ?>
												</td>
												<td class="text-center">
													<?php echo $ujian->id_ujian; ?>
												</td>
												<td class="text-center">
													<?php echo $ujian->kd_mapel; ?>
												</td>
												<td class="text-center">
													<?php echo $ujian->nama_ujian; ?>
												</td>
												<td class="text-center">
													<?php echo $ujian->kelas; ?>
												</td>
												<td class="text-center">
													<?php echo $ujian->mulai_ujian; ?>
												</td>
												<td class="text-center">
													<?php echo $ujian->selesai_ujian; ?>
												</td>
												<td class="text-center">
													<?php echo $ujian->kd_guru; ?>
												</td>

												<td>
													<?php if($ujian->selesai_ujian <= date("Y-m-d H:i:s")){ ?>
													<button class="btn btn-disabled disabled btn-sm pull-left"><span class="fa fa-cloud-upload text-blue"></span></button>
													<?php } else{?>
													<a href="<?php echo base_url()?>index.php/controllerSiswa/kirim_ujian/?id_ujian=<?php echo $ujian->id_ujian ?>&kd_mapel=<?php echo $ujian->kd_mapel ?>&nama_ujian=<?php echo $ujian->nama_ujian ?>&kelas=<?php echo $ujian->kelas ?>&mulai_ujian=<?php echo $ujian->mulai_ujian ?>&selesai_ujian=<?php echo $ujian->selesai_ujian ?>&kd_guru=<?php echo $ujian->kd_guru ?>"><button type="button" class="btn btn-default btn-sm pull-left"><span class="fa fa-cloud-upload text-blue"></span></button></a>
													<?php } ?>
													<button type="button" class="btn btn-default btn-sm pull-right"><span class="fa fa-cloud-download text-blue"></span></button>
												</td>
											</tr>



											<?php } ?>
									</tbody>
								</table>

							</div>
						</div>
					</div>
				</div>

			</section>
			<!-- /.content -->
		</div>



		<!-- /.content-wrapper -->
		<footer class="main-footer text-center">
			<strong>Copyright &copy; 2017 <a href="">Aulia Rahmi</a> & <a href="">Putri Ayu Andira</a>.</strong> All rights reserved.
		</footer>
		<div class="control-sidebar-bg"></div>
	</div>


	<script type="text/javascript">
		function ambil(id_jadwal) {
			$.ajax({
				url: "http://localhost/sipaa/index.php/auth/datars/",
				data: "id_jadwal=" + id_jadwal,
				success: function(html) {
					$("#hide" + id_jadwal).hide(300);
				}
			});

		}

	</script>
	<?php include('script.php') ?>
</body>

</html>
