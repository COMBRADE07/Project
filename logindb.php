<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="Database_2";

    $conn=mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        echo "Connection failed...";
    }
    else{
        echo "Connection successfully established<br>";
    }

    $username = $_POST["username"];   
    $password = $_POST["password"];
    $value=password_hash("usernameknown@123",PASSWORD_BCRYPT);
    // inserting values into table
    $query="INSERT INTO `user_data` (`ID`, `user`, `pass`) VALUES ('108', '$username', '$password');";
    $table_query=mysqli_query($conn,$query);
    if(!$table_query){
        echo "Something went wrong";
    }
    else{
        echo "New Row Added...";
    }

?>