<?php
session_start(); 
include 'koneksi.php';
if (isset($_POST['simpan'])) {
	
	$id = $_POST['id'];
	$nobp = $_POST['nobp'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $suratpernyataan = $_POST['suratpernyataan'];
    $universitas = $_POST['universitas_sekolah'];
    $jurusan = $_POST['jurusan'];
    $bidang = $_POST['bidang'];
    $tanggalmasuk = $_POST['tanggalmasuk'];
    $tanggalkeluar = $_POST['tanggalkeluar'];
    $lamapkl = $_POST['lamapkl'];



	//untuk gambar
	$suratpernyataan     = $_FILES['suratpernyataan']['nama'];
	$tmp      = $_FILES['suratpernyataan']['tmp_name'];
	$suratpernyataanbaru = date('dmYHis').$suratpernyataan;
	$path     = "images/".$suratpernyataanbaru;
}

if (move_uploaded_file($tmp, $path)) {
	$sql = "SELECT * FROM tb_mahasiswa WHERE id = '".$id."'";
	$tambah = mysqli_query($koneksi, $sql);
}

if ($row = mysqli_fetch_row($tambah)) {
echo "<script>alert('Data Dengan NOBP = ".$id." sudah ada') </script>";
		echo "<script>window.location.href = \"datamahasiswa.php\" </script>";

}

$query = "INSERT INTO tb_mahasiswa set id='$id', nobp='$nobp',nama='$nama',email='$email', suratpernyataan='$suratpernyataan', universitas_sekolah='$universitas', jurusan='$jurusan' bidang='$bidang',tanggalmasuk='$tanggalmasuk',tanggalkeluar='$tanggalkeluar', lamapkl='$lamapkl'";
mysqli_query($koneksi, $query);

if ($query) {
	header("location: datamahasiswa.php");
}else{
	echo "gagal";
}

 ?>