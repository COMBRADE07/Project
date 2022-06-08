<?php
    $Alerts=false;
    //accesing username and password user entered..
    echo "<br><br><br><br>";

  



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
        
    }

    $username= $_POST['username'];
    $value= $_POST['password'];
    //feaching details
    $query = "select * from userdata where UserId='$username'";

    $table_query=mysqli_query($conn,$query);
    $num =mysqli_num_rows($table_query); 
    if($num !=1)
    {
      echo "Username not matched<br>";
      header("location:Login_intermediate_2.php");
    }
    else
    {
      echo "Username matched";
      while($row= mysqli_fetch_assoc($table_query))
      {
          if(password_verify($value,$row['Password1']))
          {
              echo "password matched";
              session_start();
              $_SESSION['loggedin']=true;
              $_SESSION['username']=$username;
              $table = 'userdata';
              setcookie('table',$table);
              header("location:Combrade_07.php");

          }
          else{
        
            echo "<center><div class='alert alert-danger mb-0' role='alert'>
            Invalid credential please try again !!!
          </div></center>";
          header("location:Login_intermediate.php");
        }

      }

    }

    
  
?>