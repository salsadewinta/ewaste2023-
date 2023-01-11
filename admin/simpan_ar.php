<?php
	include "koneksi.php";
	$id_antar			=$_POST['id_antar'];
	$nama				=$_POST['nama'];
	$alamat				=$_POST['alamat'];
    $tgl_transaksi		=$_POST['tgl_transaksi'];
	$jenis_sampah		=$_POST['jenis_sampah'];
	$total_bayar		=$_POST['total_bayar'];
	$statuss			=$_POST['statuss'];
		
	$cek = mysqli_query($kon, "SELECT * FROM antar_jemput WHERE id_antar='$id_antar'") or die(mysqli_error($kon));
			
	if(mysqli_num_rows($cek) == 0)
	{
		$sql = mysqli_query($kon, "INSERT INTO antar_jemput(id_antar, nama,  alamat, tgl_transaksi, jenis_bayar, total_bayar, statuss) VALUES('$id_antar', '$nama','$alamat','$tgl_transaksi', '$jenis_sampah', '$total_bayar', '$statuss')") or die(mysqli_error($kon));
		
		if($sql)
		{
			echo '<script>alert("Berhasil menambahkan data."); document.location="orderlinejemput.php";</script>';
		}
		else
		{
			echo '<script>alert("Gagal melakukan proses tambah data"); document.location="antarjemput.php";</script>';
			//echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
		}
	}
	else
	{
		echo '<script>alert("Gagal menambahkan data"); document.location="antarjemput.php";</script>';
	}
?>