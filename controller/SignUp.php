<?php
    include_once 'DBconnection.php';
    session_start();

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $datenaissance = $_POST['datenaissance'];
    $sexe = $_POST['sexe'];
    $numtel = $_POST['numtel'];
    $adresse = $_POST['adresse'];
    
    $hashed_password=password_hash($mdp,PASSWORD_DEFAULT);

    $sql = "INSERT INTO utilisateurs (nom, prenom, email, mdp, datenaissance, sexe, numtel, adresse, ban)
    VALUES ('$nom', '$prenom', '$email', '$hashed_password', '$datenaissance', '$sexe' , '$numtel', '$adresse', '0');";

    mysqli_query($conn,$sql);
    $_SESSION["email"] = $email;
    header("Location: ../views/front/annonce.php?signup=success");