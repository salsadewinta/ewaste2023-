<?php
    session_start();
    if (!isset($_SESSION["username"])) 
    {
      echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
      exit;
    }
    include "koneksi.php";
    $username=$_SESSION["username"];
    $select = mysqli_query($kon, "SELECT * FROM tb_user WHERE username='$_SESSION[username]'") or die(mysqli_error($kon));
    $data = mysqli_fetch_assoc($select);      
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-waste | Home Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="beranda.php" class="nav-link">Beranda</a>
        <div class="user-panel mt-1 pb-1 mb-1 d-flex">
      </li>
    </ul>
    <div class="container-fluid">
      <div class="col-sm-12">
        <ul class="navbar-nav float-sm-right">
          <li class="nav-item float-sm-right">
            <div class="info">
              <a href="beranda.php" class="nav-link active">E-Waste</a>
            </div>
          </li>
          <li class="nav-item float-sm-right">
          <div class="image">
            <img src="dist/img/g.png" class="img-circle elevation-2" alt="e-waste" width="35">
          </div>
          </li>
        </ul>  
      </div>
      </div>
  </div>
  
  <aside class="main-sidebar sidebar-dark-success elevation-4">
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/userprofile1.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block"><?php echo $_SESSION['username']?></a>
          <a href="#" class="d-block"></a>
          <div class="rating">
          <p class="text-warning"><i class="nav-icon fas fa-coins fa-fw"></i>100</p>
          </div>
        </div>
      </div>
      
      <div class="form-inline btn btn-rounded">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar bg-secondary" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-rounded btn-sidebar bg-secondary">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>


      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview"></ul>
          </li>
          <li class="nav-item">
            <a href="beranda.php" class="nav-link">
              <i class="nav-icon fas fa-home fa-fw"></i>
              <p>Beranda</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="antarjemput.php" class="nav-link active">
              <i class="nav-icon fas fa-truck fa-fw"></i>
              <p>Antar-Jemput</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="ecommerce.php" class="nav-link">
              <i class="nav-icon fas fa-recycle fa-fw"></i>
              <p>E-Commerce</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="akun.php" class="nav-link">
              <i class="nav-icon fas fa-user fa-fw"></i>
              <p>Akun</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <tr>
      <td>
          <center><a href="../logout.php" type="button" class="btn btn-rounded btn-danger">Logout</a></center>
      </td>
    </tr>

  </aside>


  <div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
            <div class="form-inline btn btn-rounded">
              </div>
              <div class="card card-success">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">

                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                      <div class="card-body">
                      <center>
                      <h2>
                      <?php
                            $sqlCmd = sprintf("UPDATE tb_user SET koin = koin + 50 WHERE username = '{$_SESSION['username']}'");
                      ?>
                      <p>Selamat Anda Mendapatkan</p>
                      <p class="text-warning"><i class="nav-icon fas fa-coins fa-fw"></i>50</p>
                      <a href="simpan_koin.php" class="btn btn-rounded btn-primary" role="button">
                        Selsesai
                      </a>
                      </center>
                      </div>
                    </div>
              </div>
            <div class="card-body">
              <div>
                <div class="mb-2">
                  <div class="float-right">
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<a href="orderlinejemput.html">
    <div class="card-footer">
      <button class="btn btn-primary">Detail</button>
    </div>
  </a>
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://adminlte.io">E-waste</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
