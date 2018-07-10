

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url('admin');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SIMODUS 2</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIMODUS 2</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <!-- <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs"><?= ucwords($this->session->userdata('name')); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="<?= base_url() ?>public/dist/img/lambang.png" class="img-square" alt="User Image">
                      <p><?php echo ($this->session->userdata('name'));?>
                        <small><?php echo ($this->session->userdata('user'));?></small>
                      </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="<?= site_url('#'); ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
        </div> -->
    </nav>
  </header>
 