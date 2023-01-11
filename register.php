<?php
include "koneksi.php";
?>
<?php
    $sql_u = "SELECT * FROM tb_user";
  $query_u = mysqli_query($kon,$sql_u);
  $count = mysqli_num_rows($query_u);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>E_WASTE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
          <div class="wrap d-md-flex">
            <div class="text-wrap p-4 p-lg-5  text-center d-flex align-items-center " style="background-image: url(dist/img/lo.jpg);">
              <div class="text w-100">
              </div>
      </div>
            <div class="login-wrap p-4 p-lg-5 order-md-last">
              <div class="d-flex">
                <div class="w-100">
                <CENTER> <h3 class="mb-4">REGISTER</h3></CENTER>
                </div>
            </div>
        <div class='form'><form method='post' action='simpan_register.php' class='cmxform form-horizontal tasi-form' id='commentForm'>
            <div class='form'> 
            <div class="form-group">
          <div class="col-sm-10">
            <input type="text" name="id_user" class="form-control" readonly="readonly" required hidden>
          </div>
        </div>
            <div class="form-group ">
                  <select class="form-control" name="id_user" hidden >
                      <option></option>
                          <?php
                              while ($data = mysqli_fetch_array($query))
                              {
                            ?>
                      <option> <?php echo $data['id_user']; ?> </option>
                            <?php
                              } 
                            ?>
                  </select>
              </div> 
              <label>Nama Lengkap:</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukan Username">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                </div>
                <div class='form-group'>
                  <div class='col-lg-10'>
                    <select class='form-control' name="role" hidden>
                        <option value="">-Pilih Role-</option>
                        <option value="Admin">Admin</option>
                        <option value="petugas">petugas</option>
                        <option value="pelanggan" selected>pelanggan</option>
                    </select>
                  </div>
              </div>
                <div class="form-group">
                    <input type="submit"  class="btn btn-success"  value="Register">
                    <a href="utama.php" class="btn btn- btn-outline-success">Back</a>
                </div>
            </div>
            </form>
        </div>
        </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>


