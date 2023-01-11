<?php
	include "koneksi.php";
	$id_transaksi			=$_POST['id_transaksi'];
	$id_paket				=$_POST['id_paket'];
    $qty					=$_POST['qty'];
    $keterangan				=$_POST['keterangan'];
		
		$query=mysqli_query($kon, "INSERT INTO tb_detail_transaksi VALUES ('','$id_transaksi','$id_paket','$qty','$keterangan')");
        //$query = mysqli_query($sql);
        
        if($query===TRUE)
        {
			echo"
			<script>
				alert('Data Berhasil Di Simpan');
				location.href='detail_transaksi.php';
			</script>";
		}
		else
		{
			echo"
			<script>
				alert('Data Gagal Di Simpan');
				location.href='tambah_detail_transaksi.php';
			</script>";
		}
?>