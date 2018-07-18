<!DOCTYPE html>
<html>
<head>
  <title>Elearning | Materi</title>
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
        <small>Materi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Materi</li>
      </ol>
    </section>



    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <div class="row">
                <div class="col-xs-4">
                  <h3 class="box-title">Daftar Mata Pelajaran</h3>
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
				  <th>Id_materi</th>
				  <th>Username</th>
				  <th>nama materi</th>
                  <th>Pertemuan</th>
				  <th>judul materi</th>
                  <th>Kelas</th>
				  <th>Kode Guru</th>
				  <th>Kode Mapel</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $n=0;
                      foreach ($datas1 as $materi){ $n++;
                  ?>
                <tr>
                  <td><?php echo $n; ?></td>
				  <td><?php echo $materi->id_materi ?></td>
				  <td><?php echo $materi->username ?></td>
				  <td><?php echo $materi->nama_materi ?></td>
                  <td><?php echo $materi->judul_pertemuan ?></td>
                  <td><?php echo $materi->nama_materi ?></td>
				  <td><?php echo $materi->kelas ?></td>
				  <td><?php echo $materi->kd_guru ?></td>
				  <td><?php echo $materi->kd_mapel ?></td>
                  <td>
                    <a class="glyphicon glyphicon-edit" href="">unduh</a>
                    <a class="glyphicon glyphicon-trash pull-right btn" href="<?php echo base_url('index.php/controllerGuru/hapus_materi');?>?id=<?php echo $materi->nama_materi ?>">Hapus</a>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
              <div class="box-footer">
                <div class="pull-right">
                  <button data-toggle="modal" data-target="#tambah" type="button" class="btn btn-primary btn-sm">Tambah Materi</button>
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
                        <form action="<?php echo base_url('index.php/controllerGuru/tambah_materi');?>" role="form" enctype="multipart/form-data" method="post">
                            <!-- heading modal -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Masukkan Data Materi</h4>
                            </div>
                            <!-- body modal -->
                            <div class="modal-body">
							<div class="form-group">
                                <label>Id Materi</label>
                                <input type="text" class="form-control" name="id_materi" placeholder="id Materi ..." required="requaired">
                            </div>
							<div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="username anda ..." required="requaired">
                            </div>


                            <div class="form-group">
                                <label>Nama Materi</label>
                                <input type="text" class="form-control" name="nama_materi" placeholder="Nama Materi ..." required="requaired">
                            </div>

                            <div class="form-group">
                                <label>Pertemuan</label>
                                <input type="number" class="form-control" name="judul_pertemuan" placeholder="Pertemuan Ke ..." required="requaired">
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
                                <label>Kode Guru</label>
                                <input type="text" class="form-control" name="kd_guru" placeholder="kodeguru ..." required="requaired">
                            </div>
							<div class="form-group">
                                <label>Kode Mapel</label>
                                <input type="text" class="form-control" name="kd_mapel" placeholder="kode mapel ..." required="requaired">
                            </div>

                            <div class="form-group">
                              <label>Upload File Materi</label><br>
                              <label class="custom-file-upload btn btn-default">
                                  <input required="required" type="file" name="file_materi"/>
                              </label>
                              <button type="submit" class="btn btn-warning">Simpan</button>
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
