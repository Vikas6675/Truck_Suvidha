<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
 ">
 <style>
  .main-heading{
    text-align: center;
    
  }
  .main-heading-div{
   
   align-items: center;
    border-radius: 8px;
  text-align: center;
  }
  .main-heading-div2{
    align-items: center;
    text-align: center;
  }
  .logoutbtn{
    width: 7rem;
    border-radius: 8px;
    margin-bottom: 2px;
  }
 </style>
  </head>
 
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <form class="d-flex" role="search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
  <body class=" w-full bg-blue-500 ">
  
    <div class="min-h-screen px-28 py-2   bg-[url('./img/All.png')] backdrop-blur-3xl  w-full mt-1
    	 bg-center  bg-cover relative ">
       
      <!-- <span class=" bg-blue-500  text-black px-28"><img src=" log.png" alt="" class=" flex-auto  bg-blue-500  "></span> -->
      <header class="  mt-5  justify-end content-end ">
        <div>
<div class="main-heading-div bg-blue-300">
  <div class="main-heading-div2">
  <h1 class="main-heading fs-2 fw-semibold fst-italic p-2">Welcome <?php echo $_SESSION['username']?>!</h1>
  <form action="">
    <button class="logoutbtn btn btn-primary bg-blue-700" id="logoutbtn" type="submit">logout</button>
  </form>
  </div>
</div><br><br>


          <nav class=" flex justify-end  ">
            <div class=" ">

              <ul class=" text-center ">
                <li class=" list-none inline-block px-2 cursor-progress "> <span class=" py-2 capitalize hover:uppercase px-4 rounded-3xl
                  bg-blue-900 text-white hover:bg-green-900 hover:text-xl hover:bg-transparent  font-medium inline-block
              mr-4 "><a class=" px-2 no-underline text-white"  href="#"> Home </a>
                  </span>
                </li>
                <li class=" list-none inline-block px-2 cursor-progress"> <span class=" py-2 capitalize hover:uppercase px-8 rounded-3xl
                  bg-blue-900 text-white hover:bg-blue-900 hover:text-xl hover:bg-transparent  font-medium inline-block
                  mr-4 "><a class=" px-2 no-underline text-white" href="service.html"> service </a>
                  </span>
                </li>
                <li class=" list-none inline-block px-2  cursor-progress"><span class=" py-2 capitalize hover:bg-transparent  hover:uppercase  px-8 rounded-3xl bg-blue-900 text-white hover:bg-blue-900   hover:text-xl   font-medium inline-block mr-4
                "> <a class=" px-2 no-underline text-white" href="contact.html"> contact</a>
                  </span> </li>
                <li class=" list-none inline-block px-2  cursor-progress"><span class=" py-2 capitalize hover:bg-transparent  hover:uppercase  px-8 rounded-3xl bg-blue-900 text-white hover:bg-blue-900   hover:text-xl   font-medium inline-block mr-4
                    "> <a class=" px-2 no-underline text-white" href="company.html"> company</a>
                  </span> </li>
                <li class=" list-none inline-block px-2 cursor-progress"> <span class=" py-2 capitalize hover:uppercase hover:bg-transparent  px-8 rounded-3xl bg-blue-900 text-black hover:bg-blue-900   hover:text-xl font-medium inline-block mr-4
               "><a class=" px-2 no-underline text-white " href="about.html">About </a></span></li>
              </ul>

            </div>
          </nav>
      </header>
      <div class=" text-blue-900 text-center mt-12 ">
        <h1 class="text-6xl font-semibold hover:text-black"> <span class="text-orange-600"></span>Transportation<span
            class="text-orange-600 hover:text-black">.com </span>
        </h1>
      </div>

      <div class="mt-10 ml-30 text-center mx-12 py-30  ">
        <a href="truck-book.html" class="bg-green-500 text-white hover:bg-green-900   hover:text-xl py-2  px-8 rounded-3xl  font-medium inline-block mr-4
        hover:border-2 hover:border-yellow-200 "> Truck Book...</a>
        <!-- <a href="" class="bg-red-400 text-white hover:bg-blue-900  hover:text-xl py-2  px-8 rounded-3xl  font-medium inline-block mr-4
        hover:border-2 hover:border-yellow-200"> Find LOAD</a>
        <a href="" class="bg-orange-500 text-white hover:bg-blue-900  hover:text-xl py-2  px-8 rounded-3xl  font-medium inline-block mr-4
        hover:border-2 hover:border-yellow-200"> Find Truck</a> -->
        <!-- <a href="" class="bg-green-500 text-white hover:bg-blue-900  hover:text- xl py-2  px-8 rounded-3xl  font-medium inline-block mr-4
        hover:border-2 hover:border-yellow-200   ">Calculate Freidgeht </a> <span class="text-3xl text-blue-900 cursor-pointer rotate-90
      ">&#10148</span><span class="text-3xl text-blue-900 cursor-pointer
        ">&#10148</span><span class="text-3xl text-blue-900 cursor-pointer 
        ">&#10148</span> -->
      </div>
    </div>
    <!-- <img src="gallery_5.jpg" alt="" class="w-64 xl:absolute bottom-260 right-20"> -->
    </div>
    <footer>
      <span class="">
        <h1 class="text-6xl  text-blue-900 underline decoration-sky-500/30 font-semibold hover:text-black text-center">
          Let`s Order Now
        </h1>
      </span>
    </footer>
    <!-- <div class=" flex justify-center w-full bottom-10 ">
      <div><img src=" tru.png" alt="" class=" h-80">
        <p>lorem12</p>
      </div>
      <div><img src="T2.png" alt="" class=" h-80"></div>
    
      <div><img src="gallery_5.jpg" alt="" class=" h-80  "></div> -->

    </div>


  </body>

</html>





<!-- class="text-orange-400  hover:text red-700:">T</span>ansportation<span
            class="text-orange-400  hover:text-black after:">.com</span> -->