<!DOCTYPE html>
<html>
<head>
  <title>SIPAA | Data Jadwal</title>
<?php include('link.php') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include('header.php') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('sidebar.php') ?>

  <?php
echo form_open('dosen/c_dosen/simpanjadwal');
?>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Jadwal
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">Data Login</a></li>
        <li class="active">Tambah Data</li>
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
              <h3 class="box-title">Tambah Jadwal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="row">
                    <div class="col-lg-12">
                       <div class="form-group">
                            <label>Makul_Id</label>
                                <select class="form-control"  name='makul_id'>
                                    <option>T2101</option>
                                    <option>T2102</option>
                                    <option>T2204</option>
                                    <option>T2205</option>
                                    <option>T2305</option>
                                </select><br>
                            <label>Nama Mata Kuliah</label>
                                <input class="form-control" name='nama_makul'>
                            <label>Dosen</label>
                                <input class="form-control" name='dosen'>
                            <label>Ruang</label>
                                <select class="form-control"  name='ruang'>
                                    <option>R1</option>
                                    <option>R2</option>
                                    <option>R6</option>
                                    <option>LAB1</option>
                                    <option>LAB2</option>
                                </select><br>
                            <label>Hari/Jam</label>
                                <input class='form-control' name='jam'>
                            <label>SKS</label>
                                <select class="form-control"  name='sks'>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select><br>
                            <label>Semester</label>
                                <select class="form-control"  name='semester'>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select><br>
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

<?php include('script.php') ?>
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
