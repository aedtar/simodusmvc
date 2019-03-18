<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Ganti Meter</h3>
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
           
            <?php echo form_open(base_url('gantimeter/gantimeter/add'), 'class="form-horizontal"');  ?> 
 
              <div class="form-group">
                <label for="tanggal_ganti" class="col-sm-2 control-label">Tanggal Ganti</label>
                <div class="col-sm-9">
                    <input type="date" name="tanggal_ganti" class="form-control" id="tanggal_ganti" placeholder="">
                </div>
              </div>
            
              <div class="form-group">
                <label for="idpel" class="col-sm-2 control-label">Idpel</label>
                <div class="col-sm-9">
                  <input type="number" name="idpel" class="form-control" id="idpel" placeholder="">
                </div>
              </div>
            
              <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-9">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-9">
                  <input type="text" name="alamat" class="form-control" id="alamat" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="tarif" class="col-sm-2 control-label">Tarif</label>
                <div class="col-sm-9">
                  <input type="text" name="tarif" class="form-control" id="tarif" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="daya" class="col-sm-2 control-label">Daya</label>
                <div class="col-sm-9">
                  <input type="number" name="daya" class="form-control" id="daya" placeholder="">
                </div>
              </div>
            
              <div class="form-group">
                <label for="alasan_ganti" class="col-sm-2 control-label">Alasan Ganti</label>

                <div class="col-sm-9">
                  <select name="alasan_ganti" class="form-control">
                    <option disabled selected>-----</option>
<!--                    <option value="1">Token tidak dapat dimasukkan</option>
                    <option value="2">Sisa kredit pada kWh meter hilang/bertambah saat listrik padam</option>
                    <option value="3">Kerusakan pada keypad</option>
                    <option value="4">LCD mati/rusak</option>-->
                    <option value="5">kWh Meter rusak (akibat petir/terbakar)</option>
<!--                    <option value="6">Sisa kredit tidak bertambah saat kredit baru dimasukkan</option>
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
                    <option value="17">kWh bertambah</option>-->
                    <!--<option value="18">Lain-lain</option>-->
                    <option value="19">AMRISASI</option>
                    <option value="20">Macet/error</option>
                    <option value="21">Buram</option>
                    <option value="100">Lain-lain</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="no_meter_lama" class="col-sm-2 control-label">Nomor Meter Lama</label>
                <div class="col-sm-9">
                    <input type="text" name="no_meter_lama" class="form-control" id="no_meter_lama" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="stand_bongkar" class="col-sm-2 control-label">Stand Bongkar</label>
                <div class="col-sm-9">
                  <input type="number" name="stand_bongkar" class="form-control" id="stand_bongkar" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="no_meter_baru" class="col-sm-2 control-label">Nomor Meter Baru</label>
                <div class="col-sm-9">
                  <input type="number" name="no_meter_baru" class="form-control" id="no_meter_baru" placeholder="">
                </div>
              </div>
            
              <div class="form-group">
                <label for="ptgs_ganti" class="col-sm-2 control-label">Petugas Ganti</label>
                <div class="col-sm-9">
                    <input type="text" name="ptgs_ganti" class="form-control" id="ptgs_ganti" placeholder="">
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