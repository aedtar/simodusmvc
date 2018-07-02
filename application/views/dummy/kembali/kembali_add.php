<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Pengembalian Dummy</h3>
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
           
            <?php echo form_open(base_url('dummy/kembali/add'), 'class="form-horizontal"');  ?> 
              <div class="form-group">
                <label for="no_dummy" class="col-sm-2 control-label">Pilih Nomor Dummy</label>

                <div class="col-sm-9">
                    <select name="id_meter" class="form-control">
                        <option disabled selected>-----</option>
                        <?php foreach($dummy as $row){?>    
                        <option value="<?php echo $row['id_meter']?>" >
                            <?php  echo $row['no_dummy']?> </option>
                        <?php } ?>  
                    </select>
                </div>
                
                
                
                
              </div>
            
              <div class="form-group">
                <label for="stand" class="col-sm-2 control-label">Stand Dummy</label>
                <div class="col-sm-9">
                  <input type="text" name="stand" class="form-control" id="stand" placeholder="">
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