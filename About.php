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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <title>About</title>
  <link rel="stylesheet" href="About_Style.css">
  <link rel="icon" type="image/x-icon" href="images/Tab_ico.ico">
</head>

<body>


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
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-2">
        <?php 
                $table = $_COOKIE["table"];
                    if($table == 'userdata')
                    {
                      echo "user: ";
                      echo $_SESSION['username'];
                      
                    }
                    else if($table == 'admin'){
                      echo "Admin: ";
                      echo $_SESSION['adminid'];
                    }
                    else if($table == 'subadmin')
                    {
                      echo "subadmin: ";
                      echo $_SESSION['subadminid']; 
                    }
                    else{

                    }
          ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Combrade_07.php">Home</a>
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
          <?php
                            
                       if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true)
                        {
                          echo "<a href='Logout.php' ><button type='button' class='btn bcolor1 mb-2 pb2'>Logout</button></a>";
                          
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



<div class="container-fluid about text-center ">
  <h2 class="developer">
    <b>
      Great to see you developer are waiting for you !
    </b>
  </h2>
  <!-- Rhutik Chaudhari -->
  <div class="container-fluid Rhutik ">
    <h2 class="name_1 ">
      Rhutik Chaudhari
    </h2>
    <h5 class="text_1">
      Prof. Ramkrishna More College Akurdi,
    </h5>
    <h5 class="text_11">
      Pune-33.
    </h5>
    <div class="icon">
      <a href="https://www.facebook.com/rhutik.chaudhari.1/"> <i class="bi bi-facebook"></i></a>
      <a href="https://www.instagram.com/_combrade_07_/"> <i class="bi bi-instagram"></i></a>
      <a href="https://twitter.com/Combrade_07"> <i class="bi bi-twitter"></i></a>

    </div>
  </div>
  <div class="container-fluid Vikrant">
    <h2 class="name_2">
      Vikrant Chemate
    </h2>
    <h5 class="text_2">
      Prof. Ramkrishna More College Akurdi,
    </h5>
    <h5 class="text_22">
      Pune-33.
    </h5>
    <div class="icon2">
      <a href="https://facebook.com"> <i class="bi bi-facebook"></i></a>
      <a href="https://facebook.com"> <i class="bi bi-instagram"></i></a>
      <a href="https://facebook.com"> <i class="bi bi-twitter"></i></a>

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