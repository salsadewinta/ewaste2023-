<?php
session_start();
if (!isset($_SESSION["username"])) 
{
  echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
  exit;
}
$username=$_SESSION["username"];
include "koneksi.php";
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
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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

    <!-- Navbar Kanan links -->
    <ul class="navbar-nav">
    <!-- left navbar-->
    <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#.html" class="nav-link active">ANTAR_JEMPUT</a>
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
  <!-- /.navbar -->

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
  <!-- /NAV -->

  <aside class="main-sidebar sidebar-dark-success elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Petugas Pengangkutan</a>
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

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="beranda.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
            Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="ar.php" class="nav-link active">
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
              Transakasi Kompos
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
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  
    <!-- /.content -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#menunda" data-toggle="tab">Menunda</a></li>
                  <li class="nav-item"><a class="nav-link" href="#konfirmasi" data-toggle="tab">Konfirmasi</a></li>
                  <li class="nav-item"><a class="nav-link" href="#selesai" data-toggle="tab">Selesai</a></li>
                </ul>
              </div>
          <!-- /.card-header -->
              <div class="card-body">
              <div class="tab-content">
                  <div class="active tab-pane" id="menunda">
                  <table id="example1" class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th> No</th>
            <th> NAMA</th>
            <th> ALAMAT</th>
            <th> TGL_TRANSAKSI</th>
            <th> NAMA KOMPOS</th>
            <th> TOTAL_BAYAR</th>
            <th>PESANAN</th>
            <th>AKSI</th> 
        </tr>
      </thead>
      <tbody>
        <?php
        //query ke database SELECT tabel tb_member urut berdasarkan id yang paling besar
        $sql = mysqli_query($kon, "SELECT * FROM antar_jemput Where pesanan = 'delay'") or die(mysqli_error($kon));
        
        
        //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
        if(mysqli_num_rows($sql) > 0)
        {
          //membuat variabel $no untuk menyimpan nomor urut
          $no = 1;
          
          //melakukan perulangan while dengan dari query $sql
          while($data = mysqli_fetch_assoc($sql))
          {
            //menampilkan data perulangan
            echo '
            <tr>
              <td>'.$no.'</td>
              <td>'.$data['nama'].'</td>
              <td>'.$data['alamat'].'</td>
              <td>'.$data['tgl_transaksi'].'</td>
              <td>'.$data['nama'].'</td>
              <td>'.$data['total_bayar'].'</td>
              <td>'.$data['pesanan'].'</td>
              <td>
                <a href="edit_ar.php?id_antar='.$data['id_antar'].'" class="badge badge-warning">Edit</a>
              </td>
            </tr>
            ';
            $no++;
          }
          //jika query menghasilkan nilai 0
        }
        else
        {
          echo '
          <tr>
            <td colspan="6">Tidak ada data.</td>
          </tr>
          ';
        }
        ?>
         </tr>
                </table>
                  </div>
                  <div class="tab-pane" id="konfirmasi">
                  <table id="example1" class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th> No</th>
            <th> NAMA</th>
            <th> ALAMAT</th>
            <th> TGL_TRANSAKSI</th>
            <th> NAMA KOMPOS</th>
            <th> TOTAL_BAYAR</th>
            <th>PESANAN</th>
            <th>AKSI</th> 
        </tr>
      </thead>
      <tbody>
        <?php
        //query ke database SELECT tabel tb_member urut berdasarkan id yang paling besar
        $sql = mysqli_query($kon, "SELECT * FROM antar_jemput Where pesanan = 'konfirmasi'") or die(mysqli_error($kon));
        
        
        //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
        if(mysqli_num_rows($sql) > 0)
        {
          //membuat variabel $no untuk menyimpan nomor urut
          $no = 1;
          
          //melakukan perulangan while dengan dari query $sql
          while($data = mysqli_fetch_assoc($sql))
          {
            //menampilkan data perulangan
            echo '
            <tr>
              <td>'.$no.'</td>
              <td>'.$data['nama'].'</td>
              <td>'.$data['alamat'].'</td>
              <td>'.$data['tgl_transaksi'].'</td>
              <td>'.$data['nama'].'</td>
              <td>'.$data['total_bayar'].'</td>
              <td>'.$data['pesanan'].'</td>
              <td>
                <a href="edit_ar.php?id_antar='.$data['id_antar'].'" class="badge badge-warning">Edit</a>
              </td>
            </tr>
            ';
            $no++;
          }
          //jika query menghasilkan nilai 0
        }
        else
        {
          echo '
          <tr>
            <td colspan="6">Tidak ada data.</td>
          </tr>
          ';
        }
        ?>
         </tr>
                </table>
                  </div>
                  <div class="tab-pane" id="selesai">
                  <table id="example1" class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th> No</th>
            <th> NAMA</th>
            <th> ALAMAT</th>
            <th> TGL_TRANSAKSI</th>
            <th> NAMA KOMPOS</th>
            <th> TOTAL_BAYAR</th>
            <th>PESANAN</th>
        </tr>
      </thead>
      <tbody>
        <?php
        //query ke database SELECT tabel tb_member urut berdasarkan id yang paling besar
        $sql = mysqli_query($kon, "SELECT * FROM antar_jemput Where pesanan = 'selesai'") or die(mysqli_error($kon));
        
        
        //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
        if(mysqli_num_rows($sql) > 0)
        {
          //membuat variabel $no untuk menyimpan nomor urut
          $no = 1;
          
          //melakukan perulangan while dengan dari query $sql
          while($data = mysqli_fetch_assoc($sql))
          {
            //menampilkan data perulangan
            echo '
            <tr>
              <td>'.$no.'</td>
              <td>'.$data['nama'].'</td>
              <td>'.$data['alamat'].'</td>
              <td>'.$data['tgl_transaksi'].'</td>
              <td>'.$data['nama'].'</td>
              <td>'.$data['total_bayar'].'</td>
              <td>'.$data['pesanan'].'</td>
            </tr>
            ';
            $no++;
          }
          //jika query menghasilkan nilai 0
        }
        else
        {
          echo '
          <tr>
            <td colspan="6">Tidak ada data.</td>
          </tr>
          ';
        }
        ?>
         </tr>
                </table>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>