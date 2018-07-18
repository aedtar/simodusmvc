<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Akademik - FISIP UMRAH</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/fisip/css/bootstrap.min.css" rel="stylesheet">

    <link href="http://localhost/fisip/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/fisip/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
echo form_open('dosen/c_dosen/edit_simpan');
?>

<?php
echo form_hidden('id',$this->uri->segment(4));
?>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="http://localhost/fisip/index.php/admin/c_admin">
                        Sistem Informasi Akademik
                    </a>
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-home" style="margin-left:-20px"></i>   <span>Dashboard</span></a>
                </li>
                <li>
                        <a href="#" data-toggle="collapse" data-target="#demo" style="margin-left:-20px"><i class="glyphicon glyphicon-book"></i>   <span>Data Master Login</span></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="http://localhost/fisip/index.php/dosen/c_dosen/data">Tambah Data Login</a>
                            </li>
                            <li>
                                <a href="http://localhost/fisip/index.php/dosen/c_dosen/lihatdata">Lihat Data</a>
                            </li>
                        </ul>
                </li>
                <li>
                        <a href="#" data-toggle="collapse" data-target="#demo2" style="margin-left:-20px"><i class="glyphicon glyphicon-cog"></i>   <span>My Accounts</span></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="#">Profile</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('dosen/c_dosen/logout'); ?>">Logout</a>
                            </li>
                        </ul>
                </li>

              </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <div id="page-wrapper">
            <div class="container-fluid"><br>
                    <a href="#menu-toggle" class="btn btn-success" id="menu-toggle">=</a>
                    </div>
                        


	<div id="page-wrapper">
                    <div class="col-lg-12">
        <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Edit Data Mahasiswa
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                       <div class="form-group">
                                 <label>Nama Lengkap</label>
                                <input type='text' class='form-control' name='nama' value="<?php echo $editmahasiswa['nama'];?>">
                                <label>Nim</label>
                                <input class="form-control" name='nim' value="<?php echo $editmahasiswa['nim'];?>">
                        <div class="form-group">
                             <label>Jurusan</label>
                                    <select class="form-control"  name='jurusan'>
                                          <option name='jurusan' value="<?php echo $editmahasiswa['jurusan'];?>"><?php echo $editmahasiswa['jurusan'];?></option>
                                            <option name='jurusan' value="Ilmu Hukum">Ilmu Hukum</option>
                                            <option name='jurusan' value="Ilmu Sosial">Ilmu Sosial</option>
                                            <option name='jurusan' value="Ilmu Pemerintahan">Ilmu Pemerintahan</option>
                                            <option name='jurusan' value="Ilmu Administrasi">Ilmu Administrasi</option>                                            <option name='jurusan' value="-">-</option>
                                            <option name='jurusan' value=""> </option>
                                      </select>
                            </div>
                                <label>Mata Kuliah</label>
                                <input class="form-control" name='username' value="<?php echo $editmahasiswa['matakuliah'];?>" >
                                <label>Semester</label>
                                <input class="form-control" name='password' value="<?php echo $editmahasiswa['semester'];?>">
                                <label>Nilai Tugas</label>
                                <input class="form-control" name='password' value="<?php echo $editmahasiswa['nilaitugas'];?>">
                                <label>Nilai UTS</label>
                                <input class="form-control" name='password' value="<?php echo $editmahasiswa['nilaiuts'];?>">
                                <label>Nilai UAS</label>
                                <input class="form-control" name='password' value="<?php echo $editmahasiswa['nilaiuas'];?>">
                                  <button class="btn btn-primary" type="submit" name="simpan_data">Simpan Data</button>
                            </div>
                            </div>
                        </div>



                <!-- /.row -->


<footer>
    <section>
        
    </section>
</footer>




    <!-- jQuery -->
    <script src="http://localhost/fisip/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/fisip/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
