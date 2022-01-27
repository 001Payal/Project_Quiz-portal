<?php 

$hostname="localhost"; 
$username="root";  
$password="";       
$database="quiz";  
$con=mysqli_connect($hostname,$username,$password,$database);
if(!$con)
{
die('Connection Failed'.mysql_error());
}

$email =  $_REQUEST['mail'];
$fullname = $_REQUEST['name'];
$pass =  $_REQUEST['pass'];


$sql = "INSERT INTO registration (email, name, password) VALUES ('$email', 
            '$fullname','$pass')";

if(mysqli_query($con, $sql)){
    echo "Your account has been created";
} else{
    echo "ERROR: Hush";
}

?>