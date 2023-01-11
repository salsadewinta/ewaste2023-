<?php 
include('koneksi.php');

$id_faktur = $_GET['id_faktur'];

$query = mysqli_query($kon,"DELETE FROM faktur_kompos WHERE id_faktur='$id_faktur'") or die(mysqli_error());

if ($query) {
            echo"
	            <script>
				alert('delete berhasil')
				location.href='fk.php';
				</script>";
}
else{
    echo"
    <script>
    alert('delete gagal')
    location.href='fk.php';
    </script>";
}
?>