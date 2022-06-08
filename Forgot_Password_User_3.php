<?php
        //accessing values from user...
        $password1= $_POST['password1'];
        $password2 = $_POST['password2'];
        
        $userid=$_COOKIE['userid'];
        if($password1 == $password2)
        {
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
    
        $query="UPDATE userdata SET Password1='$password1', Password2='$password2' where UserId='$userid'";
        $table_query=mysqli_query($conn,$query);

        if(isset($query))
        {
            echo "Your password has benn changed successfully !!<br>";
            echo "<a href='login.php'>Click here to go back and login.</a>";   
        }
        else
        {
            echo "sorry      please try again !!<br>";
            echo "<a href='Forgot_Password_User.html'>Click here to go back.</a>";   
          
        }
    }
    else
    {
        echo "Password do not matched !!<br>";
        echo "<a href='Forgot_Password_User_2.php'>Click here to go back.</a>";  
    }   
?>