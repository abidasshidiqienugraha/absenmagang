<?php 

include 'koneksi.php';

if (isset($_POST['simpan'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$userlevel = $_POST['userlevel'];
}

$save = "INSERT INTO tbuser SET username='$username', password='$password', userlevel='$userlevel'";
mysqli_query($koneksi, $save);

if ($save) {
	echo "sukses";
	header("location:datauser.php");
}else{
	echo "gagal disimpan";
}

 ?>