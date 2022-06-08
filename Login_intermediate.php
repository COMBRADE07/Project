<?php
    echo "<br><br><br><br>";    
    echo "<center><div class='alert alert-danger mb-0' role='alert'>
       Invalid password please try again !!!
      </div></center>";
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

    <title>COMBRADE_07 / login</title>
    <link rel="stylesheet" href="Combrade_07_Style.css">
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
                            <a class="nav-link" href="Categories.html">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About.html">About</a>
                        </li>
                        <a href="Login.html" ><button type="button" class="btn btn- bcolor ">Login | Sign-Up</button></a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- login page -->
    <section class="h-100 gradient-form mt-4" style=" background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-6">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-10">
                                <div class="card-body p-md-5 mx-md-4 mt-4">

                                    <div class="text-center">

                                        <h4 class="mt-4 pt-1 mb-2 pb-2"><center>We are The Combrade_07 Team</center></h4>
                                    </div>

                                    <form action="templogindata.php" method="post">
                                        <p>Please login to your account</p>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form2Example11" name="username" class="form-control"
                                                placeholder="Username" required />

                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="form2Example22" class="form-control"
                                                placeholder="Password" required />

                                        </div>

                                        <div class="text-center pt-1 mb-2 pb-1 d-grid gap-2">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-1 "
                                                type="submit">Log in</button>

                                            <a class="text-muted nav-link" href="#!">Forgot password?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <a href="signup.html"><button type="button" class="btn btn-outline-danger">create new</button></a>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<!-- footer -->
<div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="Combrade_07.php" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="Features.html" class="nav-link px-2 text-muted">Features</a></li>
        <li class="nav-item"><a href="About.html" class="nav-link px-2 text-muted">About</a></li>
      </ul>
      <p class="text-center text-muted">&copy; 2022 Enterprioses, Pune Maharastra</p>
    </footer>

</html>