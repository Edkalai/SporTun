<?php
include_once "DBconnection.php";
session_start();
$sql='update utilisateurs set Loggedindashboard=0 where email="'.$_SESSION["emailadmin"].'";';
mysqli_query($conn,$sql);
session_destroy();
header("location: dashboardlogin.php");
exit();
?>