<?php 
include 'DBconnection.php';
 $id = $_GET['id'];
 $sql = "SELECT * FROM miseenvente WHERE id=". $id .";" ;
 
 $result=mysqli_query($conn,$sql);

 $row=mysqli_fetch_assoc($result);
 $id=$row['id'];
 $titre=$row['titre'];
 $description=$row['description'];
 $prix=$row['prix'];

 $prix1=$prix*0.9;

 mysqli_query($conn," UPDATE miseenvente SET prix = $prix1 where id=". $id .";");
mysqli_query($conn,"INSERT INTO promotion (titre,description,prix,idproduit)
 VALUES ('$titre', '$description','$prix1','$id');");
  header("Location: Modifierpromo.php");
  ?>