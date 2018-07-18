<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>dist/img/icon.jpg" class="img-circle" alt="User Image">
      </div>


      <div class="pull-left info">
        <p><?php echo ($this->session->userdata('nama'));?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>


    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Menu Sistem</li>
      <li class="active treeview">
        <a href="<?php echo base_url(); ?>index.php/mahasiswa/c_mahasiswa">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-list-ul"></i> <span>Mata Kuliah</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url(); ?>index.php/auth/datars"><i class="fa fa-save"></i> Pilih Mata Kuliah</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/mahasiswa/c_mahasiswa/krslihat"><i class="fa fa-eye"></i> Lihat Mata Kuliah</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-graduation-cap"></i> <span>Bahan Ajar</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a  href="<?php echo base_url(); ?>index.php/auth/materi"><i class="fa fa-user"></i>Materi</a></li>
          <li><a  href="<?php echo base_url(); ?>index.php/auth/tugas"><i class="fa fa-bank"></i>Tugas</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/auth/quis"><i class="fa fa-calendar-check-o "></i>Quis</a></li>
        </ul>
      </li>

      <li class="treeview">
          <a  href="#">
              <i class="fa fa-key"></i>  <span>Update Password</span>
              <span class="pull-right-container">
              </span>
          </a>
      </li>

      <li class="treeview">
          <a  href="<?php echo site_url('/mahasiswa/c_mahasiswa/logout'); ?>">
              <i class="fa fa-power-off"></i>  <span>Logout</span>
              <span class="pull-right-container">
              </span>
          </a>
      </li>


 </section>
  <!-- /.sidebar -->
</aside>
