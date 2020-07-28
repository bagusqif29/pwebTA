<?php 

include("includes/config.php");

$id = $_GET["id"];
$ok=0;

$sql = $koneksi->query("SELECT * FROM galeri WHERE id='$id'");
$data = $sql->fetch_assoc();
$foto = $data['nama'];

if (file_exists("gallery/$foto")) {
	unlink("gallery/$foto");
	$ok++;
}

$sql = $koneksi->query("DELETE FROM galeri WHERE id='$id'");
$ok++;

if($ok==2)
{
	echo "
	<script>
		alert('data berhasil dihpus');
		document.location.href = 'index.php'
	 </script>
	";
}

else
{
	echo "
	<script>
		alert('data gagal dihpus');
		document.location.href = 'index.php'
	 </script>
	";
}


/*if(hapus($id)>0)
{
	echo "
	<script>
		alert('data berhasil dihpus');
		document.location.href = 'index.php'
	 </script>
	";
}
else
{
	echo "
	<script>
		alert('data gagal dihpus');
		document.location.href = 'index.php'
	 </script>
	";
}
*/



?>