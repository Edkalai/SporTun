<?php
include 'DBconnection.php';
session_start();
$sql='select SUM(prix) as total from panier where email="'.$_SESSION["email"].'";';
$result=mysqli_query($conn,$sql);
$somme=mysqli_fetch_assoc($result);
$total=$somme['total'];
$sql='select solde from utilisateurs where email="'.$_SESSION["email"].'";';
$result=mysqli_query($conn,$sql);
$req=mysqli_fetch_assoc($result);
$solde=$req['solde'];
$useremail=$_SESSION["email"];
if ($total>$solde)
{
     $error="Solde insuffisant";
     header("Location: panier.php?msg=$error");
}
else{
    $nvsolde=$solde-$total;
    $sql="update utilisateurs set solde='$nvsolde' where email='$useremail';";
    mysqli_query($conn,$sql);
    $date=date("y-m-d");
    $sql="select * from panier where email='$useremail';";
    $resultat=mysqli_query($conn,$sql);
    while($rows=mysqli_fetch_assoc($resultat))
    {
        $titre=$rows['titre'];
        $prix=$rows['prix'];
        $sql="insert into vente (email,titre,prix,datevente) values ('$useremail','$titre','$prix','$date');";
        mysqli_query($conn,$sql);
    }
    $sql="delete from panier where email='$useremail';";
    mysqli_query($conn,$sql);
    header ("Location: panier.php");
    
}
?>