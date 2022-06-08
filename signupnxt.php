<?php


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

    <!--external css file-->
    <link rel="stylesheet" href="project.css" />

    <title>Combrade_07 / Register</title>
    <link rel="stylesheet" href="Combrade_07_Style.css">
    <link rel="icon" type="image/x-icon" href="images/Tab_ico.ico">

    <script>
        function Terms() {
            alert("Important information for clients of Combrade_07 Design and general visitors to this site Unless otherwise specified and/or credited all images, artwork, text and graphics, of this site, are the copyright of Combrade_07 Design. All rights reserved. All other images are the copyright and/or trademark of the respective owners. Designs, original art and clip art presented are for the use of the authorized client only. All art, images, designs, and material are copyright of Combrade_07 Design and may not be resold, added to design or art collections of any nature or any other unauthorized form of distribution or reproduction without express written permission by Combrade_07 Design.");
        }
        function myfunction(){
            alert("invalid password");
        }
    </script>
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
                            <a class="nav-link disabled" href="#">Feature</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="Categories.php">Categories</a>
                        </li>
                        <li class="nav-item disabled">
                            <a class="nav-link" href="#">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About.php">About</a>
                        </li>
                        <a href="Login.html"><button type="button" class="btn btn- bcolor ">Login | Sign-Up</button></a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>




                                    
                                    <form class="mx-1 mx-md-4" action="signupnxt_intermediate.php" method="post">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control"
                                                  name="username"  placeholder=" Username" required/>

                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4c" class="form-control"
                                                name="password1"   placeholder="Create New Password" required/>

                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" class="form-control"
                                                name="password2"   placeholder=" Confirm password" required/>

                                            </div>
                                        </div>


                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example3c" required/>
                                            <label class="form-check-label" for="form2Example3">

                                                I agree <a href="#" onclick="Terms()">terms and
                                                    conditions. </a>

                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4 ">
                                            <button type="submit" class="btn btn-primary btn-lg ">Register</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="images/login_signup_page.png"
                                        class="img-fluid" alt="Sample image">

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
            <li class="nav-item"><a href="About.php" class="nav-link px-2 text-muted">About</a></li>
        </ul>
        <p class="text-center text-muted">&copy; 2022 Enterprioses, Pune Maharastra</p>
    </footer>

</html>