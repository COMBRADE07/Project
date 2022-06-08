<?php
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
  {
    header("location:login.php");
    exit;
  }
?>  
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>COMBRADE_07</title>

  <link rel="stylesheet" href="Combrade_07_Style.css">
  <link rel="icon" type="image/x-icon" href="images/Tab_ico.ico">
</head>


<body>
<?php

?>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  <!-- navebar -->
  <nav class="navbar navbar-light bg-light fixed-top nb">
    <div class="container-fluid">
      <a class="navbar-brand">
        <img class="logo-nav logo" src="images/logo.png" width="50px" height="50px" /></a>
      <a class="navbar-brand text-primary COMBRADE_07" href="#">COMBRADE_07</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title " id="offcanvasNavbarLabel">COMBRADE_07</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li>
                <?php 
                $table = $_COOKIE["table"];
                    if($table == 'userdata')
                    {
                      echo "Welcome: ";
                      $user = $_SESSION['username'];
                      echo $user;
                      
                      
                    }
                    else if($table == 'admin'){
                      echo "Admin: ";
                      echo $_SESSION['adminid'];
                    }
                    else if($table == 'subadmin')
                    {
                      echo "Developer: ";
                      echo $_SESSION['subadminid']; 
                    }
                    else{

                    }

                ?>
            </li>
            <li class="nav-item">
              <a class="nav-link active"  href="Combrade_07.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Feature.php">Feature</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Categories.html">Categories</a>
            </li>
            <li class="nav-item">
            <?php
                    $table = $_COOKIE["table"];
                     if($table == 'userdata')
                     {
                      echo "<a class='nav-link' href='Order.php'>order</a>";
                     }
              ?>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.php">About</a>
            </li>
            <li class="nav-item">

                  <?php
                      $table = $_COOKIE["table"];
                        if( $table == 'subadmin')
                        {
                          echo "<a class='nav-link' href='admin_login.php'>Admin Login</a>";
                          echo "<a class='nav-link' href='Display_order_records.php'>Checks for new order</a>";
                        }
                        else if($table == 'admin')
                        {
                          echo "<a class='nav-link' href='Display_order_records.php'>Checks for new order</a>";
                        }

                  ?>
              </li>

            <li class="nav-item">
              <?php
                if($table == 'admin')
                {
                  
                  echo "<a class='nav-link' href='Add_new_admin.html'>add new sub admin</a>";
                  echo "<a class='nav-link' href='remove_sub_admin.html'>remove sub admin</a>";
                  
                }
              ?>
            </li>
            
                        <?php
                            
                          if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true)
                          {
                            echo "<a href='Logout.php' ><button type='button' class='btn btn- bcolor mb-1 pb2'>Logout</button></a>";
                            
                          }
                          else{
                            echo "<a href='Login.php' ><button type='button' class='btn btn- bcolor mb-1 pb2'>Login | Sign-Up</button></a>";
                          }
                        ?> 

          </ul>
        </div>
      </div>
    </div>
  </nav>
<!-- welcome string -->
<?php
  echo "<br><br><br>";
?>
  <!--carousel start-->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/abc.jpg" class="d-block w-100" width="700px" height="500px" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-white">Trend </h3>

        </div>
      </div>
      <div class="carousel-item">
        <img src="images/rias.webp" class="d-block w-100" width="700px" height="500px" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-white">Trend 1</h3>

        </div>
      </div>
      <div class="carousel-item">
        <img src="images/abc1.jpg" class="d-block w-100" width="700px" height="500px" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-white">Trend 2</h3>

        </div>
      </div>
      <div class="carousel-item">
        <img src="images/graphics.jpg" class="d-block w-100" width="700px" height="500px" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-white">Trend 3</h3>

        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--carousel end-->

  <marquee scrollamount="13">
  <div class="row mt-2 ml-4">
    <div class="col-sm-3">
      <div class="box1">
        <div class="card-body">
          <h1 class="card-text popup">50k<sup>+</sup></h1>
          <h5 class="card-title text-danger">Clients</h5>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="box1">
        <div class="card-body justify-content-center">
          <h1 class="card-text popup">38<sup>+</sup></h1>
          <h5 class="card-title text-danger">Working experience(months)
            </h5>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="box1">
        <div class="card-body">
          <h1 class="card-text popup">800<sup>+</sup></h1>
          <h5 class="card-title text-danger">Projets</h5>

        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="box1">
        <div class="card-body">
          <h1 class="card-text popup">A<sup>+</sup></h1>
          <h5 class="card-title text-danger">Quality </h5>

        </div>
      </div>
    </div>
  </div>
  </div>
                        </marquee>
  <!--about start -->
  <section id="about" class="Design_Text">
    <div class="row align-items-center">
      <div class="col-md-6 image">
        <img class="image" src="images/graphics.jpg" width="80%">
      </div>
      <div class="col-md-6 info text  text-white">
        <div class="text1">
          <h3><mark><b>What is graphic design?</b></mark></h3>
        </div>
        <p> Graphic design is the creation of visual compositions to solve problems and communicate ideas through
          typography, imagery, color and form. There's no one way to do that, and that’s why there are several types of
          graphic design, each with their own area of specialization.</p>

      </div>
    </div>
  </section>

  <!-- 1. Visual Identity Graphic Design.  -->
  <div class="container-fluid mt-2 align-item-center ">
    <h1 class="design_types text-danger"><a href="Categories.html" class="nav-link">1.Visual Identity Graphic Designing
      </a></h1>
  </div>
  <div class="row row-cols-1 row-cols-md-3 g-4 ">
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded ">
        <img src="images/ad1.jpg" class="card-img-top" alt="..." height="250" width="64">
        <div class="Card_Text"><center> <a href="poster.html">Posters</a> </center></div>
      </div>
    </div>
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded ">
        <img src="images/ad1" class="card-img-top" alt="ad2" height="250" width="50">
        <center class="Card_Text"><a href="banner.html"> Banner </a> </center>
      </div>
    </div>
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded  ">
        <img src="images/ad3" class="card-img-top" alt="..." height="250" width="50">
        <center class="Card_Text">  <a href="magazine.html"> Magazine </a> </center>
      </div>
      <!-- End of Advertising  -->
    </div>
  </div>

  <!-- 2.Packaging graphic design -->
  <div class="container-fluid mt-2 align-item-center">
    <h1 class="design_types text-danger"><a href="Categories.html" class="nav-link">2. Packaging Graphic Design
      </a></h1>
  </div>
  <div class="row row-cols-1 row-cols-md-3 g-4 ">
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded ">
        <img src="images/PPD_1" class="card-img-top" alt="..." height="250" width="50">
        <center class="Card_Text"><a href="product packaging.html"> Product Packaging </a>  </center>
      </div>
    </div>
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded ">
        <img src="images/PPD_2" class="card-img-top" alt="..." height="250" width="50">
        <center class="Card_Text"><a href="packet packging.html">Packet Packaging</a> </center>
      </div>
    </div>
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded ">
        <img src="images/PPD_3" class="card-img-top" alt="..."  height="250" width="50">
        <center class="Card_Text"><a href="box packaging.html">Box Packaging</a> </center>
      </div>
    </div>
  </div>
  <!-- End of Packaging graphic design -->


  <!-- 3. Art and illustration for graphic design  -->
  <div class="container-fluid mt-2 align-item-center">
    <h1 class="design_types text-danger"><a href="Categories.html" class="nav-link">3. Art and Illustration For Graphic Design
      </a></h1>
  </div>
  <div class="row row-cols-1 row-cols-md-3 g-4 ">
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded ">
        <img src="images/AIG_1" class="card-img-top" alt="..." height="250" width="50">
        <center class="Card_Text"><a href="Graphic novels.html">Graphic novels</a></center>
      </div>
    </div>
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded ">
        <img src="images/AIG_2" class="card-img-top" alt="..." height="250" width="50">
        <center class="Card_Text"><a href="Book Covers.html">Book Covers</a></center>
      </div>
    </div>
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded ">
        <img src="images/AIG_3" class="card-img-top" alt="..." height="250" width="50">
        <center class="Card_Text"><a href="Technical illustration.html">Technical illustration</a> </center>
      </div>
    </div>
  </div>
  <!-- End of Art and illustration for graphic design -->

  <!-- 4. UI Designs  -->
  <div class="container-fluid mt-2 align-item-center">
    <h1 class="design_types text-danger"><a href="Categories.html" class="nav-link">4. UI Designs
      </a></h1>
  </div>
  <div class="row row-cols-1 row-cols-md-3 g-4 ">
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded ">
        <img src="images/UI_1" class="card-img-top" alt="..." height="250" width="50">
        <center class="Card_Text"><a href="App desing.html">App design</a> </center>
      </div>
    </div>
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded ">
        <img src="images/UI_2" class="card-img-top" alt="..." height="250" width="50">
        <center class="Card_Text"><a href="Web Page Design.html"> Web page design</a> </center>
      </div>
    </div>
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded ">
        <img src="images/UI_3" class="card-img-top" alt="..." height="250" width="50">
        <center class="Card_Text"><a href="Game Interface.html">Game interfaces</a></center>
      </div>
    </div>
  </div>
  <!-- End of UI Designs -->
  
  </div>
  
   <!-- 5. motion graphic Design.  -->
   <div class="container-fluid mt-2 align-item-center">
    <h1 class="design_types text-danger"><a href="Categories.html" class="nav-link">5. Motion Graphic Design
      </a></h1>
  </div>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded ">
        <img src="images/vfx.jpg" class="card-img-top" alt="..." height="250" width="64">
        <center class="Card_Text"> <a href="Vfx.html">VFX</a> </center>
      </div>
    </div>
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded">
        <img src="images/animetion.png" class="card-img-top" alt="ad2" height="250" width="50">
        <center class="Card_Text"> <a href="Animetion.html">Animetion</a></center>
      </div>
    </div>
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded ">
        <img src="images/video game.jpg" class="card-img-top" alt="..." height="250" width="50">
        <center class="Card_Text"><a href="Video Games.html">Video Games</a></center>
      </div>
      <!-- End of motion graphic Design  -->
    </div>
  </div>
   <!-- 6. Environmental Graphic Design.  -->
   <div class="container-fluid mt-2 align-item-center">
    <h1 class="design_types text-danger"><a href="Categories.html" class="nav-link">6. Environmental Graphic Design
      </a></h1>
  </div>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded ">
        <img src="images/Signage.jpg" class="card-img-top" alt="..." height="250" width="64">
        <center class="Card_Text"> <a href="Signage.html">Signage</a>  </center>
      </div>
    </div>
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded">
        <img src="images/Wall Murals.jpg" class="card-img-top" alt="ad2" height="250" width="50">
        <center class="Card_Text"><a href="wall Murals.html">Wall Murals</a> </center>
      </div>
    </div>
    <div class="col">
      <div class="card h-80 shadow-lg mb-5 bg-body rounded ">
        <img src="images/Events.png" class="card-img-top" alt="..." height="250" width="50">
        <center class="Card_Text"><a href="Event And Conference Spaces.html">Event & Conference Spaces</a>   </center>
      </div>
      <!-- End of environmental graphic Design  -->
    </div>
  </div>

    </div>
</body>

  <!-- footer -->
  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="Combrade_07.php" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="Features.html" class="nav-link px-2 text-muted">Features</a></li>
        <li class="nav-item"><a href="About.php" class="nav-link px-2 text-muted">About</a></li>
      </ul>
      <p class="text-center text-muted">&copy; 2022 Enterprioses, Pune Maharastra</p>
    </footer>

</html>