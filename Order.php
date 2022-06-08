<?php
  echo "<br><br><br>";
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
  {
    header("location:login.php");
    exit;
  }


  // //getting user details...
  $table = $_COOKIE["table"];
  // if($table == 'userdata')
  @$username_ = $_SESSION['username']; 
  

        //connection for server
        $host="localhost";
        $user="root";
        $pass="";
        $db="userdata";
    
        $conn=mysqli_connect($host,$user,$pass,$db);
        if(!$conn){
            echo "Connection failed...";
        }
        else{
          $query = "select * from userdata where UserId='$username_'";
          $table_query=mysqli_query($conn,$query);
          $record =mysqli_num_rows($table_query);
          if($record != 0 )
        {
            // echo " records are available";
            // $result = mysqli_fetch_assoc($table_query);
              //echo $result['username'];

            while($result =mysqli_fetch_assoc($table_query) )
            {
              $fn=$result['FName'];
              $ln=$result['LName'];
              $contact=$result['Contact'];
              $Email=$result['Email'];

              //setting whole name in varible and passed to next page
              $n1 = $fn." ".$ln;
              if($table == 'userdata'){
              setcookie($username_,$n1);}
            }
        }
        else
        {
            echo "no records found";
        }
        }
?>  
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha284-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW2" crossorigin="anonymous">

  <title>Combrade_07 / Order</title>
  <link rel="stylesheet" href="Order_Style.css">
  <link rel="icon" type="image/x-icon" href="images/Tab_ico.ico">
</head>

<body>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha284-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha284-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh21eOz1HGyDuCQ6wgnyJNSYdrPa02rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha284-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK2zEFEIsxhlmWl5/YESvpZ12" crossorigin="anonymous"></script>
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
            <li class="nav-item">
              <a class="nav-link active"  href="Combrade_07.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Feature</a>
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

                <?php
                    $table = $_COOKIE["table"];
                      if($table == 'admin' || $table == 'subadmin')
                      {
                        echo "<a class='nav-link' href='Display_order_records.php'>Checks for new order</a>";
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

               ?>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>

<?php
  if($table == 'userdata')
  {
      echo '
          <marquee  direction="left" scrollamount="10">
          <h3 style="color:green;"> Hurry up, Lets confirm your order.</h3>
          </marquee>
          ';
  }
  else{
        echo '
          <marquee  direction="left" scrollamount="10">
          <h3 style="color:green;">Hurry up, Lets go back and checks for new order. and do your job</h3>
          </marquee>
        ';

  }
?>
      <div class="container mb-4">
        <form action="Confirmation.php" method ="post">
        <label for="name">UserId</label>
          <input type="text" id="fname" name="userid" value="<?php echo $username_ ?>">
          <label for="name">Name</label>
          <input type="text" id="fname" name="name" value="<?php echo $fn." ".$ln?>" >

          <label for="contact">Phone Number</label>
          <input type="text" id="lname" name="phone" placeholder="Enter your Contact Number.." value="<?php echo $contact?>" required>

          <label for="contact">Registration Amount</label>
          <input type="text" id="lname" name="regAmount" placeholder="Enter your Contact Number.." value="50 $" disabled>
          <label for="contact">Email</label>
          <input type="text" id="lname" name="Email" placeholder="Enter your Email_id.." value="<?php echo $Email?>" required>


          <label for="Order Type">Order Type</label>

            <select name="OrderType">
            <option value="Select your order">select your order</option>
              <option value="Poster">Poster</option>
              <option value="Banner">Banner</option>
              <option value="Magazine">Magazine</option>
              <option value="Product Packaging">Product Packaging</option>
              <option value="Packet Packaging">Packet Packaging</option>
              <option value="Box Packaging">Box Packaging</option>
              <option value="Graphics Novel">Graphics Novel</option>
              <option value="Books Cover">Books Cover</option>
              <option value="Technical illustration">Technical illustration</option>
              <option value="App design">App design</option>
              <option value="Web design">Web design</option>
              <option value="Games interface">Games interface</option>
              <option value="VFX">VFX</option>
              <option value="Animation">Animation</option>
              <option value="Video games ">Video games </option>
              <option value="Singage">Singage</option>
              <option value="Wall Murals">Wall Murals</option>
              <option value="Event & Conference Spaces">Event & Conference Spaces</option>

            </select>

          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Discribe extra features what you want in it.." style="height:200px"></textarea>

          <?php 
                if( $table == 'subadmin'){
                echo'No Chance ...';}
                else{
                  echo'<input type="submit" value="order now" >';
                }
          ?>
        </form>
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