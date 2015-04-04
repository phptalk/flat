<?php
require_once 'includes/connection.php';
//1. take values from form 
$first_name = $_POST['fname'];
$last_name  = $_POST['lname'];
$email      = $_POST['email'];
$password   = $_POST['password'];
$mobile     = $_POST['mobile'];
$address    = $_POST['address'];
//2. connect to server 

// 3. perform query
// insert statment
$sql = "insert into user(email,password,mobile,first_name,last_name,address)
        values('$email','$password','$mobile','$first_name','$last_name','$address')";
$result = mysqli_query($db, $sql);
if($result){
    header("location:index.php");
}else{
    die("error happends");
}
?>
