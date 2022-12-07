<?php 
include '../koneksi.php';

$username = $_GET['username'];

$sql_h = "DELETE FROM tbuser WHERE username = '$username'";
$query = mysqli_query($koneksi, $sql_h);

if ($query) {
	header("location: ../datauser.php");
}else{
	echo "gagal dihapus";
}
 ?>

