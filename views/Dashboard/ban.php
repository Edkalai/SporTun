<?php

    include_once 'DBconnection.php';
    $email = $_GET['id'];
    $sql="update utilisateurs set ban=1 where email='$email' ;";
    mysqli_query($conn,$sql);
    header("location: gestioncomptes.php");
    exit();
    
?>



    