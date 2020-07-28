<?php include("includes/config.php"); ?>
<?php include("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Gallery</title>
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
<body>

	<?php include("includes/navbar.php"); ?>
	
	<div class="container body">
		<?php
		
		$id = $_GET['id'];
		$query = $koneksi->query("SELECT * FROM galeri WHERE id='$id'") or die($koneksi->error);
		//$delete = $koneksi->query("DELETE FROM galeri WHERE id='$id'") or die($koneksi->error);
		//$del = $delete->fetch_assoc();
		if($query->num_rows){
			$row = $query->fetch_assoc();
	$foto=$row['nama'];


			echo '
			<h1>Informasi foto</h1>
			<div class="row">
				<div class="col-md-8">
					<img src="gallery/'.$row['nama'].'" class="img-responsive">
							
						
				</div>
				<div class="col-md-4">
					<table class="table">
						<tr>
							<th width="120">Nama File</th>
							<td>'.$row['nama'].'</td>
						</tr>
						<tr>
							<th>Ukuran File</th>
							<td>';
							$size = filesize("gallery/".$row['nama']);
							$size = $size / 1024 / 1024;
							echo number_format($size, 2).' MB';
							echo '</td>
						</tr>
						<tr>
							<th>Ekstensi File</th>
							<td>'; echo pathinfo($row['nama'], PATHINFO_EXTENSION); echo '</td>
						</tr>
						<tr>
							<th>Dimensi File</th>
							<td>'; 
							list($width, $height) = getimagesize("gallery/".$row['nama']); 
							echo $width . "x" . $height;
							echo '</td>
						</tr>

						<tr>

								<th>Dilihat</th>
							<td>'; 
							$lihat= $row['dilihat'];
							$new_count = $lihat+1;
							$update_count=$koneksi->query("UPDATE galeri SET dilihat = '".$new_count."' WHERE id='$id'") or die($koneksi->error);
							
							echo $new_count," kali";
							echo '</td>
							
							
						
						</tr>

							<tr>

								<th>Diupload pada</th>
							<td>'; 
							$tgl= $row['tgl_upload'];
							echo "$tgl";
							echo '</td>
							
							
						
						</tr>


						<tr>
<td colspan="2"><a href="gallery/'.$row['nama'].'"class="btn btn-primary btn-block">Download</a></td>
						</tr>
						<tr>
						<td colspan="2"><a href="delete.php?id='.$row["id"].'" class="btn btn-primary btn-block">Delete</a>
	
						</td>
						</tr>
					</table>
												<b>keterangan : </b><br><p align="justify">
												 '.$row['keterangan'].'</p>

				</div>
			</div>';


		}else{
			echo '404 Not Found!';
		}
		?>
		
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>