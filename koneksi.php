<?php 
$koneksi = mysqli_connect("localhost", "root", "", "absenmagang");

if (mysqli_connect_errno()) {
	echo "koneksi gagal " . mysql_connect_error();
}
?>