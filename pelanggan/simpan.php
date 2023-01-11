<?php
include('koneksi.php');
if(isset($_POST['cal'])){ //nama form
	$id_antar			=$_POST['id_antar'];
	$nama				=$_POST['nama'];
	$wilayah			=$_POST['wilayah'];
	$alamat				=$_POST['alamat'];
    $tgl_transaksi		=$_POST['tgl_transaksi'];
	$jenis_sampah		=$_POST['jenis_sampah'];
	$total_bayar		=$_POST['total_bayar'];
	$chk="";  
	foreach($jenis_sampah as $chk1)  
	{  
		$chk .= $chk1.",";  
	}

	$sql = mysqli_query($kon, "INSERT INTO antar_jemput(id_antar, nama,  wilayah, alamat, tgl_transaksi, jenis_sampah, total_bayar) VALUES('$id_antar', '$nama', '$wilayah', '$alamat','$tgl_transaksi', '$chk', '$total_bayar')") or die(mysqli_error($kon));
	$query	= mysqli_query($sql);

	if(isset($_POST['cal'])){
		echo '<script>alert("Order Berhasil."); document.location="orderlinejemput.php";</script>';//koding yang sudah ada berjalan biasa
	  }
	  else
	  {
		header('location: antar_jemput.php'); //kalau bukan post redirect ke index.php
		exit;
	  }

}

?> 