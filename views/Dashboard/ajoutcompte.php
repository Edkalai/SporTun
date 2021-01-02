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
    $admin =$_POST['admin'];
    
    $hashed_password=password_hash($mdp,PASSWORD_DEFAULT);

    $sql = "INSERT INTO utilisateurs (nom, prenom, email, mdp, datenaissance, sexe, numtel, adresse, ban, admin)
    VALUES ('$nom', '$prenom', '$email', '$hashed_password', '$datenaissance', '$sexe' , '$numtel', '$adresse', '0' ,'$admin');";

    mysqli_query($conn,$sql);
    $notif="Utilisateur ajouté avec succés";
    header("Location: gestioncomptes.php?choix=2&msg=$notif");