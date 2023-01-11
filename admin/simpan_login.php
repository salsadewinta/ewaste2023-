
<?php
	include "koneksi.php";
	$nama			=$_POST['nama'];
	$username		=$_POST['username'];
	$password		=md5($_POST['password']);
    $id_outlet		=$_POST['id_outlet'];
    $role			=$_POST['role'];
		
		$query=mysqli_query($kon, "INSERT INTO tb_user VALUES ('','$nama','$username','$password','$id_outlet','$role')");
        //$query = mysqli_query($sql);
        
        if($query===TRUE)
        {
			echo"
			<script>
				alert('Data Berhasil Di Simpan');
				location.href='register.php';
			</script>";
		}
		else
		{
			echo"
			<script>
				alert('Data Gagal Di Simpan');
				location.href='register.php';
			</script>";
		}
?>