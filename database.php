<?php 
//Connect to Mysql DB
$conn = mysqli_connect("localhost", "root", "", "shoutit");
if(mysqli_connect_errno()) {
    die("Failed to connect to MySQL : " . mysqli_error());
} 
?>