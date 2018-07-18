<!DOCTYPE html>
<html>
<head>
  <title>SIMODUS | HOME</title>
  <?php include('link.php') ?> <!-- ini link meta dan css -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style media="screen">
  .border-hidden{
  border: none !important;
  }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('header.php'); ?> <!-- manggil header (navbar nya) -->

  <?php include('sidebar.php'); ?>  <!-- manggil sidebar (menu kiri nya) -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>



    <section class="content">

      <div class="row">
    <div class="col-md-12 connectedSortable">
      <div class="box box-primary">

        <div class="box-header">
          <i class="fa fa-comments-o"></i>
          <h3 class="box-title">Judul Baru</h3>
          <div class="pull-right box-tools">
            <button type="button" class="btn btn-success btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
            <i class="fa fa-minus"></i></button>
          </div>
        </div>

        <div class="box-body chat">
          <form>
            <input type="text" class="form-control border-hidden" placeholder="Judul permasalahan...">
            <hr style="margin-top:0px;">
            <textarea class="form-control border-hidden" rows="3" style="resize:none" placeholder="isi permasalahan..."></textarea>
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-folder-open text-blue"></span></button>
                <button type="button" class="btn btn-default btn-sm"><span class="fa fa-photo text-blue"></span></button>
              </div>
            </form>
          <div class="box-footer">
            <div class="pull-right">
              <button type="button" class="btn btn-primary btn-sm">Kirim</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

    </section>
    <!-- /.content -->
  </div>



  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; 2018 <a href="">Putri Ayu Andira</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
  </div>

<?php include('script.php') ?>
<!-- jQuery 2.2.3 -->
</body>
</html>
