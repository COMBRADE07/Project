<?php
    // checks phone number is valid or not..
    $contact = $_POST['contact'];

    if(preg_match("/^[0-9]{10,10}$/",$a))
    {
        echo "Number is correct";
    }
    else{
        echo "Number is wrong";
        header("location:signup.php");
    }
    $email = $_POST["email"];
    setcookie('fname',$_POST['fname']);
    setcookie('lname',$_POST['lname']);
    setcookie('email',$_POST['email']);
    setcookie('contact',$_POST['contact']);



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


    //feaching details
    $query = "select * from userdata where Email='$email'";

    $table_query=mysqli_query($conn,$query);
    $record =mysqli_num_rows($table_query); 
    if($record == 1){
        echo "<br><br><br>This email address already exist, please go back and chooose another one";

    }
    else{
        
        echo "<center><div class='alert alert-danger mb-0' role='alert'>
        Invalid credential please try again !!!
      </div></center>";

      header("location:signupnxt.php");
    }
?>