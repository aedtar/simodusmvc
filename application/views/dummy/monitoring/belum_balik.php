 <!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  

 <section class="content">
   <div class="box">
    <div class="box-header">
      <h3 class="box-title">Monitoring Dummy <?= ucwords($this->session->userdata('unit')); ?></h3>
    </div>
       
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped ">
        <thead>
        <tr>
          <th>Tanggal Rusak</th>
          <th>Nomor Dummy</th>
          <th>Nomor Meter Rusak</th>
          <th>Nomor Meter Baru</th>
          <th>Nomor HP Pelanggan</th>
          <th>Petugas Pasang Dummy</th>
          <th>Tanggal AKtivasi</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($all_data as $row): ?>
          <tr>
            <td><?= $row['tgl_pakai']; ?></td>
            <td><?= $row['no_dummy']; ?></td>
            <td><?= $row['no_meter_rusak']; ?></td>
            <td><?= $row['no_meter_baru']; ?></td>
            <td><?= $row['no_hp_plg']; ?></td>
            <td><?= $row['ptgs_pasang']; ?></td>
            <td><?= $row['tgl_aktivasi']; ?></td>
            
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
            {
                "order":[0,"asc"],
            }
                );
  });
</script> 
<script>
$("#view_users").addClass('active');
</script>        
