<?php

    //accesing username and password user entered..
    echo "<br><br><br><br>";
    $adminid= $_POST['adminid'];
    $password= $_POST['password'];



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
            echo "connection successful";
        
    }


    //feaching details
    $query = "select * from admin where Admin_Id='$adminid' and Password='$password'";

    $table_query=mysqli_query($conn,$query);
    $record =mysqli_num_rows($table_query); 
    if($record == 1){
        echo "<center><div class='alert alert-success mb-0' role='alert'>
        Great job !!!
      </div></center>";

    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['adminid']=$adminid;
    $table = 'admin';
    setcookie('table',$table);
    header("location:Combrade_07.php");


    }
    else{
        
        echo "<center><div class='alert alert-danger mb-0' role='alert'>
        Invalid credential please try again !!!
      </div></center>";
      header("location:admin_login.php");
    }
?>