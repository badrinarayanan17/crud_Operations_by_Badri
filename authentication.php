<?php
$hostname="localhost";
$username="root";
$password="";
$database="professionals";
$con = mysqli_connect($hostname,$username,$password,$database);
if(!$con){
    die("Connection Failed");
}

?>