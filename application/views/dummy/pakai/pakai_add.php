<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Pemakaian Dummy</h3>
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
           
            <?php echo form_open(base_url('dummy/pakai/add'), 'class="form-horizontal"');  ?> 
              <div class="form-group">
                <label for="no_dummy" class="col-sm-2 control-label">Nomor Dummy</label>

                <div class="col-sm-9">
                  <select name="no_dummy" class="form-control">
                    <option disabled selected>-----</option>
                    <?php foreach($dummy as $row){?>
                    <option value="<?php echo $row['no_dummy']; ?>"><?php  echo $row['no_dummy']; ?></option>
                    <?php } ?>      
                  </select>
                </div>
              </div>
            
              <div class="form-group">
                <label for="std_dummy" class="col-sm-2 control-label">Stand Dummy</label>
                <div class="col-sm-9">
                  <input type="number" name="std_dummy" class="form-control" id="std_dummy" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="alasan_rusak" class="col-sm-2 control-label">Alasan Rusak</label>

                <div class="col-sm-9">
                  <select name="alasan_rusak" class="form-control">
                    <option disabled selected>-----</option>
                    <option value="1">Token tidak dapat dimasukkan</option>
                    <option value="2">Sisa kredit pada kWh meter hilang/bertambah saat listrik padam</option>
                    <option value="3">Kerusakan pada keypad</option>
                    <option value="4">LCD mati/rusak</option>
                    <option value="5">kWh Meter rusak (akibat petir/terbakar)</option>
                    <option value="6">Sisa kredit tidak bertambah saat kredit baru dimasukkan</option>
                    <option value="7">Baut tutup terminal patah</option>
                    <option value="8">Tegangan dibawah 180V tidak bisa hidup</option>
                    <option value="9">Micro switch rusak / tidak keluar tegangan</option>
                    <option value="10">ID meter pada display dan nameplate tidak sama</option>
                    <option value="11">Sisa kredit tidak berkurang</option>
                    <option value="12">Display overload tanpa beban</option>
                    <option value="13">Terminal kWh meter rusak</option>
                    <option value="14">Meter periksa/tutup dibuka lampu tetap nyala</option>
                    <option value="15">Timbul rusak</option>
                    <option value="16">kWh minus</option>
                    <option value="17">kWh bertambah</option>
                    <option value="18">Lain-lain</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="no_meter_rusak" class="col-sm-2 control-label">Nomor Meter Rusak</label>
                <div class="col-sm-9">
                  <input type="number" name="no_meter_rusak" class="form-control" id="no_meter_rusak" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="ptgs_pasang" class="col-sm-2 control-label">Petugas Pasang</label>
                <div class="col-sm-9">
                  <input type="text" name="ptgs_pasang" class="form-control" id="ptgs_pasang" placeholder="">
                </div>
              </div>
            
              <div class="form-group">
                <label for="sisa_pulsa" class="col-sm-2 control-label">Sisa Pulsa</label>
                <div class="col-sm-9">
                  <input type="number" name="sisa_pulsa" class="form-control" id="sisa_pulsa" placeholder="">
                </div>
              </div>
            
              <div class="form-group">
                <label for="no_hp_plg" class="col-sm-2 control-label">Mobile No</label>
                <div class="col-sm-9">
                  <input type="number" name="no_hp_plg" class="form-control" id="no_hp_plg" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="nama_cc" class="col-sm-2 control-label">Nama Call Center</label>
                <div class="col-sm-9">
                  <input type="text" name="nama_cc" class="form-control" id="nama_cc" placeholder="">
                </div>
              </div>
            
              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="SIMPAN" class="btn btn-app.save pull-right">
                </div>
              </div>
            <?php echo form_close( ); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section> 


<script>
$("#add_user").addClass('active');
</script>    