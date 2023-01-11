<?php
session_start();
if (!isset($_SESSION["username"])) 
{
  echo "Anda harus login dulu <br><a href='..\login.php'>Klik disini</a>";
  exit;
}

$username=$_SESSION["username"];
include "koneksi.php";
$id_kompos = $_GET['id_kompos'];
$select = mysqli_query($kon, "SELECT * FROM kompos WHERE id_kompos='$id_kompos'") or die(mysqli_error($kon));
$data = mysqli_fetch_assoc($select);

$sql_k= "SELECT * FROM kompos";
$query_k = mysqli_query($kon,$sql_k);
$count = mysqli_num_rows($query_k);
?>
<?php 
include "koneksi.php";
$select = mysqli_query($kon, "SELECT * FROM faktur_kompos WHERE id_kompos='$id_kompos'") or die(mysqli_error($kon));
$fk = mysqli_fetch_array($select);

$select2 = mysqli_query($kon, "SELECT * FROM tb_user WHERE username='$_SESSION[username]'") or die(mysqli_error($kon));
$data2 = mysqli_fetch_assoc($select2);
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
  <!-- -->
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
          <p class="text-warning"><i class="nav-icon fas fa-coins fa-fw"></i><?php echo $data2['koin']?></p>
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
            <a href="antarjemput.php" class="nav-link">
              <i class="nav-icon fas fa-truck fa-fw"></i>
              <p>Antar-Jemput</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="ecommerce.php" class="nav-link active">
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
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Checkout</h3>
              </div>
              <div class="card-body">
              <div class='form'>
              <form method='post' action='tukar_koin.php' class='cmxform form-horizontal tasi-form' id='commentForm'>
              <div class="form-group">
              <p><h4><b>Pastikan Koin Anda Lebih Dari 2000</b</h4></p>
                    <div class="col-sm-10">
                    <input type="number" name="id_faktur" hidden>
                    </div>
                  </div>
                  <div class="form-group ">
                    <div class="col-lg-10">
                    <select class="form-control" name="id_user" hidden>
                              <option> <?php echo $data2['id_user']?></option>
                          </select>
                      </div>
                  </div>
                <div class="form-group ">
                    <div class="col-lg-10">
                    <select class="form-control" name="id_kompos" hidden>
                              <option> <?php echo $data['id_kompos']?></option>
                          </select>
                      </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Nama Penerima :</label>
                    <div class="col-sm-10">
                    <input type="name" name="nama" class="form-control" id="exampleInputName1" placeholder="Masukkan Nama">
                    </div>
                  </div>
                <div class="form-group">
                    <label for="exampleInputAddress1">Alamat Penerima :</label>
                    <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="exampleInputAddress1" placeholder="Masukkan Alamat">
                    </div>
                  </div> 
                <?php
                    date_default_timezone_set('Asia/Jakarta');
                    $tgl = date('Y-m-d H:i:s');
                    ?>
                    <div class='form-group'>
                      <label for='cname' class='control-label col-lg-2'>Tanggal</label>
                      <div class='col-lg-10'>
                        <input type='date'  name='tgl_transaksi'  value="<?php echo $tgl ?>" class='form-control' required>
                      </div>
                    </div>
                <div class="card-body">
                <div class="col-sm-10">
                <div class="alert alert-dismissible" style="background-color:#C6CBC3" padding="10px">
                    <div class="filtr-item float-sm-right" data-category="2, 4" data-sort="black sample">
                      <h4><?php echo $data['nama']?></h4>
                      <h5>Rp<?php echo number_format($data['harga'])?></h5>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                      <img src="../admin/kompos/<?php echo $data['gambar']?>" width="400" class="product-image" alt="Product Image">
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <input type="text" name="nama_kompos" class="form-control"  value="<?php echo $data['nama']?>" id="exampleInputAddress1" placeholder="Masukkan Alamat " hidden>
                </div> 
                <?php 
                    $select = mysqli_query($kon, "SELECT * FROM faktur_kompos");
                    $qty = mysqli_fetch_array($select)
                    ?>
                    <div class='form-group'>
                      <label for="exampleInputAddress1">Jumlah kompos</label>
                      <div class="col-sm-10">
                      <select name="qty" id="qty">
                        <option value="">- QTY -</option>
                        <?php
                            for($x=1;$x<=10;$x++){
                        ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                      </div>
                    </div>
                <div class='form-group'>
                      <label for='cname' class='control-label col-lg-2'>Harga Kompos</label>
                      <div class="col-sm-10">
                      <input type="number" name="harga" id="harga" class="form-control" value="<?php echo $data['harga']?>">
                      </div>
                </div>
                <div class='form-group'>
                      <label for='cname' class='control-label col-lg-2'>Total Bayar</label>
                      <div class="col-sm-10">
                      <input type="number" name="total_bayar" id="total_bayar" class="form-control" Readonly value="0">
                      </div>
                </div>
                  <div class='form-group'>
                    <div class="col-sm-10">
                      <select name="statuss" hidden>
                        <option value="delay" selected></option>
                      </select>
                    </div>
                  </div>
                  <div class='form-group'>
                      <div class='col-lg-offset-2 col-lg-10'>
                          <button class='btn btn-warning waves-effect waves-light' type='submit'>Pesan</button>
                      <a class='btn btn-danger' href='ecommerce.php'>Batal</a>
                  </div>
              </div>
              </form>
              </div>
          </div>
      </div>
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
<script type="text/javascript">
 $("#harga").keyup(function(){   
   var a = parseFloat($("#harga").val());
   var b = parseFloat($("#qty").val());
   var c = a*b;
   $("#total_bayar").val(c);
 });
 
 $("#qty").keyup(function(){
   var a = parseFloat($("#harga").val());
   var b = parseFloat($("#qty").val());
   var c = a*b;
   $("#total_bayar").val(c);
 });
</script>
<script>
 $('#koin').change(function(){
  if($(this).prop('checked'))
  {
   $('#hidden_status').val('Active');
  }
  else
  {
   $('#hidden_status').val('Deactive');
  }
 });
</script>
