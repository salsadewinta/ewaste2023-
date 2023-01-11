<?php
session_start();
include "koneksi.php";

$username = $_POST["username"];
$password = md5($_POST["password"]);

$sql = "select * from tb_user where username='".$username."' and password='".$password."' limit 1";
$hasil = mysqli_query ($kon,$sql);
$jumlah = mysqli_num_rows($hasil);

	if ($jumlah>0) 
	{
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["id_user"]=$row["id_user"];
		$_SESSION["nama"]=$row["nama"];
		$_SESSION["username"]=$row["username"];
		$_SESSION["password"]=$row["password"];
		$_SESSION["koin"]=$row["koin"];
		header("Location:beranda.php");
	}
	else 
	{
		echo '<script>alert("Username atau password salah"); document.location="login.php";</script>';
	}
?>
