<!DOCTYPE html>
<html>
<head>
  <title>Elearning | ujian</title>
  <?php include('link.php') ?> <!-- ini link meta dan css -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('header.php'); ?> <!-- manggil header (navbar nya) -->

  <?php include('sidebar.php'); ?>  <!-- manggil sidebar (menu kiri nya) -->

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
              <div class="row">
                <div class="col-xs-4">
                  <h3 class="box-title">Daftar Ujian</h3>
                </div>
                <div class="col-xs-4 col-xs-offset-4">
                  <div class="dropdown" style="width:100%;">
                    <ul class="dropdown-menu" style="width:100%;">
                      <li style="width:100%;" class="text-center"><a href="#"></a>IPA</li>
                      <li style="width:100%;" class="text-center"><a href="#">IPS</a></li>
                      <li style="width:100%;" class="text-center"><a href="#">Bahasa Indonesia</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>id_ujian</th>
                  <th>Kode Mapel</th>
                  <th>Nama ujian</th>
				  <th>kelas</th>
				  <th>Mulai Ujian</th>
                  <th>Selesai Ujian</th>
				  <th>kode guru</th>
				  <th>aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $n=0;
                      foreach ($datas2 as $ujian){ $n++;
                  ?>
                <tr>
                  <td><?php echo $n; ?></td>
                  <td><?php echo $ujian->id_ujian ?></td>
                  <td><?php echo $ujian->kd_mapel ?></td>
                  <td><?php echo $ujian->nama_ujian ?></td>
				  <td><?php echo $ujian->kelas ?></td>
				  <td><?php echo $ujian->mulai_ujian ?></td>
				  <td><?php echo $ujian->selesai_ujian ?></td>
				  <td><?php echo $ujian->kd_guru ?></td>
                  <td>
                    <a class="glyphicon glyphicon-edit" href="<?php echo base_url('index.php/controllerGuru/monitoringtugas');?>">Monitoring Ujian</a>
                    <a class="glyphicon glyphicon-trash pull-right btn" href="<?php echo base_url('index.php/controllerGuru/hapus_ujian');?>?id=<?php echo $ujian->nama_ujian ?>">Hapus</a>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
              <div class="box-footer">
                <div class="pull-right">
                  <button data-toggle="modal" data-target="#tambah" type="button" class="btn btn-primary btn-sm">Tambah Ujian</button>
                </div>
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
                        <form action="<?php echo base_url('index.php/controllerGuru/tambah_ujian');?>" role="form" enctype="multipart/form-data" method="post">
                            <!-- heading modal -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Masukkan Data Ujian</h4>
                            </div>
                            <!-- body modal -->
                            <div class="modal-body">

                            <div class="form-group">
                                <label>Id Ujian</label>
                                <input type="text" class="form-control" name="id_ujian" placeholder="id_ujian ..." required="requaired">
                            </div>

                            <div class="form-group">
                                <label>Kode Mapel</label>
                                <input type="text" class="form-control" name="kd_mapel" placeholder="kode mapel ..." required="requaired">
                            </div>

                            <div class="form-group">
                                <label>Nama Ujian</label>
                                <select class="form-control" name="nama_ujian">

                                  <option value="UAS">UAS</option>
								  <option value="UTS">UTS</option>
									
                                </select>

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
								<label>Mulai ujian</label>
								<input type="datetime-local" class="form-control" name="mulai_ujian" required="requaired">
							</div>
							<div class="form-group">
								<label>Selesai ujian</label>
								<input type="datetime-local" class="form-control" name="selesai_ujian" required="requaired">
							</div>
							<div class="form-group">
								<label>kode Guru</label>
									<input type="text" class="form-control" name="kd_guru" placeholder="kode guru ..." required="requaired">
							</div>

                            </div>
                            <!-- footer modal -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>

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
    <strong>Copyright &copy; 2017 <a href="">Aulia Rahmi</a> & <a href="">Putri Ayu Andira</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
  </div>

  <?php include('script.php') ?>

</body>
</html>
