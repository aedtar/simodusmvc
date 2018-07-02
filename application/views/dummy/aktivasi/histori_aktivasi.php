 <!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  

 <section class="content">
   <div class="box">
    <div class="box-header">
      <h3 class="box-title">Histori Aktivasi Dummy <?= ucwords($this->session->userdata('unit')); ?></h3>
    </div>
       <a href="<?= base_url('dummy/aktivasi'); ?>" class="btn right btn-warning btn-flat">Aktivasi Baru
       </a>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped ">
        <thead>
        <tr>
          <th>Tanggal Aktivasi</th>
          <th>Nomor Dummy</th>
          <th>Nomor Meter Rusak</th>
          <th>Nomor Meter Baru</th>
          <th>Idpel</th>
          <th>Nama</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($histori as $row): ?>
          <tr>
            <td><?= $row['tgl_aktivasi']; ?></td>
            <td><?= $row['no_dummy']; ?></td>
            <td><?= $row['no_meter_rusak']; ?></td>
            <td><?= $row['no_meter_baru']; ?></td>
            <td><?= $row['id_pelanggan']; ?></td>
            <td><?= $row['nama']; ?></td>
            
          </tr>
          <?php endforeach; ?>
        </tbody>
       
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</section>  

<!--menampilkan waktu operasi-->
Page rendered in
<?php echo $this->benchmark->elapsed_time();?>
 seconds

<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable(
//            {
//                "order":[0,"desc"],
//            }
                );
  });
</script> 
<script>
$("#view_users").addClass('active');
</script>        
