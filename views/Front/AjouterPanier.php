<?php
    include_once 'DBconnection.php';
    session_start();

    if ($_SESSION["email"]=="")
    {
        header("Location: account.php");
        exit();
    }


    $id = $_GET['id'];
    $quantite = 1;
    $email = $_SESSION['email'];

    
    $sql = "SELECT * FROM miseenvente WHERE id=". $id .";";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

    $image= $row['image1'];
    $titre= $row['titre'];
    $prix= $row['prix'];



    $sql = "INSERT INTO panier (id, email, titre, image, quantite, prix)
    VALUES ('$id', '$email', '$titre', '$image', '$quantite', '$prix');";

  mysqli_query($conn,$sql);

  $msg="Produit ajouter au panier avec succès.";

  header("Location: DetailsAnnonce.php?id=$id&msg=$msg");

?>