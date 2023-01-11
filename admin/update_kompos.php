<?php
		include('koneksi.php'); 
			$id_kompos			= $_POST['id_kompos'];
			$nama				= $_POST['nama'];
			$jumlah				= $_POST['jumlah'];
			$harga				= $_POST['harga'];
			$deskripsi				= $_POST['deskripsi'];
			$foto				= $_POST['foto'];

			//menampung file yang diupload
			$filename 			= $_FILES['gambar']['name'];
			$tmp_name			= $_FILES['gambar']['tmp_name'];
			//jika admin ganti gambar
			if($filename != ''){
				$type1				= explode('.', $filename);
			$type2				= $type1[1];

			$newname = 'kompos'.time().'.'.$type2;
			//menampung data file yang diijinkan
			$tipe_diizinkan	= array('jpg', 'jpeg', 'png', 'gif');
			
			//validasi format
				if(!in_array($type2, $tipe_diizinkan)){
					
					echo '<script>alert("Format file tidak diijinkan")</script>';

				}else{
					unlink('./kompos/'.$foto);
					move_uploaded_file($tmp_name, './kompos/'.$newname);
					$namagambar = $newname;
				}
			}else{

				$namagambar = $foto;
			}
			
			
			$sql = mysqli_query($kon, "UPDATE kompos 
			SET nama='".$nama."',
			 jumlah='".$jumlah."', 
			 harga='".$harga."',
			 deskripsi='".$deskripsi."', 
			 gambar='".$namagambar."' 
			 WHERE  id_kompos='$id_kompos'" )
			  or die(mysqli_error($kon));
			
			if($sql)
			{
				echo '<script>alert("Berhasil menyimpan data."); document.location="kompos.php";</script>';
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
?>