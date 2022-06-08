<?php
    //server connection
    $host="localhost";
    $user="root";
    $pass="";
    $db="userdata";

    $subadminid = $_POST['subadminid'];

    $conn = mysqli_connect($host,$user,$pass,$db);
    if(isset($conn))
    {
       //echo "database connection successfully done...<br>";
    }
    else{
        echo "database connection failed...";
    }

    $query = "DELETE FROM `subadmin` WHERE `subadmin`.`Adminid` = '$subadminid'";

    $query_conn = mysqli_query($conn,$query);

    if(isset($query_conn)){
        echo "<center><div class='alert alert-success mb-0' role='alert'>
        Sub admin removed  !!!
      </div></center>";

        echo "<a href='Combrade_07.php'>return home</a>";

    }
    else{
        
        echo "<center><div class='alert alert-danger mb-0' role='alert'>
        Invalid credential please try again !!! </div></center>";

    }


?>