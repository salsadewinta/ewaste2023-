<?php
session_start();
if (!isset($_SESSION["username"])) 
{
  echo "Anda harus login dulu <br><a href='..\login.php'>Klik disini</a>";
  exit;
}
$username=$_SESSION["username"];
include "koneksi.php";
$sql4 = mysqli_query($kon, "SELECT * FROM antar_jemput Where pesanan = 'delay'") or die(mysqli_error($kon));
$data4 = mysqli_num_rows($sql4);

$sql10 = mysqli_query($kon, "SELECT * FROM antar_jemput Where pesanan = 'cancel'") or die(mysqli_error($kon));
$data10 = mysqli_num_rows($sql10);

$sql5 = mysqli_query($kon, "SELECT * FROM antar_jemput Where pesanan = 'konfirmasi'") or die(mysqli_error($kon));
$data5= mysqli_num_rows($sql5);

$sql6 = mysqli_query($kon, "SELECT * FROM antar_jemput Where pesanan = 'selesai'") or die(mysqli_error($kon));
$data6= mysqli_num_rows($sql6);

$sql7 = mysqli_query($kon, "SELECT * FROM faktur_kompos Where statuss = 'delay'") or die(mysqli_error($kon));
$data7= mysqli_num_rows($sql7);

$sql11 = mysqli_query($kon, "SELECT * FROM faktur_kompos Where statuss = 'cancel'") or die(mysqli_error($kon));
$data11= mysqli_num_rows($sql11);

$sql8 = mysqli_query($kon, "SELECT * FROM faktur_kompos Where statuss = 'konfirmasi'") or die(mysqli_error($kon));
$data8= mysqli_num_rows($sql8);

$sql9 = mysqli_query($kon, "SELECT * FROM faktur_kompos Where statuss = 'selesai'") or die(mysqli_error($kon));
$data9= mysqli_num_rows($sql9);

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
  <--
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
          <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
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
            <a href="user.php" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
              User
              </p>
            </a>
              </li>
          <li class="nav-item">
            <a href="kompos.php" class="nav-link">
              <i class="nav-icon fas fa-leaf"></i>
              <p>
              Kompos
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
            <i class="nav-icon fas  fa-shopping-cart"></i>
              <p>
              E-Commerce
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-5">
          </div><!-- /.col -->
          <div class="col-sm-7">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Beranda</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        <section class="content">
        <div class="card card-success">
        <div class="card-header">
        <h3 class="card-title">Beranda</h3>
        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
        <i class="fas fa-times"></i>
        </button>
        </div>
        </div>
        <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
         <!-- Info boxes -->
         <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>
              <?php
              include "koneksi.php";
              $sql = mysqli_query($kon, "SELECT * FROM tb_user") or die(mysqli_error($kon));
              $data= mysqli_num_rows($sql);
              ?>
              <div class="info-box-content">
                <ul class="nav flex-column">
                          <li class="nav-item bg-success">
                          <a href="#" class="nav-link">
                          <center>Data User</center>   
                          </a>
                        </li>
                        <?php
                      include "koneksi.php";
                      $sql12 = mysqli_query($kon, "SELECT * FROM tb_user t where t.role='admin' ") or die(mysqli_error($kon));
                      $data12= mysqli_num_rows($sql12);
                      ?>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            Admin <span class="float-right badge bg-primary"><?=$data12;?></span>
                          </a>
                        </li>
                        <?php
                        include "koneksi.php";
                        $sql13 = mysqli_query($kon, "SELECT * FROM tb_user t where t.role='pelanggan' ") or die(mysqli_error($kon));
                        $data13 = mysqli_num_rows($sql13);
                        ?>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            Pelanggan <span class="float-right badge bg-info"><?=$data13;?></span>
                          </a>
                        </li>
                        <?php
                        include "koneksi.php";
                        $sql14 = mysqli_query($kon, "SELECT * FROM tb_user t where t.role='petugas' ") or die(mysqli_error($kon));
                        $data14 = mysqli_num_rows($sql14);
                        ?>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                           Petugas <span class="float-right badge bg-info"><?=$data14;?></span>
                          </a>
                        </li>
                      </ul>
                      <span class="info-box-number">Total : <?=$data;?> User</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-leaf"></i></span>
              <?php
              include "koneksi.php";
              $sql1 = mysqli_query($kon, "SELECT * FROM kompos") or die(mysqli_error($kon));
              $data1= mysqli_num_rows($sql1);
              ?>
              <div class="info-box-content">
              <ul class="nav flex-column">
                          <li class="nav-item">
                          <a href="#" class="nav-link bg-success">
                          <center>Data Kompos</center>   
                          </a>
                        </li>
                        <?php
                        include "koneksi.php";
                        $sql15 = mysqli_query($kon, "SELECT * FROM kompos where nama='Kompos Padat 200 Gr' ") or die(mysqli_error($kon));
                        $data15 = mysqli_fetch_object($sql15);
                        ?>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            Kompos Padat 200 Gr <span class="float-right badge bg-primary"><?php echo $data15->jumlah?></span>
                          </a>
                        </li>
                        <?php
                        include "koneksi.php";
                        $sql16 = mysqli_query($kon, "SELECT * FROM kompos where nama='Kompos Padat 500 Gr' ") or die(mysqli_error($kon));
                        $data16 = mysqli_fetch_object($sql16);
                        ?>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                          Kompos Kering 500 gr <span class="float-right badge bg-info"><?php echo $data16->jumlah?></span>
                          </a>
                        </li>
                        <?php
                        include "koneksi.php";
                        $sql17 = mysqli_query($kon, "SELECT * FROM kompos where nama='Kompos Cair 1 L' ") or die(mysqli_error($kon));
                        $data17 = mysqli_fetch_object($sql17);
                        ?>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                          Kompos Cair 1 L<span class="float-right badge bg-info"><?php echo $data17->jumlah?></span>
                          </a>
                        </li>
                        <?php
                        include "koneksi.php";
                        $sql18 = mysqli_query($kon, "SELECT * FROM kompos where nama='Kompos Cair 5 L' ") or die(mysqli_error($kon));
                        $data18 = mysqli_fetch_object($sql18);
                        ?>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                          Kompos Kering 5 L<span class="float-right badge bg-success"><?php echo $data18->jumlah?></span>
                          </a>
                        </li>
                        <?php
                        include "koneksi.php";
                        $sql19 = mysqli_query($kon, "SELECT * FROM kompos where nama='Kompos Padat 1 Karung' ") or die(mysqli_error($kon));
                        $data19 = mysqli_fetch_object($sql19);
                        ?>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                          Kompos Kering 1 Karung<span class="float-right badge bg-success"><?php echo $data19->jumlah?></span>
                          </a>
                        </li>
                      </ul>              
                <span class="info-box-number">Total Stok: <?=$data1;?> Kompos</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-truck"></i></span>
              <?php
              include "koneksi.php";
                            
              $sql2 = mysqli_query($kon, "SELECT * FROM antar_jemput") or die(mysqli_error($kon));
              $data2= mysqli_num_rows($sql2);
              ?>
              <div class="info-box-content">
                <ul class="nav flex-column">
                          <li class="nav-item bg-success">
                          <a href="#" class="nav-link">
                          <center>Antar Jemput</center>   
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            Antar Delay <span class="float-right badge bg-primary"><?=$data4;?></span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            Antar Cancel <span class="float-right badge bg-info"><?=$data10;?></span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            Antar Konfirmasi <span class="float-right badge bg-info"><?=$data5;?></span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                          Selesai <span class="float-right badge bg-success"><?=$data6;?></span>
                          </a>
                        </li>
                      </ul>
                <span class="info-box-number">Total transaksi : <?=$data2;?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-shopping-cart"></i></span>
              <?php
              $sql3 = mysqli_query($kon, "SELECT * FROM faktur_kompos") or die(mysqli_error($kon));
              $data3= mysqli_num_rows($sql3);
              ?>
              <div class="info-box-content">
              <ul class="nav flex-column">
                          <li class="nav-item">
                          <a href="#" class="nav-link bg-success">
                          <center>E-commerce</center>   
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            Order Kompos Delay <span class="float-right badge bg-primary"><?=$data7;?></span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            Order Kompos Cancel <span class="float-right badge bg-info"><?=$data11;?></span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            Order Kompos Konfirmasi<span class="float-right badge bg-info"><?=$data8;?></span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            Order Kompos Selesai <span class="float-right badge bg-success"><?=$data9;?></span>
                          </a>
                        </li>
                      </ul>          
                <span class="info-box-number">Total Transaksi : <?=$data3;?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>
        <!-- /.row -->
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
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
</body>
</html>
<script>
  //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })
</script>