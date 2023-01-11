<?php
		include('koneksi.php'); 
		$id_antar			=$_POST['id_antar'];
		$nama				=$_POST['nama'];
		$wilayah			=$_POST['wilayah'];
		$alamat				=$_POST['alamat'];
		$jenis_sampah		=$_POST['jenis_sampah'];
			
			$sql = mysqli_query($kon, "UPDATE antar_jemput SET id_antar='$id_antar', nama='$nama', wilayah='$wilayah', alamat='$alamat',  jenis_sampah='$jenis_sampah' WHERE id_antar='$id_antar'" ) or die(mysqli_error($kon));
			
			if($sql)
			{
				echo '<script>alert("Berhasil menyimpan data."); document.location="orderlinejemput.php";</script>';
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
?>