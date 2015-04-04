<?php 

$db = mysqli_connect("localhost","root","","real_estate");
if(!$db){
    die("cannot connect to server");
}