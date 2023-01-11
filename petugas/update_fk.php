<?php
		include('koneksi.php'); 
			$id_faktur			= $_POST['id_faktur'];
			$status				= $_POST['statuss'];
			
			$sql = mysqli_query($kon, "UPDATE faktur_kompos SET id_faktur='$id_faktur', statuss='$status' WHERE id_faktur='$id_faktur'" ) or die(mysqli_error($kon));
			
			if($sql)
			{
				echo '<script>alert("Berhasil menyimpan data."); document.location="fk.php";</script>';
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
?>