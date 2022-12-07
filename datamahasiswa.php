<?php
//error_reporting(0); 
require_once("koneksi.php");
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Input Mahasiswa</title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- end script-->
</head>

<body class="animsition">
      <?php 
    if (!isset($_SESSION['username'])) {
        header("location: index.php");
    }else {
        $username = $_SESSION['username'];  
    }

 ?>
     <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                   <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="admin2.php">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                
                            </ul>
                        </li>
                        <li>
                            <a href="datamahasiswa.php">
                                <i class="fas fa-chart-bar"></i>Input Mahasiswa</a>
                        </li>
                        <li>
                            <a href="datauser.php">
                                <i class="fas fa-table"></i>Data user</a>
                        </li>
                        <li>
                            <a href="databidang.php">
                                <i class="far fa-check-square"></i>Data Bidang</a>
                        </li>
                        <li>
                            <a href="data_kehadiran.php">
                                <i class="fas fa-calendar-alt"></i>Data Kehadiran</a>
                        </li>
                            <a href="data_keterangan.php">
                                <i class="fas fa-table"></i>Data Keterangan</a>
                        </li>
                       <li>
                            <a href="#"><i class="fas fa-calendar-alt"></i>Laporan</a>
                            <a href="#" title="">Laporan Harian</a>
                            <a href="#" title="">Laporan Bulanan</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-table"></i>Data Approval</a>
                        </li>
                         <li>
                            <a href="#"><i class="far fa-check-square"></i>Verifikasi</a>
                        </li>
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h2>Hello <?php echo $_SESSION['username']; ?></h2>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="admin2.php">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                          
                        </li>
                        <li class="active has-sub">
                            <a href="datamahasiswa.php">
                                <i class="fas fa-chart-bar"></i>Input Mahasiswa</a>
                        </li>
                        <li>
                            <a href="datauser.php">
                                <i class="fas fa-table"></i>Data User</a>
                        </li>
                        <li>
                            <a href="databidang.php">
                                <i class="far fa-check-square"></i>Data Bidang PLN</a>
                        </li>
                        <li>
                            <a href="data_kehadiran.php">
                                <i class="fas fa-calendar-alt"></i>Data Kehadiran</a>
                        </li>
                        <li>
                            <a href="data_keterangan.php">
                                <i class="fas fa-table"></i>Data Keterangan</a>
                        </li>
                       <li>
                            <a href="#"><i class="fas fa-calendar-alt"></i>Laporan</a>
                            <a href="#" title="">Laporan Harian</a>
                            <a href="#" title="">Laporan Bulanan</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-table"></i>Data Approval</a>
                        </li>
                         <li>
                            <a href="#"><i class="far fa-check-square"></i>Verifikasi</a>
                        </li>
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                           
                             <form class="form-header" action="prospenkar.php" method="POST">
                                <input class="au-input au-input--xl" autocomplete="off" type="text" name="cari" placeholder="Cari ID atau nama Mahasiswa" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                           <div class="table-responsive table--no-card m-b-30">
                            <form action="dt_mahasiswa_sv.php" enctype="multipart/form-data" method="post">
                                <div class="form-group">
                                <table class="table table-borderless table-striped table-earning" >
                                        
                                         <tbody>
                                            <tr>
                                                <td>Id</td>
                                                <td>
                                                <input type="text" class="form-control" maxlength="11" required="" name="id" autocomplete="off" size="25px" maxlength="25px">    
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>No Bp</td>
                                                <td><input type="text" class="form-control" required="" name="nobp" autocomplete="off">    
                                            </td>
                                            </tr>
                                             <tr>
                                                <td>Nama</td>
                                                <td>
                                                <input type="text" class="form-control" required="" name="nama" autocomplete="off">     
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td><input type="text" class="form-control" required="" name="email" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <td>Surat Pernyataan</td>
                                                <td><input type="file" name="suratpernyataan" required=""></td>
                                            </tr>
                                            <tr>
                                                <td>Universitas / Sekolah</td>
                                                <td><input type="text" class="form-control" required="" name="universitas_sekolah" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <td>Jurusan</td>
                                                <td><input type="text" class="form-control" required="" name="jurusan" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <td>Bidang</td>
                                                <td>
                                                <select class="form-control" required="" name="Bidang">
                                                    <option>--</option>
                                                    <option>STI</option>
                                                    <option>Distribusi</option>
                                                    <option>ICON</option>
                                                    <option>SDM</option>
                                                </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Masuk</td>
                                                <td><input type="text" class="form-control" required="" name="tanggalmasuk" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Keluar</td>
                                                <td><input type="text" class="form-control" required="" name="tanggalkeluar" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <td>Lama Pkl</td>
                                                <td><input type="text" class="form-control" required="" name="lamapkl" autocomplete="off"></td>
                                            </tr>
                                            </tr>

                                                <?php 

                                                include 'koneksi.php';

                                                $sql = "SELECT * FROM tb_mahasiswa";


                                                $hasil = mysqli_query($koneksi, $sql);

                                                

                                                while ($data = mysqli_fetch_array($hasil)) {
                                                    
                                                
                                                

                                                 ?>
                                                <option value="<?php echo $data['bidang'];?>"><?php echo $data['bidang']; ?></option>
                                                <?php } ?>
                                                   
                                                </select>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>Foto</td>
                                                <td><input type="file" name="foto" required=""></td>
                                            </tr>
                                            <tr>
                                                <td><button type="submit" name="simpan" class="btn btn-primary">Simpan</button></td>
                                                <td><input type="reset" name="" value="Batal" class="btn btn-danger"></td>
                                            </tr>
                                            
                                      </tbody>
                                    </table>
                                        </div>
                            </form>
                                    
                                </div>    
                        </div>
                        <?php 
                        include 'koneksi.php';
                         $query1 = "SELECT * FROM tb_mahasiswa ORDER BY id";

                        $pola = 'asc';
                        $polabaru = 'asc';

                        if (isset($_GET['orderby'])) {
                            $orderby = $_GET['orderby'];
                            $pola = $_GET['pola'];

                        $query1 = "SELECT * FROM tb_mahasiswa ORDER BY $orderby $pola";
                        mysqli_query($koneksi, $query1);
                        if ($pola=='asc') {
                            $polabaru = 'desc';
                        }else{
                            $polabaru = 'asc';
                        }

                        }
                         ?>
                        <div class="row">

                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                
                                 <th>Id</th>
                                 <th>Nama</th>
                                 <th>No Bp</th>
                                 <th>Email</th>
                                 <th>Surat Pernyataan</th>
                                 <th>Universitas / Sekolah</th>
                                 <th>Jurusan</th>
                                 <th>Bidang</th>
                                 <th>Tanggal Masuk</th>
                                 <th>Tanggal Keluar</th>
                                 <th>Lama Pkl</th>
                                 <th>Foto</th>
                                 <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <?php 
                                            $no = 1;
                                         ?>
                                        <tbody>
                                           
                                           <?php 
                                           $no++;
                                            include 'paging.php';

                                            ?>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$Previous'"; } ?>>Previous</a>
                </li>
                <?php 
                for($x=1;$x<=$total_halaman;$x++){
                    ?> 
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php
                }
                ?>              
                <li class="page-item">
                    <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                </li>
            </ul>
        
            <!-- Modal -->

            <!-- End Modal -->
                        <div class="row">
                            <div class="col-lg-6">
                           
                            </div>
                            <div class="col-lg-6">
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                            
                            </div>
                        </div>
                        <!--modal -->
                      
                            
                        <!-- END MODAL-->

            
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
