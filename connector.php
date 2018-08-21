<?php
$host = "localhost";
$user = "id5834649_turbo";
$pass = "turbo";
$db = "id5834649_database";
//$host = "localhost";
//$user = "root";
//$pass = "";
//$db = "db";
$conn = mysqli_connect($host, $user, $pass) or die("cannot connect"); 
mysqli_select_db($conn, $db) or die("cannot select DB");
?>