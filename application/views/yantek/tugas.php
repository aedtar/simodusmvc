<!DOCTYPE html>
<html>

<head>
    <title>Elearning | Tugas</title>
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
                    <small>Tugas</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Tugas</li>
                </ol>
            </section>

            <section class="content">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-success">
                            <div class="box-header">
                                <div class="col-xs-4">
                                    <h3 class="box-title">Daftar Tugas</h3>
                                </div>
                                <div class="col-xs-3 col-xs-offset-5">
                                    <button class="btn btn-primary dropdown-toggle" style="width:100%;" type="button" data-toggle="dropdown"> -- Pilih Mata Pelajaran --
                <span class="fa fa-book pull-right"></span></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
											<th class="text-center">Id Tugas</th>
                                            <th class="text-center">Nama Tugas</th>
                                            <th class="text-center">deadline</th>
											<th class="text-center">Kelas</th>
											<th class="text-center">Kode Mapel</th>
											<th class="text-center">Kode Guru</th>
                                            <th class="text-center">aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                    $n=0;
                    foreach ($datas2 as $tugas){ $n++; ?>

                                            <tr>
                                                <td class="text-center">
                                                    <?php echo $n; ?>
                                                </td>
												<td class="text-center">
                                                    <?php echo $tugas->id_tugas; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $tugas->nama; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $tugas->deadline; ?>
                                                </td>
												<td class="text-center">
                                                    <?php echo $tugas->kelas; ?>
                                                </td>
												<td class="text-center">
                                                    <?php echo $tugas->kd_mapel; ?>
                                                </td>
												<td class="text-center">
                                                    <?php echo $tugas->kd_guru; ?>
                                                </td>
                                                <td>
                                                  <?php if($tugas->deadline <= date("Y-m-d")){ ?>
                                                      <button class="btn btn-disabled disabled btn-sm pull-left"><span class="fa fa-cloud-upload text-blue"></span></button>
                                                  <?php } else{?>
                                                      <a href="<?php echo base_url()?>index.php/controllerSiswa/kirim_tugas/?kelas=<?php echo $tugas->id_tugas ?>&nama=<?php echo $tugas->nama ?>&deadline=<?php echo $tugas->deadline ?>&kelas=<?php echo $tugas->kelas ?>&kd_mapel=<?php echo $tugas->kd_mapel ?>&id_tugas=<?php echo $tugas->id_tugas ?>&kd_guru=<?php echo $tugas->kd_guru ?>"><button type="button" class="btn btn-default btn-sm pull-left"><span class="fa fa-cloud-upload text-blue"></span></button></a>
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
            
  </div>
			<footer class="main-footer text-center">
    			<strong>Copyright &copy; 2017 <a href="">Aulia Rahmi</a> & <a href="">Putri Ayu Andira</a>.</strong> All rights reserved.
  			</footer>

	

  <!-- /.content-wrapper -->
  
  <div class="control-sidebar-bg"></div>
  </div>

  			<?php include('script.php') ?>
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

