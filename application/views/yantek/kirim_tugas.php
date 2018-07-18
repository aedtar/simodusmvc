<!DOCTYPE html>
<html>

<head>
    <title>Elearning | Tugas</title>
    <?php include('link.php') ?>
    <style>
    input[type="file"]{display: none;}
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
                                    <h3 class="box-title">Pilih File Upload Tugas</h3>
                                </div>
                            </div>
                            <?php
                              	$kelas = $_GET['kelas'];
                          		$kd_mapel = $_GET['kd_mapel'];
                          		$id_tugas = $_GET['id_tugas'];
								$nama_tugas = $_GET['nama'];
								$kd_guru = $_GET['kd_guru'];
                            ?>
                            <div class="box-body">
                              <form  role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url()?>index.php/controllerSiswa/jawab_tugas/?kelas=<?php echo $kelas ?>&kd_mapel=<?php echo $kd_mapel ?>&id_tugas=<?php echo $id_tugas ?>&nama_tugas=<?php echo $nama_tugas ?>&kd_guru=<?php echo $kd_guru ?>">
                                <div class="form-group">	
                                  <label class="custom-file-upload btn btn-default">
                                      <input type="file" name="file_tugas"/>
                                      Pilih File Tugas . . .
                                  </label>
                                  <button type="submit" class="btn btn-warning">Simpan</button>
                                </div>
                              </form>
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