<?php


include 'koneksi.php';

//proses input
if (isset($_POST['simpan'])) {
  $id = $_POST['id'];
  $nobp = $_POST['nobp'];
  $password = ($_POST['password']);
  $nama = $_POST['nama'];
  $nohp = $_POST['nohp'];
  $email = $_POST['email'];
  $suratpernyataan = $_POST['suratpernyataan'];
  $universitas = $_POST['universitas'];
  $jurusan = $_POST['jurusan'];
  $prodi = $_POST['prodi'];
  $bidang = $_POST['bidang'];
  $tanggalmasuk = $_POST['tanggalmasuk'];
  $lamapkl = $_POST['lamapkl'];
  $tanggalselesai = $_POST['tanggalselesai'];

  if(isset($_POST['ubahfoto'])){ // Cek apakah user ingin mengubah fotonya atau tidak
    $foto     = $_FILES['inpfoto']['name'];
    $tmp      = $_FILES['inpfoto']['tmp_name'];
    $fotobaru = date('dmYHis').$foto;
    $path     = "../images/".$fotobaru;

    if(move_uploaded_file($tmp, $path)){ //awal move upload file
      $sql    = "SELECT * FROM tb_mahasiswa WHERE id = '".$id."' ";
      $query  = mysqli_query($koneksi, $sql);
      $hapus_f = mysqli_fetch_array($query);

//proses hapus gambar
      $file = "../images/".$hapus_f['foto'];
      unlink($file);//nama variabel yang ada di server

      // Proses ubah data ke Database
      $sql_f = "UPDATE tb_mahasiswa set nobp='$nobp', password='$password', nama='$nama', nohp='$nohp', email='$email', suratpernyataan='$suratpernyataan', universitas='$universitas', jurusan='$jurusan', prodi='$prodi', bidang='$bidang',tanggalmasuk='$tanggalmasuk', lamapkl='$lamapkl',tanggalselesai='$tanggalselesai' WHERE id='$id'";
      $ubah  = mysqli_query($koneksi, $sql_f);
      if($ubah){
        echo "<script>alert('Ubah Data Dengan ID  = ".$id." Berhasil') </script>";
        header('Location:index.php?m=index');
       
      } else {
        $sql    = "SELECT * FROM tb_mahasiswa WHERE id = '".$id."' ";
        $query  = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)) {
          echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
         
        }
      }
    } //akhir move upload file
    else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='datamahasiswa.php'>Kembali Ke data mahasiswa</a>";
    }
 } //akhir ubah foto
 else { //hanya untuk mengubah data
   $sql_d   = "UPDATE tb_mahasiswa set nobp='$nobp', password='$password', nama='$nama', nohp='$nohp', email='$email', suratpernyataan='$suratpernyataan', universitas='$universitas', jurusan='$jurusan', prodi='$prodi', bidang='$bidang',tanggalmasuk='$tanggalmasuk', lamapkl='$lamapkl',tanggalselesai='$tanggalselesai' WHERE id='$id'";
   $data    = mysqli_query($koneksi, $sql_d);
   if ($data) {
     echo "<script>alert('Ubah Data Dengan ID Mahasiswa = ".$id." Berhasil') </script>";
     header('Location:index.php?m=index');
   
   } else {
     $sql   = "SELECT * FROM tb_mahasiswa WHERE id = '".$id."' ";
     $query = mysqli_query($koneksi, $sql);
     while ($row = mysqli_fetch_array($query)) {
       echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
     
     }
   }
 } //akhir untuk mengubah data
}

?>
