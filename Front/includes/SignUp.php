<?php
    include_once 'DBconnection.php';

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $datenaissance = $_POST['datenaissance'];
    $sexe = $_POST['sexe'];
    $numtel = $_POST['numtel'];
    $adresse = $_POST['adresse'];
    
    

    $sql = "INSERT INTO utilisateurs (nom, prenom, email, mdp, datenaissance, sexe, numtel, adresse, ban)
    VALUES ('$nom', '$prenom', '$email', '$mdp', '$datenaissance', '$sexe' , '$numtel', '$adresse', '0');";

    mysqli_query($conn,$sql);

    header("Location: ../account.html?signup=success");