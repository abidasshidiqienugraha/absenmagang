  <?php 
  session_start();
  require_once("koneksi.php");
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM tbuser WHERE password='$password'";
  $query = $koneksi->query($sql);
  $hasil = $query->fetch_assoc();

  if ($query->num_rows == 0) {

  $sql = "SELECT * FROM tb_mahasiswa WHERE nobp='$username' AND password='$password ";
  $login=mysqli_query($koneksi,$sql);
  $ketemu=mysqli_num_rows($login);
  $b=mysqli_fetch_array($login);
if($ketemu>0){
    session_start();
    $_SESSION['id']   = $b['id'];
    $_SESSION['nobp'] = $b['nobp'];
    $_SESSION['nama'] = $b['nama'];
    $_SESSION['email'] = $b['email'];
    $_SESSION['universitas'] = $b['universitas'];
    $_SESSION['jurusan'] = $b['jurusan'];
    $_SESSION['bidang'] = $b['bidang'];
    $_SESSION['tanggalmasuk'] = $b['tanggalmasuk'];
    $_SESSION['tanggalselesai'] = $b['tanggalkeluar'];
    $_SESSION['lamapkl'] = $b['lamapkl'];
    header("location: mahasiswa/index.php?m=awal");
}else{
    
     echo '<script language="javascript">';
         echo 'alert ("Username/Password ada yang salah, atau akun anda belum Aktif")';
     echo '</script>';
   // header("location: login.php");
}

  }else{
  if ($password <> $hasil['password']) {
      echo "<div align='center'>password salah! <a href='login.php'>back</a></div>";
    }else {
      $_SESSION['username'] = $hasil['username'];
       header('location:admin2.php');
    }
}
?>