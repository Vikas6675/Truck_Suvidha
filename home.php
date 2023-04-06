<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location:../");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <!-- Site Metas -->
     <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Home page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
 <link href='https://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
      <link rel="stylesheet" href="truck-book.css">
<style>
</style>

</head>
<body>
  <!-- Navbar Section -->
<section style=" color: rgba(0, 0, 0, 0.5);">
  <nav class="fill bg-body-tertiary navbar navbar-expand-lg ">
  <div class="container-fluid">
  <a class="navbar-brand"><img class="nav_logo" src="img/trailer.png"> Truck Suvidha</a>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
      <li  class="nav-item"><a class="nav_ul_li_a" href="home.php">Home</a></li>
      <li  class="nav-item"><a class="nav_ul_li_a" href="about.html">ABOUT</a></li>
      <li  class="nav-item"><a class="nav_ul_li_a" href="service.html">SERVICE</a></li>
      <li  class="nav-item"><a class="nav_ul_li_a" href="company.html">COMPANY</a></li>
      <li  class="nav-item"><a class="nav_ul_li_a" href="contact.html">CONTACT US</a></li>
      <h5 class="user_name">Welcome  <?php echo $_SESSION['username']?>!</h5>
    </ul>
    <div class="dropdown">
            <button class="dropbtn"><img class="dropbtn1" src="https://img.icons8.com/external-flaticons-flat-flat-icons/1x/external-menu-web-flaticons-flat-flat-icons.png" /></button>
            <div class="dropdown-content">
            <form class="d-flex" role="search">
               <a class="btn_log btn btn-outline-success" href="login.html">Login</a>
                </form>
                <form class="d-flex" role="search">
               <a class="btn_log btn btn-outline-success" href="register.html">Register</a>
                </form>
                <form action="api/api.php" class="d-flex">
                  <button class="btn_log btn btn-outline-success" id="logoutbtn" name="logoutbtn" type="submit">Logout</button>
                </form>
            </div>
          </div>
  
  </div>
  </nav>
</section>

<div >
  <img class="landing-img" src="img/landing_pg_heroimage.png"/>
  <div class="book-now_ d-none d-md-block">
  <a class="book-now bg-info btn " href="truck-book.html"> Book Truck Now <img class="book-now-arrow arrow-right-long-solid" src="img/arrow-right-long-solid.svg" > </a>
</div>
</div>

<div>
        <div class="carousel">
          <ul class="slides">
            <input type="radio" name="radio-buttons" id="img-1" checked />
            <li class="slide-container">
              <div class="slide-image">
                <img src="img/Screenshot--1.png">
              </div>
              <div class="carousel-controls">
                <label for="img-4" class="prev-slide">
                  <span>&lsaquo;</span>
                </label>
                <label for="img-2" class="next-slide">
                  <span>&rsaquo;</span>
                </label>
              </div>
            </li>
            <input type="radio" name="radio-buttons" id="img-2" />
            <li class="slide-container">
              <div class="slide-image">
                <img src="img/Screenshot--2.png">
              <div class="carousel-controls">
                <label for="img-1" class="prev-slide">
                  <span>&lsaquo;</span>
                </label>
                <label for="img-3" class="next-slide">
                  <span>&rsaquo;</span>
                </label>
              </div>
            </li>
            <input type="radio" name="radio-buttons" id="img-3" />
            <li class="slide-container">
              <div class="slide-image">
                <img src="img/Screenshot--3.png">
                
              </div>
              <div class="carousel-controls">
                <label for="img-2" class="prev-slide">
                  <span>&lsaquo;</span>
                </label>
                <label for="img-4" class="next-slide">
                  <span>&rsaquo;</span>
                </label>
              </div>
            </li>
            <input type="radio" name="radio-buttons" id="img-4" />
            <li class="slide-container">
              <div class="slide-image">
                <img src="img/Screenshot--4.png">
                
              </div>
              <div class="carousel-controls">
                <label for="img-3" class="prev-slide">
                  <span>&lsaquo;</span>
                </label>
                <label for="img-5" class="next-slide">
                  <span>&rsaquo;</span>
                </label>
              </div>
            </li>
            <input type="radio" name="radio-buttons" id="img-5" />
            <li class="slide-container">
              <div class="slide-image">
                <img src="img/Screenshot--5.png">
                
              </div>
              <div class="carousel-controls">
                <label for="img-4" class="prev-slide">
                  <span>&lsaquo;</span>
                </label>
                <label for="img-1" class="next-slide">
                  <span>&rsaquo;</span>
                </label>
              </div>
            </li>
            <div class="carousel-dots">
              <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
              <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
              <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
              <label for="img-4" class="carousel-dot" id="img-dot-4"></label>
              <label for="img-5" class="carousel-dot" id="img-dot-5"></label>
            </div>
          </ul>
        </div>
      </div>
  
      <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="carousel-caption d-none d-md-block">
        <h3>Book Trucks for all India,</h3>
        <h3 class="h3-heading">Anytime, Anywhere</h3><br>
       
      </div>
      <img class="img-truck-1" src="https://img.freepik.com/premium-photo/semi-truck-with-cargo-trailer-driving-highway-hauling-goods-evening-delivery-transportation-logistics-concept_127089-19893.jpg" class="d-block w-100" alt="...">
      
    </div>
 </div>

 
   <!-- info section -->
   <section class="info_section bg-dark ">
      <div class="container ">
        <div class="row  mb-3 pb-4">
          <div class="col-md-3 info_logo">
            <a class="navbar-brand"><img class="nav_logo" src="img/trailer.png"> Truck Suvidha</a>
            <p>
              Book trucks, trailers, containers from thousands of trusted transport businesses and lorry owners all across India.
            </p><br>
            <div class="info_social">
              <div>
                <a href="">
                  <img src="images/fb.png" alt="">
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/twitter.png" alt="">
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/g-plus.png" alt="">
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/linkedin.png" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3 info_address">
            <h5>
              Address
            </h5>
            <p>
              Indore(M.P) 10014, IN
            </p>
            <p>

              (+91) 4685989694

            </p>
            <p>
              (+91) 4685989694
            </p>
            <p>
              <a href="">
                trucksuvidha@gmail.com
              </a>
            </p>
          </div>
          <div class="col-md-3 info_links">

            <div class="info_nav ">
              <nav class="">
                <ul>
                  <h5>
                    Links
                  </h5>
                  <li>
                    <a href="home.php"> Home</a>
                  </li>
                  <li>
                    <a href="about.html">About</a>
                  </li>
                  <li>
                    <a href="service.html"> Service</a>
                  </li>

                  <li>
                    <a href="company.html"> Company</a>
                  </li>
                  <li>
                    <a href="contact.html">Contact us</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-md-3 info_news ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <div>
                <input type="text" placeholder="Your Name">
              </div>
              <div>
                <input type="email" placeholder="Email">
              </div>
              <div class="d-flex justify-content-end">
                <button type="submit">
                  Subscribe
                </button>
              </div>
            </form>
          </div>
        </div>


      </div>
    </section>
    <!-- end info section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        Copyright@Truck Suvidha
      </p>
    </section>
    <!-- footer section -->

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>



</body>

</html>