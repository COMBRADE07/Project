<html>    
<head>    
    <title>login here </title>    
    <link rel="stylesheet" type="text/css" href="Add_new_admin.css"> 
    <link rel="icon" type="image/x-icon" href="images/Tab_ico.ico">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>    
<body>
<?php   
    //check for username is already exist or not.
    $username = $_POST["username"];
    $p1 = $_POST["password1"];
    $p2 = $_POST["password2"];
    //checking password are same or not..
    if($p1 != $p2)
    {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Password mismatched !!</strong> Please try again:)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    

    echo ' <div class="alert alert-success alert-dismissible fade show col-3 text-truncate" role="alert">
    <a  href="signupnxt.php">Click here to try again</a> </div> ';


    }
    else{
    setcookie('username',$_POST['username']);
    setcookie('password1',$_POST['password1']);


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
    $query = "select * from userdata where UserId='$username'";

    $table_query=mysqli_query($conn,$query);
    $record =mysqli_num_rows($table_query); 
    if($record == 1){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Username unavailable !!</strong>Sorry for inconvinence, Please try again:)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    echo ' <div class="alert alert-success alert-dismissible fade show col-3 text-truncate" role="alert">
    <a  href="signupnxt.php">Click here to try again</a> </div> ';



    }
    else{
        //next step
         header("location:userdata.php");
    }
} 
?>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</body>    
</html> 