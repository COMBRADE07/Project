<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="userdata";

    // here we have to collect data from "signup_intermediate_1.php"  page....
    $fname = $_COOKIE["fname"]; 
    $lname = $_COOKIE["lname"];
    $email = $_COOKIE["email"];
    $contact = $_COOKIE["contact"];

    
   // echo $fname."<br>".$lname."<br>".$email."<br>".$contact."<br>";

    //here we have to collect data from "signuppnxt_intermediate.php" page...
    $username = $_COOKIE["username"];
    $data = $_COOKIE["password1"];
 

   // echo $username."<br>".$password1."<br>".$password2."<br>";






    $conn=mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        echo "Connection failed...";
    }
    else{
        echo "Connection successfully established<br>";
    }

    $value=password_hash($data,PASSWORD_BCRYPT);
    // inserting values into table
    $query="INSERT INTO `userdata` (`FName`, `LName`, `Email`, `Contact`, `UserId`, `Password1`) VALUES ('$fname', '$lname', '$email', '$contact', '$username', '$value');";
    $table_query=mysqli_query($conn,$query);
    if(!$table_query){
        echo "<center><div class='alert alert-danger mb-0' role='alert'>
        Username should be unique  !!!
      </div></center>";
    }
    else{
        
        header("location:Login.php");
        echo "New Row Added...";
    }

?>