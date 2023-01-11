<?php
session_start();
if (!isset($_SESSION["username"])) 
{
  echo "Anda harus login dulu <br><a href='..\login.php'>Klik disini</a>";
  exit;
}
$username=$_SESSION["username"];
include "koneksi.php";
?>
<?php
    $sql = "SELECT * FROM antar_jemput";
  $query = mysqli_query($kon,$sql);
  $count = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-waste | Antar-Jemput</title>

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
<?php
		$id_antar   		= isset($_GET['id_antar']) ? $_GET['id_antar'] : "";   
		$nama  				= isset($_GET['nama']) ? $_GET['nama'] : "";
		$wilayah  			= isset($_GET['wilayah']) ? $_GET['wilayah'] : "";   
		$alamat  			= isset($_GET['alamat']) ? $_GET['alamat'] : "";
		$jenis_sampah   	= isset($_GET['jenis_sampah']) ? $_GET['jenis_sampah'] : "";
    $select = mysqli_query($kon, "SELECT * FROM antar_jemput WHERE id_antar='$id_antar'") or die(mysqli_error($kon));
    $data = mysqli_fetch_assoc($select);
?>
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="beranda.php" class="nav-link">Antar_Jemput</a>
        <div class="user-panel mt-2 pb-2 mb-2 d-flex">
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
          <div class="rating">
            <i class="nav-icon fas fa-star fa-fw"></i>
            <i class="nav-icon fas fa-star fa-fw"></i>
            <i class="nav-icon fas fa-star fa-fw"></i>
            <i class="nav-icon fas fa-star fa-fw"></i>
            <i class="nav-icon fas fa-star fa-fw"></i>
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
            <a href="riwayatt.php" class="nav-link">
              <i class="nav-icon fas fa-history fa-fw"></i>
              <p>Riwayat</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-user fa-fw"></i>
              <p>Akun</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>


    <tr>
      <td>
          <center><a href="../logout.php"  class="btn btn-rounded btn-danger">Logout</a></center>
      </td>
    </tr>

  </aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Antar - Jemput</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               
                <div class='form'>
                  <form method='post' action='update_ar.php' class='cmxform form-horizontal tasi-form' id='commentForm'>
                  <div class="card-body">
                  <div div class="form-group">
          <label> <h3>PASTIKAN DATA ANDA BENAR!</h3></label>
        </div>
                  <div class="form-group row">
        <div class="col-sm-10">
        <input type="text" name="id_antar" class="form-control" size="4" value="<?php echo $id_antar;?>" readonly="readonly" hidden>
        </div>
      </div>
        <div div class="form-group">
          <label for="exampleInputName1">Nama Pengirim</label>
          <input type="text" name="nama" class="form-control" id="exampleInputNumber1" value="<?php echo $nama; ?>">
        </div>
            <div class="col-sm-12">
                      <div class='form-group'>
                        <label for='cname' class='control-label col-lg-2'>Wilayah</label>
                        <divclass='control-label col-lg-2'>
                          <select class='form-control' name="wilayah">
                              <option value="los 1-5"   <?php if($wilayah['wilayah'] == 'los 1-5'){ echo 'selected'; } ?>>LOS 1-5</option>                            
                          </select>          
                        </divclass=>
                      </div>
                  <div class="form-group">
                      <label for="exampleInputNumber1">Alamat</label>
                      <input type="text" name="alamat" class="form-control" id="exampleInputNumber1" value="<?php echo $alamat; ?>">
                  </div>
                  <div class="col-sm-12">
                      <div class='form-group'>
                        <label for='cname' class='control-label col-lg-2'>Jenis Sampah</label>
                        <divclass='control-label col-lg-2'>
                          <select class='form-control' name="jenis_sampah">
                              <option value="buah-buahan"<?php if($jenis_sampah['jenis_sampah'] == 'buah-buahan'){ echo 'selected'; } ?>>Buah-Buahan</option>
                              <option value="sayuran"<?php if($jenis_sampaha['jenis_sampah'] == 'sayuran'){ echo 'selected'; } ?>>Sayuran</option>                                       
                          </select>          
                        </divclass=>
                      </div>
                    </div>
                    
                    <div class='form-group'>
                        <label for='cname' class='control-label col-lg-2'>Total Bayar</label>
                        <divclass='control-label col-lg-2'>
                          <select class='form-control' name="total_bayar" readonly="readonly">
                              <option value="tigapuluhribu" selected>RP 30.000,00</option>                                     
                          </select>          
                        </divclass=>
                      </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">&nbsp;</label>
                    <div class="col-sm-10">
                      <input type="submit" name="submit" class="btn btn-success" value="Jemput">
                      <a href="antarjemput.php" class="btn btn-warning">Batal</a>
                    </div>
                  </div>
                </form>
              </div>
    </section>
    <!-- /.content -->
  </div>


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
