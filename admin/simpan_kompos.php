<?php
		include('koneksi.php'); 
			$nama				= $_POST['nama'];
			$jumlah				= $_POST['jumlah'];
			$harga				= $_POST['harga'];
			$deskripsi			= $_POST['deskripsi'];

			//menampung file yang diupload
			$filename 			= $_FILES['gambar']['name'];
			$tmp_name			= $_FILES['gambar']['tmp_name'];

		
			$type1				= explode('.', $filename);
			$type2				= $type1[1];

			$newname = 'kompos'.time().'.'.$type2;
			//menampung data file yang diijinkan
			$tipe_diizinkan	= array('jpg', 'jpeg', 'png', 'gif');

			//validasi format
			if(!in_array($type2, $tipe_diizinkan)){
				
				echo '<script>alert("Format file tidak diijinkan")</script>';

			}else{
				move_uploaded_file($tmp_name, './kompos/'.$newname);
			}
				$sql = mysqli_query($kon, "INSERT INTO kompos VALUES('', '$nama', '$jumlah', '$harga', '$deskripsi', '$newname')") or die(mysqli_error($kon));
				
				if($sql)
				{
					echo '<script>alert("Berhasil menambahkan data."); document.location="kompos.php";</script>';
				}
				else
				{
					echo '<script>alert("Gagal melakukan proses tambah data"); document.location="tambah_kompos.php";</script>';
					//echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
?>