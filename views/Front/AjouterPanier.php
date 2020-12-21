<?php
    include_once 'DBconnection.php';
    session_start();


    $id = $_GET['id'];
    $quantite = $_GET['quantite'];
    $email = $_SESSION['email'];

    
    $sql = "SELECT * FROM annonces WHERE id=". $id .";";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

    $image= $row['image1'];
    $titre= $row['titre'];
    $prix= $row['prix'];



    $sql = "INSERT INTO panier (id, email, titre, image, quantite, prix)
    VALUES ('$id', '$email', '$titre', '$image', '$quantite', '$prix');";

  mysqli_query($conn,$sql);

  header("Location: DetailsAnnonce.php?id=$id");

?>