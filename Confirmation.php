<?php
    $userid=$_POST['userid'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $regAmount=50;
    $Email=$_POST['Email'];
    $OrderType=$_POST['OrderType'];
    $discription=$_POST['subject'];


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
    
    //inserting data in db....
    $query = "INSERT INTO `user_orders` (`UserId`, `Name`, `Phone`, `RegistrationAmount`,
     `Email`, `OrderType`, `Discription`) VALUES ('$userid', '$name', '$phone', 
     '$regAmount', '$Email', '$OrderType', '$discription');";
     $table_query=mysqli_query($conn,$query);
     if(!$table_query){
         echo "something went wrong..";
     }
     else{
         header("location:order_message.php");
     }
}
?>