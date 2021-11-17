<?php
session_start();
include('database.inc.php');
$ip = $_SESSION['ip_address'] = $_SERVER['REMOTE_ADDR'];
$time = time();
$sql="insert into user (ip_address,last_login) values ('$ip','$time') ";
mysqli_query($con,$sql);
?>
<h1>Website page</h1>