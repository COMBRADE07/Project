<?php

    $adminid=$_POST['subadminid'];
    $password= $_POST['password'];

    //server connection
    $host="localhost";
    $user="root";
    $pass="";
    $db="userdata";

    $conn=mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        echo "Connection failed...";
    }
    else{
       // echo "Connection successfully established<br>";
    }

    $query="select * from subadmin where Adminid ='$adminid' and Password='$password';";
    $table_query=mysqli_query($conn,$query);
    $record =mysqli_num_rows($table_query); 
    if($record == 1){
            echo "<center><div class='alert alert-success mb-0' role='alert'>
            Great job !!!
            </div></center>";

            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['subadminid']=$adminid;
            $table = 'subadmin';
            setcookie('table',$table);
            
            header("location:Combrade_07.php");
    }
    else{
        echo "Please check your credential";
    }
?>