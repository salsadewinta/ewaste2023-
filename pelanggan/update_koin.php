<?php
		session_start();
			if (!isset($_SESSION["username"])) 
			{
			echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
			exit;
			}
		include('koneksi.php'); 
			
			$sql = mysqli_query($kon, "UPDATE tb_user SET koin = koin +  50 WHERE  username = '{$_SESSION['username']}'" ) or die(mysqli_error($kon));
			
			if($sql)
			{
				echo '<script>alert("Selamat anda mendapatkan koin + 50."); document.location="beranda.php";</script>';
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
?>