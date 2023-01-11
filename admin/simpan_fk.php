<?php
	include "koneksi.php";
	$id_faktur		=$_POST['id_faktur'];
	$status			=$_POST['status'];
		
		$query=mysqli_query($kon, "INSERT INTO faktur_kompos VALUES ('','$id_faktur','$status')");
        //$query = mysqli_query($sql);
        
        if($query===TRUE)
        {
			echo"
			<script>
				alert('Data Berhasil Di Simpan');
				location.href='fk.php';
			</script>";
		}
		else
		{
			echo"
			<script>
				alert('Data Gagal Di Simpan');
				location.href='fk.php';
			</script>";
		}
?>