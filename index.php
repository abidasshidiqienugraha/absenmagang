  <?php
session_start();
include ("koneksi.php");

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aplikasi Absensi Magang PLN Wilayah Induk Provinsi Sumatera Barat - Home</title>
	<link rel="icon" href="img/Logo_PLN.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img src="img/" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="#login">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="#login" rel="page-scroll">Login</a></li>
							</li>
            </ul>

            
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->


  <main class="side-main">
    <!--================ Hero sm Banner start =================-->      
    <section class="hero-banner mb-30px">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/logokaryawan1.jpeg" alt="">
            </div>
          </div>
          <div class="col-lg-5 pt-5">
            <div class="hero-banner__content">
              <h1>Tentang Website Ini</h1>
              <p>Website ini berfungsi sebagai absensi mahasiswa magang dan sebagai sistem absensi magang pkl di PT PLN Unit Induk Wilayah Provinsi Sumatera Barat.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero sm Banner end =================-->

    <!--================ Feature section end =================-->      

    <!-- Login Feature Section Start -->

    <section class="section-margin">
      
        <div class="row content" id="login">
      <div class="col-lg-12 danger text-center zero-panel">
        <div class="col-lg-12 zero-panel-content">
          <h1> LOGIN SEBAGAI .... </h1>
        
        </div>
        <br>
        <ul class="list-inline" id="chart-skill">
          <li><a href="login.php" target="_blank"><button class="btn btn-warning" style="size: 50px;">Login </button></a>
          </li><br>
          <li><a href="mahasiswa/register.php" target="_blank"><button class="btn btn-primary" style="size: 50px;">Register</button></a>
          </li>
          
        </ul>
      </div>
    </div>
    </section>


    <!-- Login Feature Section End -->
    
  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					
				</div>
				<div class="col-xl-4 col-md-8 mb-4 mb-xl-0 single-footer-widget">
				
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom row align-items-center text-center text-lg-center">
				<p class="footer-text m-0 col-lg-12 col-md-12">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Mahasiswa PKL Politeknik Negeri Padang All rights reserved </p>
				</div>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>