<?php
	include "koneksi.php";
	$id_faktur			=$_POST['id_faktur'];
	$id_user			=$_POST['id_user'];
	$id_kompos			=$_POST['id_kompos'];
	$nama				=$_POST['nama'];
	$alamat				=$_POST['alamat'];
	$tgl_transaksi		=$_POST['tgl_transaksi'];
	$nama_kompos		=$_POST['nama_kompos'];
	$qty				=$_POST['qty'];
	$harga				=$_POST['harga'];
	$total_bayar		=$_POST['total_bayar'];
	$statuss			=$_POST['statuss'];
		
	$cek = mysqli_query($kon, "SELECT * FROM faktur_kompos WHERE id_faktur ='$id_faktur'") or die(mysqli_error($kon));
		if(mysqli_num_rows($cek) == 0)
		{
			$sql = mysqli_query($kon, "INSERT INTO faktur_kompos(id_faktur,  id_user, id_kompos, nama, alamat, tgl_transaksi, nama_kompos, qty, harga, total_bayar, statuss)
			VALUES('$id_faktur', '$id_user','$id_kompos','$nama', '$alamat', '$tgl_transaksi', '$nama_kompos', '$qty', '$harga', '$total_bayar', '$statuss')") or die(mysqli_error($kon));
				
				if($sql)
					{
						echo '<script>alert("Berhasil menyimpan data."); document.location="riwayat_faktur.php";</script>';
					}
					else
					{
						echo '<script>alert("Gagal melakukan proses edit data."); document.location="ecommerce.php";</script>';
					}
		}
		else
		{
			echo '<script>alert("Gagal melakukan proses edit data."); document.location="ecommerce.php";</script>';
					
		}
?>