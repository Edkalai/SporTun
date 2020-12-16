<?php

    include_once 'DBconnection.php';
    $email = $_GET['id'];
    $sql="update utilisateurs set ban=0 where email='$email' ;";
    mysqli_query($conn,$sql);
    header("location: gestioncomptes.php");
    exit();
    
?>



    