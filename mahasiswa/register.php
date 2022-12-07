
 <!DOCTYPE html>
<html>
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
  <!-- main -->
  <div class="main-w3layouts wrapper">
    <h1>Register</h1>
    <div class="main-agileinfo">
      <div class="agileits-top">    
     <form action="proses_register.php" method="post">
<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
        <div class="form-group row">
      <label for="nobp" class="col-sm-2 col-form-label">No Bp</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nobp" name="nobp" placeholder="No Bp">
      </div>
    </div>
 
    <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
      </div>
    </div>

    <div class="form-group row">
      <label for="nohp" class="col-sm-2 col-form-label">No Hp</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Hp">
      </div>
    </div>

        <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
      </div>
    </div>

       <div class="form-group row">
      <label for="suratpernyataan" class="col-sm-2 col-form-label">Surat Pernyataan</label>
      <div class="col-sm-10">
        <input type="file" name="suratpernyataan">
      </div>
    </div>

       <div class="form-group row">
      <label for="universitas" class="col-sm-2 col-form-label">Universitas / Sekolah</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="universitas_sekolah" name="universitas_sekolah" placeholder="Universitas / Sekolah">
      </div>
    </div>  

        <div class="form-group row">
      <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan">
      </div>
    </div>

        <div class="form-group row">
      <label for="bidang" class="col-sm-2 col-form-label">Bidang</label>
      <div class="col-sm-10">
       <select class="form-control" required="" name="bidang" >
        <option>--</option>
            <option>STI</option>
            <option>Distribusi</option>
            <option>ICON</option>
            <option>SDM</option>
          </select>
      </div>
    </div>

        <div class="form-group row">
      <label for="tanggalmasuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="tanggalmasuk" name="tanggalmasuk" placeholder="Tanggal Masuk">
      </div>
    </div>

        <div class="form-group row">
        <label for="tanggalselesai" class="col-sm-2 col-form-label">Tanggal Keluar</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="tanggalkeluar" name="tanggalkeluar" placeholder="Tanggal Keluar">
      </div>
    </div>

        <div class="form-group row">
     <label for="lamapkl" class="col-sm-2 col-form-label">Lama PKL</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lamapkl" name="lamapkl" placeholder="Lama PKL">
      </div>
    </div>

  <!--   <div class="form-group row">
    <label for="text" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" placeholder="Username">
    </div>
    </div> -->

    <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    </div>

   <div class="form-group row">
    <div class="col-sm-10">
      <a href="../login.php" class="btn btn-success">Login</a>
      <button type="submit" class="btn btn-primary" name="register">Register
    </button>
      </div> 
    </table>
    </form>
    </div>
    </body>
    </html> 

      </div>
    </div>
    <!-- copyright -->
    <div class="colorlibcopy-agile">
      <p>© Copyright © 2022 Aplikasi Absensi Magang PKL PLN Unit Induk WIlayah Provinsi Sumatera Barat . All rights reserved. Template by</p>
    </div>
    <!-- //copyright -->
    <ul class="colorlib-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <!-- //main -->
</body>
</html>