<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Combrade_07 / Orders</title>

  <link rel="stylesheet" href="order_records.css">
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

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Combrade_07.php">Home</a>
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
            <a class="nav-link" href="About.php">About</a>
          </li>
         
        </ul>
      </div>
    </div>
  </div>
</nav>

<?php echo "<br><br><br><br>" ?>
   
    <table >
        <tr>
            <!-- <th>Name</th> -->
            <th>Serial Number </th>
            <th>UserId </th>
            <th>Name </th>
            <th>ContactDetails</th>
            <th> Registration Amount</th>
            <th>Email </th>
            <th>Order Type </th>
            <th>Discription </th>
            <th>Date & Time </th>

        </tr>

    

<?php
    // server connection
    $host="localhost";
    $user="root";
    $pass="";
    $db="userdata";

    $conn = mysqli_connect($host,$user,$pass,$db);

    if(isset($conn))
    {
       // echo "database connection successfully done...";
    }
    else{
        echo "check for database connection...";
    }

    $query = "SELECT * FROM `user_orders`";
    $table_query=mysqli_query($conn,$query);
    $record =mysqli_num_rows($table_query);

   // echo $record;

    if($record != 0 )
    {
       // echo " records are available";
       // $result = mysqli_fetch_assoc($table_query);
        //echo $result['username'];

        while($result =mysqli_fetch_assoc($table_query) )
        {
            echo "
                <tr style='height:30px;width: 100px;px;'>
                    <td>".$result['Serial']."</td>
                    <td>".$result['UserId']."</td>
                    <td>".$result['Name']."</td>
                    <td>".$result['Phone']."</td>
                    <td>".$result['RegistrationAmount']."</td>
                    <td>".$result['Email']."</td>
                    <td>".$result['OrderType']."</td>
                    <td>".$result['Discription']."</td>
                    <td>".$result['Time_Stamp']."</td>
                </tr>
            ";
        }
    }
    else
    {
        echo "no records found";
    }

?>
</table>
</body>
</html>