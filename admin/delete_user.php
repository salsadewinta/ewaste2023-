<?php 
include('koneksi.php');

$id_user = $_GET['id_user'];

$query = mysqli_query($kon,"DELETE FROM tb_user WHERE id_user='$id_user'") or die(mysqli_error());

if ($query) {
            echo"
	            <script>
				alert('delete berhasil')
				location.href='user.php';
				</script>";
}
else{
    echo"
    <script>
    alert('delete gagal')
    location.href='user.php';
    </script>";
}
?>