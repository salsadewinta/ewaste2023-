<?php
		include('koneksi.php'); 
			$id_user			= $_POST['id_user'];
			$nama				= $_POST['nama'];
			$username			= $_POST['username'];
			$password			=md5($_POST['password']);
			$role				= $_POST['role'];
			
			$sql = mysqli_query($kon, "UPDATE tb_user SET id_user='$id_user', nama='$nama', username='$username', password='$password', role='$role' WHERE id_user='$id_user'" ) or die(mysqli_error($kon));
			
			if($sql)
			{
				echo '<script>alert("Berhasil menyimpan data."); document.location="user.php";</script>';
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
?>