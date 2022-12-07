<?php 
  session_start();
  require_once("../koneksi.php");
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "insert into tbuser (username, password, userlevel) value ('$username', '$password', 'User')";
  $query = $koneksi->query($sql);

  if ($query) {
     echo 'berhasil';

  }else{
      echo 'gagal';
  }  
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
 
  $sql = "insert into tb_mahasiswa (nobp,nama,email,suratpernyataan,universitas_sekolah,jurusan,bidang,tanggalmasuk,tanggalkeluar,lamapkl) value  ('$nobp','$nama','$email','$suratpernyataan','$universitas','$jurusan','$bidang','$tanggalmasuk','$tanggalkeluar','$lamapkl')";
  $query=$koneksi->query($sql);

 if ($query) {
     echo 'berhasil';

  }else{
      echo 'gagal';
 }  
?>