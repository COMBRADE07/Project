<?php
    //server connection
    $host="localhost";
    $user="root";
    $pass="";
    $db="userdata";

    $name = $_POST['name'];
    $email =$_POST['email'];
    $adminid = $_POST['adminid'];
    $password = $_POST['password'];

    $conn=mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        echo "Connection failed...";
    }
    else{
        echo "Connection successfully established<br>";
    }

    $query="INSERT INTO `subadmin` (`Name`, `Email`, `Adminid`, `Password`) VALUES ('$name', '$email', '$adminid', '$password');";
    $table_query=mysqli_query($conn,$query);
    if(!$table_query){
        echo "<center><div class='alert alert-danger mb-0' role='alert'>
        Username should be unique  !!!
      </div></center>";
    }
    else{
        echo "New Row Added...";
        header("location:subadminlogin.php");
    }


?>