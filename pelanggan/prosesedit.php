<?php
		include('koneksi.php'); 
		$id_antar   		= isset($_GET['id_antar']) ? $_GET['id_antar'] : "";   
		$nama  				= isset($_GET['nama']) ? $_GET['nama'] : "";
		$wilayah  			= isset($_GET['wilayah']) ? $_GET['wilayah'] : "";   
		$alamat  			= isset($_GET['alamat']) ? $_GET['alamat'] : "";
		$jenis_sampah   	= isset($_GET['jenis_sampah']) ? $_GET['jenis_sampah'] : "";   

			$sql = mysqli_query($kon, "UPDATE antar_jemput SET id_antar='$id_antar', nama='$nama', wilayah='$wilayah', alamat='$alamat',  jenis_sampah='$jenis_sampah' WHERE id_antar='$id_antar'" ) or die(mysqli_error($kon));
			
			if($sql)
			{
				echo '<script>alert("Cek Kembali Data Anda."); document.location="edit_antarjemput.php";</script>';
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan proses pengecekan data.</div>';
			}
?>