 <!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  

 <section class="content">
   <div class="box">
    <div class="box-header">
      <h3 class="box-title">Pengembalk Dummy <?= ucwords($this->session->userdata('unit')); ?></h3>
    </div>
       <a href="<?= base_url('dummy/kembali/add'); ?>" class="btn btn-info btn-flat
                    <?=(
                            $this->session->userdata('is_admin') == 3                        
                        )?'':'disabled'
                    ?>
                   ">Tambah Data
       </a>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped ">
        <thead>
        <tr>
          <th>Tanggal Kembali</th>
          <th>Nomor Dummy</th>
          <th>Stand Bongkar</th>
          <th>Lokasi Posko</th>
          <th>Call Center</th>
          <th style="width: 150px;" class="text-right">Tindakan</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($all_users as $row): ?>
          <tr>
            <td><?= $row['tgl_kembali']; ?></td>
            <td><?= $row['no_dummy']; ?></td>
            <td><?= $row['stand']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nama_cc']; ?></td>
            <td class="text-right">
                <a href="<?= base_url('dummy/kembali/edit/'.$row['id_meter']); ?>" class="btn btn-warning btn-flat
                    <?=(
                            $this->session->userdata('is_admin') == 3                        
                        )?'':'disabled'
                    ?>
                   ">Edit
                </a>
                <a href="<?= base_url('dummy/kembali/del/'.$row['id_meter']); ?>" class="btn btn-danger btn-flat 
                    <?=(
                            $this->session->userdata('is_admin') == 3                        
                        )?'':'disabled'
                    ?>
                    ">Delete
                </a>
            </td>
            
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
