<?php
session_start();
include('database.inc.php');
$ip_address=$_SESSION['ip_address'];
$time=time()+10;
$res=mysqli_query($con,"update user set last_login=$time where ip_address='$ip_address'");
?>