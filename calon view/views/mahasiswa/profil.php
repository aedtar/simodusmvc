<!DOCTYPE html>
<html>
<head>
  <title>Elearning | Dashboard</title>
  <?php include('link.php') ?> <!-- ini link meta dan css -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style media="screen">
  .border-hidden{
  border: none !important;
  }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('header.php'); ?> <!-- manggil header (navbar nya) -->

  <?php include('sidebar.php'); ?>  <!-- manggil sidebar (menu kiri nya) -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profil
        <small>My Account</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">profil</li>
      </ol>
    </section>



    <section class="content">

      <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>dist/img/icon.jpg" alt="User profile picture">

            <h3 class="profile-username text-center">Muhammad Sarimin</h3>

            <p class="text-muted text-center">Web Programmer</p>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                <p class="text-muted text-center">
                  UMRAH<br>Universitas Maritim Raja Ali Haji
                </p>
              </li>
              <li class="list-group-item">
                <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                <p class="text-muted text-center">Jalan Citra, Tanjungpinang, KEPRI, Indonesia</p>
              </li>
              <li class="list-group-item">
                <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

                <p class="text-center">
                  <span class="label label-danger">UI Design</span>
                  <span class="label label-success">Coding</span><br>
                  <span class="label label-info">Javascript</span>
                  <span class="label label-warning">PHP</span>
                </p>
              </li>
            </ul>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#biodata" data-toggle="tab">Biodata</a></li>
            <li><a href="#kontak" data-toggle="tab">kontak</a></li>
            <li><a href="#settings" data-toggle="tab">Setting</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="biodata">
              <table class="table">
                            <tr>
                              <td>Nama</td>
                              <td>:</td>
                              <td>Muhammad Sarimin</td>
                            </tr>
                            <tr>
                              <td>NIM</td>
                              <td>:</td>
                              <td>150155201030</td>
                            </tr>
                            <tr>
                              <td>tempat tanggal lahir</td>
                              <td>:</td>
                              <td>Alai, 6 Januari 1998</td>
                            </tr>
                            <tr>
                              <td>Agama</td>
                              <td>:</td>
                              <td>Islam</td>
                            </tr>
                            <tr>
                              <td>Golongan Darah</td>
                              <td>:</td>
                              <td>O</td>
                            </tr>
              </table>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="kontak">
              <ul>
              <li class="list-group-item">
                <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                <p>Ini Isi nya status Ini Isi nya status Ini Isi nya status Ini Isi nya status</p>
              </li>
            </ul>
            </div>
            <!-- /.tab-pane -->

            <div class="tab-pane" id="settings">
              <form class="form-horizontal">
                <div class="form-group">
                  <label for="nomor_hp" class="col-sm-2 control-label">Nomor Hp</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="nomor_hp" placeholder="Nomor Hp">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="wa" class="col-sm-2 control-label">WhatsApp</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="wa" placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>

    </section>
    <!-- /.content -->
  </div>



  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; 2017 <a href="">Muhammad Sarimin</a> & <a href="">Ade Putra NS</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
  </div>
<!-- jQuery 2.2.3 -->
<?php include('script.php') ?>
</body>
</html>
