<?php

    include_once '../views/dashboard/DBconnection.php';
    $email = $_GET['id'];
    $sql="update utilisateurs set ban=1 where email='$email' ;";
    mysqli_query($conn,$sql);
    header("location: ../views/dashboard/gestioncomptes.php?choix=1");
    exit();
    
?>



    