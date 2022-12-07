<?php 
//error_reporting(0);

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>
    <!-- Fontfaces CSS-->
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

</head>
<body class="animsition">
    <?php
                                    $id = $_SESSION['id'];
                                    include '../koneksi.php';
                                    $sql = "SELECT * FROM tb_mahasiswa WHERE id = '$id'";
                                    $query = mysqli_query($koneksi, $sql);
                                    $r = mysqli_fetch_array($query);

                                     ?>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
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
                          <a class="js-arrow" href="?m=awal">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a> 
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                               
                            </ul>
                        </li>
                        <li>
                            <a href="kehadiranmahasiswa.php">
                                <i class="fas fa-chart-bar"></i>Kehadiran Mahasiswa</a>
                        </li>
                        <li>
                            <a href="?m=mahasiswa&s=profil">
                                <i class="fas fa-table"></i>Profile</a>
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
                <h1>Hello <?php echo $_SESSION['nama']; ?></h1>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="?m=awal">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                          
                        </li>
                         <li>
                            <a href="kehadiranmahasiswa.php">
                                <i class="fas fa-chart-bar"></i>Kehadiran Mahasiswa</a>
                        </li>
                        <li class="active has-sub">
                            <a href="?m=mahasiswa&s=profil">
                                <i class="fas fa-chart-bar"></i>Profile</a>
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
                            <div class="header-button">
                    
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1" style="text-align: center;">Profil anda <?php echo $_SESSION['nama']; ?></h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        
                                </div>
                            </div>
                        </div>


                        <!-- FORM -->
                        <div class="row">
                           <div class="table-responsive table--no-card m-b-30">
                            <form action="modul/mahasiswa/keterangan_sv.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">

                                <table class="table table-borderless table-striped table-earning" >
                                        
                                        <tbody>
                                              
                                            <tr>
                                                <td>id</td>
                                                <td>
                                                
                                                <?php echo $r['id'];?>
                                                
                                            </td>
                                            </tr>
                                           
                                            <tr>
                                                <td>No Bp</td>
                                                <td><?php echo $r['nobp'];?></td>
                                            </tr>

                                            <tr>
                                            	<td>Nama</td>
                                            	<td><?php echo $r['nama'];?></td>
                                            </tr>

                                            <TR>
                                            	<td>No Hp</td>
                                            	<td><?php echo $r['nohp'];?></td>
                                            </TR>

                                             <tr>
                                                <td>Email</td>
                                                <td><?php echo $r['email'];?></td>
                                            </tr>

                                            <tr>
                                            <td>Surat Pernyataan</td>
                                            <td><img src="../images/<?php echo $r['suratpernyataan'];?>" style="width: 128px;height: 128px;"></td>
                                           </tr>

                                           <tr>
                                              <td>Universitas</td>
                                              <td><?php echo $r['universitas'];?></td>
                                           </tr>

                                           <tr>
                                           	<td>Jurusan</td>
                                           	<td><?php echo $r['jurusan'];?></td>
                                           </tr>

                                           <tr>
                                           	<td>Prodi</td>
                                           	<td><?php echo $r['prodi'];?> </td>
                                           </tr>
                                           <tr>
                                            <td>Bidang</td>
                                            <td><?php echo $r['bidang'];?></td>
                                           </tr>

                                           <tr>
                                            <td>Tanggal Masuk</td>
                                            <td><?php echo $r['tanggalmasuk'];?> </td>
                                           </tr>

                                            <tr>
                                            <td>Lama Pkl</td>
                                            <td><?php echo $r['lamapkl'];?> </td>
                                           </tr>

                                          <tr>
                                            <td>Tanggal Selesai</td>
                                            <td><?php echo $r['tanggalselesai'];?> </td>
                                           </tr>

                                           <tr>
                                           	<td>Foto</td>
                                           	<td><img src="../images/<?php echo $r['foto'];?>" style="width: 128px;height: 128px;"></td>
                                           </tr>

                                            <tr>
                                                <td><a href="?m=mahasiswa&s=edit&id=<?php echo $id;?>">EDIT</a></td>
                                               
                                            </tr>
                                            
                                      </tbody>
                                    </table>
                                        </div>
                            </form>
                                    
                                </div>    
                        </div>
                     

                        <!-- END FORM -->
                        
                        <div class="header-desktop">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
