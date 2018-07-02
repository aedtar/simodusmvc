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
          <th>Nomor Dummy</th>
          <th>Nomor Meter Rusak</th>
          <th>Hari Layanan</th>
          <th>Tanggal Pakai</th>
          <th>Tanggal Aktivasi</th>
          <th>Tanggal Kembali</th>
          <th>Hari Layanan</th>
          <th>Posko</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($all_data as $row): ?>
          <tr>
            <td><?= $row['no_dummy']; ?></td>
            <td><?= $row['no_meter_rusak']; ?></td>
            <td><?= 
                round
                    (
                        (
                            (
                                strtotime
                                    (date("Y-m-d H:i:s"))
                                    - 
                                strtotime
                                    (date("Y-m-d H:i:s",strtotime(
                                            $row['tgl_pakai']
                                            )))
                            )
                            /86400
                        )
                    ,1
                    )
            ; 
            ?></td>
            <td><?= date("d-m-Y",strtotime($row['tgl_pakai'])); ?></td>
            <td><?= (
                    ($row['tgl_aktivasi']==NULL)
                    )?'':
                date("d-m-Y",strtotime($row['tgl_aktivasi']))
            ; ?></td>
            <td><?= (
                    ($row['tgl_kembali']==NULL)
                    )?'':
                date("d-m-Y",strtotime($row['tgl_kembali']))
            ; ?></td>
            <td><?= (
                    ($row['tgl_kembali']==NULL)
                    )?'':
                round
                    (
                        (
                            (
                                strtotime
                                    (date("Y-m-d H:i:s"))
                                    - 
                                strtotime
                                    (date("Y-m-d H:i:s",strtotime(
                                            $row['tgl_kembali']
                                            )))
                            )
                            /86400
                        )
                    ,1
                    )
            ; ?></td>
            <td><?= $row['posko']; ?></td>
            
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
