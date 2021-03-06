
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>COMBRADE_07 / Create new password</title>
    <link rel="stylesheet" href="Order_Style.css">
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
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title " id="offcanvasNavbarLabel">COMBRADE_07</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="Combrade_07.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Feature</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="Categories.html">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About.php">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="subadminlogin.php">Admin Login</a>
                        </li>
                        <a href="Login.php" ><button type="button" class="btn btn- bcolor ">Login | Sign-Up</button></a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <br><br><br><br><br><br>
    <div class="container mb-4">
        <form action="Forgot_Password_User_3.php" method ="post">
          
          <input type="password" id="fname" name="password1" placeholder="Enter password" required>
        <br><br>
          
          <input type="password" id="lname" name="password2" placeholder="confirm password" required>
        <br><br>
          <input type="submit" value="confirm credential">
        </form>
      </div>
</body>
<!-- footer -->
<div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="Combrade_07.php" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="Features.html" class="nav-link px-2 text-muted disabled" >Features</a></li>
        <li class="nav-item"><a href="About.php" class="nav-link px-2 text-muted">About</a></li>
      </ul>
      <p class="text-center text-muted">&copy; 2022 Enterprioses, Pune Maharastra</p>
    </footer>

</html>