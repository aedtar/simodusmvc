<!DOCTYPE html>
<html>
<head>
 <?php include('link.php') ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('header.php') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('sidebar.php') ?>



 <?php
echo form_open('auth/data_krs');
?>

<?php
echo form_hidden('id',$this->uri->segment(3));
?>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rencana Studi
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">Rencana Studi</a></li>
        <li class="active">Input Data Rencana Studi</li>
      </ol>
    </section>



<!--PEMBATASAN-->
    <!-- Main content -->
    <section class="content">
      <!-- COLOR PALETTE -->
     <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Lihat Kartu Rencana Studi</h3>
        </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Kode Mk</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Dosen</th>
                    <th>Ruang</th>
                    <th>Jam</th>
                    <th>Semester</th>
                    <th>Aksi</th>
                </tr>

                </thead>
                <div class="table-responsive">
                      <thead>
                                <?php
                                    $n=0;
                                     $sks=0;
                                        foreach ($data as $c){ $n++; ?>
                                        <?php $sks=$sks+$c->sks; ?>
                                            <tr>
                                            <td><?php echo $c->makul_id; ?></td>
                                            <td><?php echo $c->nama_makul; ?></td>
                                            <td><?php echo $c->sks; ?></td>
                                            <td><?php echo $c->dosen; ?></td>
                                            <td><?php echo $c->ruang; ?></td>
                                            <td><?php echo $c->jam; ?></td>
                                            <td><?php echo $c->semester; ?></td>

                                           <td>
                                           <a width="10px"><?php echo anchor('auth/deletekrs/'.$c->id_jadwal, '<i class="glyphicon glyphicon-remove"></i> Cancel
                                            ', array('class'=>'delete', 'onclick'=>"return konfirmasi();")); ?>
                                           </a>
                                           </td>


                                <?php } ?>
                      </thead>

                  </table>
            </div>
      </div>





<!-- KRS 2 -->
<section>
            <!-- COLOR PALETTE -->
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Input Kartu Rencana Studi</h3>
        </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Ambil</th>
                    <th>Kode Mk</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Dosen</th>
                    <th>Ruang</th>
                    <th>Jam</th>
                    <th>Semester</th>
                </tr>

                </thead>
                <div class="table-responsive">
                      <thead>

                                <?php
                                    $n=0;
                                        foreach ($makuls as $c){ $n++; ?>
                                            <tr>
                                            <td>
                                           <a class="btn btn-primary" onclick='ambil($c->id_jadwal)'  href="<?php echo base_url();?>index.php/auth/data_krs/?pilih=<?php echo $c->id_jadwal;?>">
                                           <i class="glyphicon glyphicon-download-alt"></i>
                                           </a>
                                            <td><?php echo $c->makul_id; ?></td>
                                            <td><?php echo $c->nama_makul; ?></td>
                                            <td><?php echo $c->sks; ?></td>
                                            <td><?php echo $c->dosen; ?></td>
                                            <td><?php echo $c->ruang; ?></td>
                                            <td><?php echo $c->jam; ?></td>
                                            <td><?php echo $c->semester; ?></td>
                                            </tr>
                                <?php } ?>

                      </thead>

                  </table>
            </div>
      </div>
  </section>
</div>



  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>



<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 if (tanya == true) return true;
 else return false;
 }
 </script>


<script type="text/javascript">

function ambil(id_jadwal)
{
    $.ajax({
  url:"http://localhost/sipaa/index.php/auth/datars/",
  data:"id_jadwal=" + id_jadwal,
  success: function(html)
  {
            $("#hide"+id_jadwal).hide(300);
  }
  });

}
</script>


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
</body>
</html>
