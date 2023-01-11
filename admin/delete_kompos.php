<?php
	//include file config.php
	include('koneksi.php');

	//membuat variabel $id yang menyimpan nilai dari $_GET['id']
	$id_kompos = $_GET['id_kompos'];
	
	//melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
	$cek = mysqli_query($kon, "SELECT * FROM kompos WHERE id_kompos='$id_kompos'") or die(mysqli_error($kon));
	
	//jika query menghasilkan nilai > 0 maka eksekusi script di bawah
	if(mysqli_num_rows($cek) > 0)
	{
		//query ke database DELETE untuk menghapus data dengan kondisi id=$id
		$del = mysqli_query($kon, "DELETE FROM kompos WHERE id_kompos='$id_kompos'") or die(mysqli_error($kon));
		if($del)
		{
			echo '<script>alert("Berhasil menghapus data."); document.location="kompos.php";</script>';
		}
		else
		{
			echo '<script>alert("Gagal menghapus data."); document.location="kompos.php";</script>';
		}
	}
	else
	{
		echo '<script>alert("ID tidak ditemukan di database."); document.location="kompos.php";</script>';
	}
?>