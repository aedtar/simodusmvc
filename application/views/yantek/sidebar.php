<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>dist/img/lambang.png" class="img-square" alt="User Image">
      </div>


      <div class="pull-left info">
        <p><?php echo ($this->session->userdata('name'));?></p>
        <a href="#">
          <i class="fa fa-circle text-success"></i><span><?php echo ($this->session->userdata('unit'));?></span></a>
      </div>
    </div>


    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Menu Sistem</li>
      <li class="active treeview">
        <a href="<?php echo base_url(); ?>index.php/c_Yantek/dashboard">
          <i class="fa fa-home"></i> <span>Home</span>
        </a>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="glyphicon glyphicon-list"></i> <span>Dummy</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a  href="<?php echo base_url(); ?>index.php/c_Yantek/lihat_pemdum"><i class="fa fa-calendar-check-o"></i>Pemakaian Dummy</a></li>
          <li><a  href="<?php echo base_url(); ?>index.php/c_Yantek/lihat_tugas"><i class="glyphicon glyphicon-ok"></i>Dummy Kembali</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/c_Yantek/lihat_Ujian"><i class="glyphicon glyphicon-file"></i>Laporan</a></li>
        </ul>
      </li>
		
		  <li class="header">Administrator</li>


      <li class="treeview">
        <a data-toggle="modal" data-target="#reset-pass"><i class="fa fa-key"></i>Ubah Password</a>
              <span class="pull-right-container">
              </span>
          </a>
      </li>

      <li class="treeview">
          <a  href="<?php echo site_url('/c_Yantek/logout'); ?>">
              <i class="fa fa-power-off"></i>  <span>Logout</span>
              <span class="pull-right-container">
              </span>
          </a>
      </li>


 </section>
  <!-- /.sidebar -->
</aside>
<!-- Modal -->
              <div id="reset-pass" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                      <!-- konten modal-->
                      <div class="modal-content">
                      <form action="<?php echo base_url('index.php/auth/reset_pass');?>" role="form" enctype="multipart/form-data" method="post">
                          <!-- heading modal -->
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Ubah Password</h4>
                          </div>
                          <!-- body modal -->
                          <div class="modal-body">

                          <div class="form-group">
                              <label>Password Baru</label>
                              <input type="password" class="form-control" name="password" placeholder="Password Baru ...">
                          </div>

                          </div>
                          <!-- footer modal -->
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>

                      </form>
                      </div>
                  </div>
              </div><!-- Modal -->
