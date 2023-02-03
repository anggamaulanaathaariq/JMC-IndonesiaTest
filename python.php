<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="icon" type="image/png" href="images/icon/logokursus.png">
    <title>KOERSOS &mdash; Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/lightgallery.min.css">    
    
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    
    <link rel="stylesheet" href="css/swiper.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  <?php 
	session_start();
 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
  header("location:index.php");
}
?>

	
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
  
    <header class="site-navbar py-3 border-bottom" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">KOERSOS</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class=""><a href="services.php">PYTHON</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
            <tr><div align="right"><a href="logout.php">Logout</a></div></tr>
            </div>
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
          </div>

        </div>
      </div>
      
    </header>

    <div class="row site-section">
            <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5">
              <img src="images/koersos/php.jpeg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
              <h2> <a href="https://www.youtube.com/watch?v=l1W2OwV5rgY&list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6" class="text-black font-weight-light mb-4">Tutorial</a></h2>
            <p class="mb-4">Berisi cara menggunakan bahasa pemrograman</p>
              <p>
                <!-- <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a> -->
                <!-- <a href="https://www.instagram.com/anggmaulana_/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="https://www.facebook.com/angga.maulaba.3" class="pl-3 pr-3"><span class="icon-facebook"></span></a> -->
              </p>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5">
              <img src="images/koersos/kontenphp.png" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
              <h2> <a href="https://www.facebook.com/groups/phpid/posts/10159571231521101/"class="text-black font-weight-light mb-4">Konten</h2>
              <p class="mb-4">Konten menarik untuk pembelajaran PHP</p>
              <p>
                <!-- <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a> -->
                <!-- <a href="https://www.instagram.com/nortonrafli/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="" class="pl-3 pr-3"><span class="icon-facebook"></span></a> -->
              </p>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5">
              <img src="images/koersos/materiphp.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
              <h2> <a href="https://jagongoding.com/web/php/dasar/overview/ " class="text-black font-weight-light mb-4">Materi</a></h2>
              <p class="mb-4">Materi pelatihan & contoh soal</p>
              <p>
                <!-- <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a> -->
                <!-- <a href="https://www.instagram.com/agussubag/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="https://www.facebook.com/agus.arkem?__tn__=%2Cd-]-h-R&eid=ARBAnwLsmZViC61pyxzcpJUyKdllAwtygtub5P72O-1bsE3Vqzh1anhG80fg-TUtsmSzuHdz0D-WXlKG" class="pl-3 pr-3"><span class="icon-facebook"></span></a> -->
              </p>
            </div>
          </div>
        </div>

  <div class="site-section"  data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">Langganan</h2>
            </div>
          </div>
          <div class="box">
          <center><a href="order.php"><img src="images/icon/logo1.png" alt="Image" width="200" ></center>
          <br>
                <h3><span><a href="order.php" class="text-center mb-4 d-block">Pembelajaran PHP</a></span></h3>
                <p><span class="text-center mb-4 d-block">Materi Pembelajaran PHP</p>
                <p><span class="text-center mb-4 d-block font-weight-bold text-primary">Rp.100.000,-</p></span>
            </div>
            
            <!-- <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
              <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                <span class="icon flaticon-video-play display-3 text-primary mb-4 d-block"></span>
                <h3><a href="order6.php" class="text-black h4">Video Editing</a></h3>
                <p>Menawarkan jasa untuk mengedit vidio.</p>
                <p><strong class="font-weight-bold text-primary">Rp.400.000,-</strong></p>
              </div>
            </div> -->

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer py-4">
    <div class="container-fluid text-center">
      <p>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script>  KOERSOS | Website <a href="" target="_blank" ></a>  
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
    </div>
  </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/picturefill.min.js"></script>
  <script src="js/lightgallery-all.min.js"></script>
  <script src="js/jquery.mousewheel.min.js"></script>

  <script src="js/main.js"></script>
  
  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>
    
  </body>
</html>