<?php
		include('koneksi.php'); 
			$id_antar			= $_POST['id_antar'];
			$pesanan			= $_POST['pesanan'];
			
			$sql = mysqli_query($kon, "UPDATE antar_jemput SET id_antar='$id_antar', pesanan='$pesanan' WHERE id_antar='$id_antar'" ) or die(mysqli_error($kon));
			
			if($sql)
			{
				echo '<script>alert("Berhasil menyimpan data."); document.location="ar.php";</script>';
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
?>