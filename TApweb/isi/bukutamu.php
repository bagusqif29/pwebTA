<?php include("includes/config.php"); ?>
<?php 



if (isset($_POST["submit"])) {
	$nama=$_POST["nama"];
	$email=$_POST["email"];
	$pesan=$_POST["pesan"];



$query = "INSERT INTO bukutamu (nama, email, pesan)
			VALUES
			('$nama','$email','$pesan')
			
		";


mysqli_query($koneksi,$query);

if($query){
					echo '<script>
					alert("Data berhasil ditambah")
					document.location="index.php";

					</script>'; 
				
			}else{
				echo '<script>alert("Gagal!"); document.location="bukutamu.php?menu=bukutamu";</script>';
}
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Gallery</title>
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/jasny-bootstrap.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
<body>

	<?php include("includes/navbar.php"); ?>
	
	<div class="container body">
		
		<?php echo "" ?>

		<form action="" method="post">
		<fieldset>
		<legend><h1>Buku Tamu</h1>
		<label>Nama </label>
		<input type="text" name="nama">
		<br>
		<label>Email </label>
		<input type="email" name="email">
		<br>
		<label>Pesan </label>
		
		<textarea placeholder="isi dengan pesan" name="pesan"></textarea>
		<br>
		<button type="submit" name="submit">kirim</button>
	</legend>
		</fieldset>
		</form>
		
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jasny-bootstrap.js"></script>
	
</body>
</html>