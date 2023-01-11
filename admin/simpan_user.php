<?php
	include "koneksi.php";
	$nama			=$_POST['nama'];
	$username		=$_POST['username'];
	$password		=md5($_POST['password']);
    $role			=$_POST['role'];
		
	$cek = mysqli_query($kon, "SELECT * FROM tb_user WHERE username='$username'") or die(mysqli_error($kon));
	if(mysqli_num_rows($cek) == 0)
	{
		$sql = mysqli_query($kon, "INSERT INTO tb_user(nama,  username, password, role) VALUES('$nama','$username','$password', '$role')") or die(mysqli_error($kon));
				
		if($sql)
		{
			echo '<script>alert("Berhasil menambahkan data."); document.location="user.php";</script>';
		}
		else
		{
			echo '<script>alert("Gagal melakukan proses tambah data"); document.location="tambah_user.php";</script>';
			//echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
		}
	}
	else
	{
		//echo '<div class="alert alert-warning">Gagal, NIM sudah terdaftar.</div>';
		echo '<script>alert("Gagal, NIM sudah terdaftar."); document.location="tambah_user.php";</script>';
	}
?>

		
        