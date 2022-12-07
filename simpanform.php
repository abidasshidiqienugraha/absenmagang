<?php
include_once("koneksi.php");

$query = "insert into tbuser (username,password,userlevel) value ('$_POST[username]', '$_POST[password]','$_POST[user_level]' ) ";
$sql = $koneksi->query($query);
if ($sql) {
	echo "berhasil";
}else{
	echo "Gagal";
}