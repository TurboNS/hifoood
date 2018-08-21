<?php
error_reporting(0);
$db = new mysqli('localhost', 'id5834649_turbo', 'turbo', 'id5834649_database');
//$db = new mysqli('localhost', 'root', '', 'db');
if($db->connect_errno){
	die('Sorry Database not connected !!!');
}
?>

