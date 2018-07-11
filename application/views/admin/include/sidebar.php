<?php // 
$cur_tab = $this->uri->segment(2)==''?'dashboard': $this->uri->segment(2);  
?>  

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url() ?>public/dist/img/lambang.png" class="img-square" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?= ucwords($this->session->userdata('name')); ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- menu -->
        <ul class="sidebar-menu">     
                    <li class="header">Menu Sistem</li>
                    <li id="dashboard" class="treeview">
                      <a href="<?php echo site_url('/admin/dashboard'); ?>">
                        <i class="fa fa-home "></i> <span>Home</span>
                      </a>
                    </li>
                    
        <?php if($this->session->userdata('is_admin') == 4
                ||
                $this->session->userdata('is_admin') == 3): ?>
                    <li id="dashboard" class="treeview">
                      <a href="#">
                        <i class="fa fa-dashboard "></i> <span>Monitoring</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                          <li id="total"><a href="<?= base_url('dummy/monitoring');?>"><i class="glyphicon glyphicon-dashboard"></i> Hari Layanan</a></li>
                        <li id="notkembali"><a href="<?= base_url('dummy/monitoring/belumbalik'); ?>"><i class="glyphicon glyphicon-retweet"></i> Dummy belum kembali</a></li>
                      </ul>
                    </li>
        <?php endif;?>
                    
                    <li id="dashboard" class="treeview">
                      <a href="#">
                        <i class="fa fa-list"></i> <span>Dummy</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li id="pemakaiandummy"><a href="<?= base_url('dummy/pakai'); ?>"><i class="glyphicon glyphicon-plus"></i> Pemakaian Dummy</a></li>
                        <li id="aktivasimeterbaru"><a href="<?= base_url('dummy/aktivasi'); ?>"><i class="glyphicon glyphicon-ok"></i> Aktivasi Dummy</a></li>
                        <li id="meterdummykembali"><a href="<?= base_url('dummy/kembali'); ?>"><i class="glyphicon glyphicon-minus"></i> Dummy Kembali</a></li>
                      </ul>
                    </li>
                
        <?php if($this->session->userdata('is_admin') == 3
                &&
                $this->session->userdata('unit') == 18301
            ): ?>
                    <li id="Entrigantimeter" class="treeview">
                      <a href="#">
                        <i class="glyphicon glyphicon-refresh"></i> <span>Ganti Meter</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li id="pemakaiandummy"><a href="<?= base_url('#'); ?>"><i class="glyphicon glyphicon-arrow-down"></i>Input TO</a></li>
                        <li id="aktivasimeterbaru"><a href="<?= base_url('#'); ?>"><i class="glyphicon glyphicon-folder-open"></i>Data Belum Selesai</a></li>
                        <li id="meterdummykembali"><a href="<?= base_url('#'); ?>"><i class="glyphicon glyphicon-floppy-saved"></i>Input Data Selesai</a></li>
                      </ul>
                    </li>
                    
                    <li id="Entrigantimeter" class="treeview">
                      <a href="#">
                        <i class="glyphicon glyphicon-refresh"></i> <span>Laporan</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li id="pemakaiandummy"><a href="<?= base_url('dummy/tagsus'); ?>"><i class="glyphicon glyphicon-arrow-down"></i>Tagihan Susulan</a></li>
                        <li id="pemakaiandummy"><a href="<?= base_url('#'); ?>"><i class="glyphicon glyphicon-arrow-down"></i>Laporan Bulanan</a></li>
                      </ul>
                    </li>
        <?php endif;?>
                  
                <li class="header">Administrator</li>                
        <?php if($this->session->userdata('is_admin') == 3
                &&
                $this->session->userdata('unit') == 18301            
            ): ?>
                <li class="treeview">
                <a href="#">
                  <i class="glyphicon glyphicon-folder-close"></i> <span>Data Induk Langganan</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li id="pemakaiandummy"><a href="<?= base_url('#'); ?>"><i class="glyphicon glyphicon-cloud-upload"></i>Upload DIL</a></li>
                  <li id="aktivasimeterbaru"><a href="<?= base_url('#'); ?>"><i class="glyphicon glyphicon-cloud-upload"></i>Upload KDDK</a></li>
                  <li id="meterdummykembali"><a href="<?= base_url('#'); ?>"><i class="glyphicon glyphicon-eye-open"></i>Lihat DIL</a></li>
                </ul>
              </li>
        <?php endif;?>

                  <li class="treeview">
                    <a  href="<?php echo site_url('/admin/auth/logout'); ?>">
                        <i class="fa fa-power-off"></i>
                        <span>Logout</span>
                          <span class="pull-right-container">
                        </span>
                    </a>
                </li>
    </ul>
  </section>
</aside>

  
<script>
  $("#<?= $cur_tab; ?>").addClass('active');
</script>
