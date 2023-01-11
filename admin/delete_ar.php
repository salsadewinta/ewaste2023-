<?php 
include('koneksi.php');

$id_transaksi = $_GET['id_transaksi'];

$query = mysqli_query($kon,"DELETE FROM tb_transaksi WHERE id_transaksi='$id_transaksi'") or die(mysqli_error());

if ($query) {
            echo"
	            <script>
				alert('delete berhasil')
				location.href='transaksi.php';
				</script>";
}
else{
    echo"
    <script>
    alert('delete gagal')
    location.href='tambah_transaksi.php';
    </script>";
}
?>