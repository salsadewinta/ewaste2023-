<?php
session_start();
if (!isset($_SESSION["username"])) 
{
  echo "Anda harus login dulu <br><a href='..\login.php'>Klik disini</a>";
  exit;
}
$username=$_SESSION["username"];
include "koneksi.php";
$sql = mysqli_query($kon, "SELECT * FROM antar_jemput Where pesanan = 'delay'") or die(mysqli_error($kon));
$data= mysqli_num_rows($sql);

$sql1 = mysqli_query($kon, "SELECT * FROM antar_jemput Where pesanan = 'konfirmasi'") or die(mysqli_error($kon));
$data1= mysqli_num_rows($sql1);

$sql2 = mysqli_query($kon, "SELECT * FROM antar_jemput Where pesanan = 'selesai'") or die(mysqli_error($kon));
$data2= mysqli_num_rows($sql2);

$sql3 = mysqli_query($kon, "SELECT * FROM faktur_kompos Where statuss = 'delay'") or die(mysqli_error($kon));
$data3= mysqli_num_rows($sql3);

$sql4 = mysqli_query($kon, "SELECT * FROM faktur_kompos Where statuss = 'konfirmasi'") or die(mysqli_error($kon));
$data4= mysqli_num_rows($sql4);

$sql5 = mysqli_query($kon, "SELECT * FROM faktur_kompos Where statuss = 'selesai'") or die(mysqli_error($kon));
$data5= mysqli_num_rows($sql5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Waste</title>

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

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#.html" class="nav-link active">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="e-commerce.php" class="nav-link">ECommerce</a>
        </li>   
      </ul>
    <div class="container-fluid">
      <div class="col-sm-12">
        <ul class="navbar-nav float-sm-right">
          <li class="nav-item">
            <div class="info">
              <a href="#" class="nav-link"><b>Electronic Waste</b></a>
            </div>
          </li>
          <li class="nav-item float-sm-right">
            <div class="image">
            <img src="dist/img/g.png" class="img-circle elevation-2" width="35" alt="User Image">
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                  </button>    
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                  </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </nav>
<!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-success elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username']?></a>
        </div>
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="beranda.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
            Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="ar.php" class="nav-link">
            <i class="nav-icon fas fa-truck"></i>
              <p>
              Antar Jemput
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="fk.php" class="nav-link">
            <i class="nav-icon fas fa-handshake"></i>
              <p>
              ECommerce
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../logout.php" class="btn btn-rounded btn-danger btn-block" role="button">
            LogOut
            </a>
        </li>
        </ul>
      </nav>
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
          <div class="col-15">
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
            <!-- Widget: user widget style 1 -->
            <div class="row justify-content-center">
            <div class="col-md-6">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-warning">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="dist/img/avatar5.png" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username"><?php echo $_SESSION['username']?></h3>
                <h5 class="widget-user-desc">Petugas Pengangkutan</h5>
              </div>
              <div class="col-12 col-sm-12">
                <ul class="nav flex-column">
                    <li class="nav-item">
                    <a href="#" class="nav-link">
                    <center>Antar Jemput</center>   
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Pesanan Masuk <span class="float-right badge bg-primary"><?=$data;?></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Pesanan Terkonfirmasi<span class="float-right badge bg-info"><?=$data1;?></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Pesanan Selesai <span class="float-right badge bg-success"><?=$data2;?></span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-sm-12">
                <ul class="nav flex-column">
                    <li class="nav-item">
                    <a href="#" class="nav-link">
                    <center>E-commerce</center>   
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Pesanan Masuk <span class="float-right badge bg-primary"><?=$data3;?></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Pesanan Terkonfirmasi<span class="float-right badge bg-info"><?=$data4;?></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Pesanan Selesai <span class="float-right badge bg-success"><?=$data5;?></span>
                    </a>
                  </li>
                </ul>              
              </div>
            </div>
            <!-- /.widget-user -->
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
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <center>
    <strong>Copyright &copy; 2022 <a href="https://adminlte.io">E_WASTE</a>.</strong>
    All rights reserved.<b>Version</b> 1.0
    </center>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
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
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Page specific script -->
</body>
</html>
