<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Detail Gangguan Meter berdasarkan tanggal aktivasi meter </h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
          <?php if(isset($msg) || validation_errors() !== ''): ?>
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                  <?= validation_errors();?>
                  <?= isset($msg)? $msg: ''; ?>
              </div>
            <?php endif; ?>
           
            <?php echo form_open(base_url('dummy/laporan/add'), 'class="form-horizontal"');  ?> 
              <div class="form-group col-lg-6">
                <label for="tgl_awal" class="col-sm-6 control-label">Tanggal Awal Aktivasi</label>
                <!--<div class="col-sm-9">-->
                    <input type="date" name="tgl_awal"  class="form-control" id="tgl_awal" placeholder="">
                <!--</div>-->
              </div>
            
            
            
              <div class="form-group col-lg-6">
                <label for="tgl_akhir" class="col-sm-6 control-label">Tanggal Akhir Aktivasi</label>

                <!--<div class="col-sm-9">-->
                    <input type="date" name="tgl_akhir" class="form-control" id="tgl_akhir" placeholder="">
                <!--</div>-->
              </div>
            
            
              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Cari" class="btn btn-app.save pull-right">
                </div>
              </div>
            <?php echo form_close( ); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section> 


<!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  

 <section class="content">
   <div class="box">
<!--    <div class="box-header">
      <h3 class="box-title"> Detail Gangguan <?= ucwords($this->session->userdata('unit')); ?></h3>
    </div>-->
       <a href="<?= base_url('dummy/laporan/exportbulanan/data1'); ?>
          " class="btn btn-info btn-flat
                    <?=(
                            $this->session->userdata('is_admin') == 4 
                            ||
                            $this->session->userdata('is_admin') == 3                           
                        )?'':'disabled'
                    ?>
                   ">Export Excel
       </a>
       
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped ">
        <thead>
        <tr>
          <th>Idpel</th>
          <th>No Meter Rusak</th>
          <th>No Meter Baru</th>
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
            <td><?= (
                    ($row['tgl_pakai']==NULL)
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
                                                        $row['tgl_pakai']
                                                        )))
                                        )
                                        /86400
                                    )
                                ,1
                                )
            ; 
            ?></td>
            <td><?= (
                    ($row['tgl_pakai']==NULL)
                    )?'':
            date("d-m-Y",strtotime($row['tgl_pakai']))
            ; ?></td>
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
<?php echo 
$this->benchmark->elapsed_time();?>
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


<script>
$("#add_user").addClass('active');
</script>    