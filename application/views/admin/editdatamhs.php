<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIPAA | Edit Data</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SI</b>U</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIPAA</b>UMRAH</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">       


          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>dist/img/icon.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo ($this->session->userdata('username'));?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>dist/img/icon.jpg" class="img-circle" alt="User Image">
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a  href="<?php echo site_url('admin/c_admin/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>


        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>dist/img/icon.jpg" class="img-circle" alt="User Image">
        </div>


        <div class="pull-left info">
          <p><?php echo ($this->session->userdata('username'));?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     

      <!-- sidebar menu: : style can be found in sidebar.less -->
 <ul class="sidebar-menu">
        <li class="header">Menu Sistem</li>
        <li class="active treeview">
          <a href="<?php echo base_url(); ?>index.php/admin/c_admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Data Login</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a  href="<?php echo base_url(); ?>index.php/auth/data"><i class="fa fa-plus"></i>Tambah Data Login</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/admin/c_admin/lihatdata"><i class="fa fa-laptop"></i>Lihat Data</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-user"></i>Dosen</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/admin/c_admin/lht_mhs"><i class="fa  fa-user"></i>Mahasiswa</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/admin/c_admin/d_smster"><i class="fa fa-calendar"></i>Mata Kuliah</a></li>
            <li><a href="#"><i <i class="fa fa-laptop"></i>Jadwal Kuliah</a></li>
          </ul>
        </li>


        <li class="treeview">
            <a  href="<?php echo site_url('admin/c_admin/logout'); ?>">
                <i class="fa fa-power-off"></i>  <span>Logout</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>


   </section>
    <!-- /.sidebar -->
  </aside>



<?php
echo form_open('auth/edit_simpan_mhs');
?>

<?php
echo form_hidden('idd',$this->uri->segment(5));
?>
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Sistem
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">Data Login</a></li>
        <li class="active">Lihat Data</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Login</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="row">
                    <div class="col-lg-12">
                       <div class="form-group">
                            <label>Nama Lengkap</label>
                                <input class="form-control" name='nama' value="<?php echo $edit['nama'];?>">
                            <label>NIM</label>
                                <input class="form-control" value="<?php echo $edit['nim'];?>">    
                            <label>Jurusan</label>
                                <select class="form-control"  name='jurusan'>
                                <option name='jurusan' value="<?php echo $edit['jurusan'];?>"><?php echo $edit['jurusan'];?></option>
                                    <option>-</option>
                                    <option>Teknik Informatika</option>
                                    <option>Teknik Elektro</option>
                                    <option>Ilmu Kelautan</option>
                                </select>
                            <label>Fakultas</label>
                                <select class="form-control"  name='fakultas'>
                                <option name='jurusan' value="<?php echo $edit['fakultas'];?>"><?php echo $edit['fakultas'];?></option>
                                    <option>-</option>
                                    <option>Fakultas Teknik</option>
                                    <option>Fakultas Ilmu Sosial dan Politik</option>
                                    <option>Fakultas Keguruan dan Ilmu Pendidikan</option>
                                    <option>Fakultas Ilmu Kelautan dan Perikanan</option>
                                    <option>Fakultas Ekonomi</option>
                                    <option>-</option>
                                </select>
                            <label>Dosen Penasehat Akademik</label>
                                <input class="form-control" name='dosen_pa' value="<?php echo $edit['dosen_pa'];?>">    
                            <label>Tempat Lahir</label>
                                <input class="form-control" name='tempat_lahir' value="<?php echo $edit['tempat_lahir'];?>">
                            <label>Tanggal Lahir</label>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input class="form-control" name='tanggal_lahir' value="<?php echo $edit['tanggal_lahir'];?>" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask >
                            </div>
                            <label>Nomor Induk Kependudukan(KTP)</label>
                              <input class="form-control" name='no_ktp' value="<?php echo $edit['no_ktp'];?>">
                            <div class="form-group">
                              <label>Alamat</label>
                              <textarea class="form-control" name='alamat' value="<?php echo $edit['alamat'];?>" rows="2"></textarea>
                            </div>    
                            <label>No Handphone</label>
                              <input class="form-control" name='no_hp' value="<?php echo $edit['no_hp'];?>">
                            <label>Jenis Kelamin</label>
                                <select class="form-control"  name='kelamin'>
                                <option name='jurusan' value="<?php echo $edit['kelamin'];?>"><?php echo $edit['kelamin'];?></option>
                                    <option>Laki - Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            <label>Agama</label>
                                <select class="form-control"  name='agama'>
                                <option name='jurusan' value="<?php echo $edit['agama'];?>"><?php echo $edit['agama'];?></option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Budha</option>
                                    <option>Hindu</option>
                                </select>
                            <label>Golongan Darah</label>
                              <input class="form-control" name='golongan_darah' value="<?php echo $edit['golongan_darah'];?>">
                            </div>
                        </div>
                    </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button class="btn btn-primary btn-block" type="submit" name="simpan_data"><b>Simpan</b></button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
    </div>
</section>



    </div>
        </ul>
</section>
    </aside>


  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>



<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url(); ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url(); ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    
  });
</script>
</body>
</html>