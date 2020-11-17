<?php
	include 'konek.php';

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$hp = $_POST['hp'];
	$prodi = $_POST['prodi'];
	
	// query SQL untuk insert data
$query="INSERT INTO vivinwn195410207.user SET nim='$nim',nama='$nama',email='$email',hp='$hp',prodi='$prodi'";
mysqli_query($konek, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>
