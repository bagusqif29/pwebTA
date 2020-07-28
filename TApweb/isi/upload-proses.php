<?php
//sumber w3schools.com
include("includes/config.php");
$target_dir = "gallery/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$ket = $_POST["ket"];
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["foto"]["size"] > 2097152) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
			$nama = basename( $_FILES["foto"]["name"]);
			$tgl = date("l, Y-m-d H:i:s");
			$query = $koneksi->query("INSERT INTO galeri(tgl_upload, nama, keterangan) VALUES('$tgl','$nama','$ket')") or die($koneksi->error);
			if($query){
				$i = $koneksi->insert_id;
					echo '<script>
					alert("Gambar berhasil diupload")
					
						
					document.location="index.php";

					</script>'; 
				
			}else{
				echo '<script>alert("Gagal!"); document.location="upload.php?menu=upload";</script>';
			}
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}
?>