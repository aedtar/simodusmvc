 <!--iCheck--> 
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/iCheck/flat/blue.css">
 <!--Morris chart--> 
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/morris/morris.css">
 <!--jvectormap--> 
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
 <!--Date Picker--> 
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datepicker/datepicker3.css">
 <!--Daterange picker--> 
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.css">
 <!--bootstrap wysihtml5 - text editor--> 
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> 


<section class="content">
       <!--Small boxes (Stat box)--> 
      <div class="row">
        <div class="col-lg-3 col-xs-6">
           <!--small box--> 
          <div class="small-box bg-yellow">
            <div class="inner">
                <h3>
                    <?= $all_data; ?>
                </h3>

              <p>Jumlah Total Dummy</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url('monitoring/dummy'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!--./col--> 

        <div class="col-lg-3 col-xs-6">
           <!--small box--> 
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
                    <?= $all_data2; ?></h3>

              <p>Dummy digunakan</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>

<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  

<div class="row">
    <section class="col-lg-7 connectedSortable">
        <div class="nav-tabs-custom">

        <!-- <section class="content">
           <div class="row">-->
        <!--    <div class="box-header">
            </div>-->
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr>
                  <th>Tanggal Update</th>
                  <th>Versi</th>
                  <th>Informasi</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>9 Juli 2018</td>
                    <td>2.3.2</td>
                    <td>tambah menu meter dummy belum kembali</td>
                  <tr>
                  <tr>
                    <td>5 Juli 2018</td>
                    <td>2.2</td>
                    <td>Perbaikan kecepatan database dan tampilan baru tiap update</td>
                  <tr>
                    <td>4 Juli 2018</td>
                    <td>2.1</td>
                    <td>Launching SIMODUS dalam framework Codeigniter</td>
                  </tr>
                </tbody>

              </table>
            </div>
    <!-- /.box-body -->
  </div>
   <!--/.box--> 
</section>  
</div>

<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $("#view_users").addClass('active');
  </script> 
<script>
  $("#dashboard1").addClass('active');
</script>  