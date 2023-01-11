<?php
	include "koneksi.php";
	$id_antar			=$_POST['id_antar'];
	$id_user			=$_POST['id_user'];
	$nama				=$_POST['nama'];
	$wilayah			=$_POST['wilayah'];
	$alamat				=$_POST['alamat'];
    $tgl_transaksi		=$_POST['tgl_transaksi'];
	$jenis_sampah		=$_POST['jenis_sampah'];
	$total_bayar		=$_POST['total_bayar'];
	$pesanan			=$_POST['pesanan'];
	$chk="";  
	foreach($jenis_sampah as $chk1)  
	{  
		$chk .= $chk1.",";  
	}
		
	$cek = mysqli_query($kon, "SELECT * FROM antar_jemput WHERE id_antar='$id_antar'") or die(mysqli_error($kon));
	if(mysqli_num_rows($cek) == 0)
	{
		$sql = mysqli_query($kon, "INSERT INTO antar_jemput(id_antar, id_user, nama,  wilayah, alamat, tgl_transaksi, jenis_sampah, total_bayar, pesanan) VALUES('$id_antar',  '$id_user', '$nama', '$wilayah', '$alamat','$tgl_transaksi', '$chk', '$total_bayar', '$pesanan')") or die(mysqli_error($kon));
		
		if($sql)
		{
			echo '<script>alert("Order Berhasil."); document.location="riwayat.php";</script>';
		}
		else 
		{
			echo '<script>alert("Mohon Maaf, order anda gagal, silahkan inputkan data dengan benar"); document.location="antarjemput.php";</script>';
		}
	}
	else
	{
		echo '<script>alert(Mohon Maaf, order anda gagal, silahkan inputkan data dengan benar"); document.location="antarjemput.php";</script>';
	}
?>