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
        Nilai
        <small>Nilai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Nilai</li>
      </ol>
    </section>



    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <div class="row">
                <div class="col-xs-4">
                  <h3 class="box-title">Daftar Mata Pelajaran </h3>
                </div>
                <div class="col-xs-4 col-xs-offset-4">
                  <div class="dropdown" style="width:100%;">
                    <ul class="dropdown-menu" style="width:100%;">
                      <li style="width:100%;" class="text-center"><a href="#">IPA</a></li>
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
				  <th>Username</th>	
                  <th>Kode Materi</th>
                  <th>Kode Mapel</th>
				  <th>Nilai</th>
                </tr>
                </thead>
                <tbody>
                <?php $n=0; foreach ($datas as $d){ $n++;?>
                  <tr>
                    <td><?php echo $n ?></td>
					 <td><?php echo $d->id_user ?></td>
                    <td><?php echo $d->kd_materi ?></td>
                    <td><?php echo $d->kd_mapel ?></td>
					<td><?php echo $d->nilai ?></td>
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
    <strong>Copyright &copy; 2017 <a href="">Aulia Rahmi</a> & <a href="">Putri Ayu Andira</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
  </div>

  <?php include('script.php') ?>

</body>
</html>
