<?php
    //accessing values from user...
    $email= $_POST['email'];
    $username = $_POST['username'];
    setcookie('userid',$username);
    
    //server connection...
    $host="localhost";
    $user="root";
    $pass="";
    $db="userdata";

    $conn=mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        echo "Connection failed...";
    }
    else{
      //  echo "Connection successfully established<br>";
    }

    $query="select * from userdata where UserId='$username' and Email='$email'";
    $table_query=mysqli_query($conn,$query);
    $record= mysqli_num_rows($table_query);
    if($record == 1)
    {
        header("location:Forgot_Password_User_2.php");
    }
    else
    {
        echo "sorry your input data miss matched please try again !!<br>";
        echo "<a href='Forgot_Password_User.html'>Click here to go back.</a>";   
      
    }
    

?>