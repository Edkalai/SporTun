<?php

    include_once 'DBconnection.php';
    $email = $_GET['id'];
    $sql="update utilisateurs set ban=0 where email='$email' ;";
    mysqli_query($conn,$sql);
    header("location: ../views/dashboard/gestioncomptes.php?choix=1");
    exit();
    
?>



    