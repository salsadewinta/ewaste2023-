<?php
    session_start();
    if (!isset($_SESSION["username"])) 
    {
      echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
      exit;
    }
    include "koneksi.php";
    $select = mysqli_query($kon, "SELECT * FROM tb_user WHERE username='$_SESSION[username]'") or die(mysqli_error($kon));
    $data = mysqli_fetch_assoc($select);

    $id_antar = $_GET['id_antar'];
    $select2 = mysqli_query($kon, "SELECT * FROM antar_jemput WHERE id_antar='$id_antar'") or die(mysqli_error($kon));
    $data2 = mysqli_fetch_object($select2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body>
  
<aside class="main-sidebar sidebar-dark-success elevation-4">
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/userprofile1.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block"><?php echo $_SESSION['username']?></a>
          <div class="rating">
          <p class="text-warning"><i class="nav-icon fas fa-coins fa-fw"></i><?php echo $data['koin']?></p>
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
            <p>
                  <img src="dist/img/g.png" class="img-circle elevation-2" alt="e-waste" width="35"> E-Waste.
                    <small class="float-right">Date: 2/10/2014</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Admin, E-Waste.</strong><br>
                    Pasar Induk Gede Bage<br>
                    Jl. Soekarno Hatta, Bandung.<br>
                    Phone: (+62) 89671990056<br>
                    Email: electronicwaste2022@gmail.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong><?php echo $data2->nama; ?></strong><br>
                    <?php echo $data2->alamat; ?><br>
                    P.Gede Bage Bandung, Jawa Barat<br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <br>
                  <b>Order ID:</b> <?php echo $data2->id_antar; ?><br>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                     <th>NO</th>
                     <th>Jenis Sampah</th>
                     <th>Wilayah</th>
                     <th>Total_Bayar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td><?php echo $data2->jenis_sampah; ?></td>
                      <td><?php echo $data2->wilayah; ?></td>
                      <td><?php echo $data2->total_bayar; ?></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <div class="row">
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead justify-content-around">Terimakasih telah bergabung bersama kami!</p>
                  <h5 class="justify-content-right">Accounting Pasar</h5>
                <br><br><br>
                <h>(Amira)</h>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <!-- this row will not appear when printing -->
              <br>
              <div class="row no-print">
                <div class="col-12">
                  <a href="ipa.php" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <a href="orderlinejemput.php?id_antar=<?php echo $data2->id_antar?>" type="button" class="btn btn-success float-right"><i class="far fa-credit-"></i>
                  Kembali
                  </a>
                </div>
              </div>
              <br>
                  </table>                <!-- /.col -->
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
