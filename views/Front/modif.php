<?php
    include_once 'DBconnection.php';
    session_start();
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $datenaissance = $_POST['datenaissance'];
    $numtel = $_POST['numtel'];
    $adresse = $_POST['adresse'];
    $useremail=$_SESSION['email'];
    $hashed_password=password_hash($mdp,PASSWORD_DEFAULT);

    $sql = "update utilisateurs 
    set nom='$nom',prenom='$prenom',email='$email', mdp='$hashed_password',datenaissance='$datenaissance',numtel='$numtel',adresse='$adresse' 
    where email='$useremail';";

    mysqli_query($conn,$sql);

    $_SESSION["email"]=$email;

    header("Location: profile.php");
   