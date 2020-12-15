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
    echo("Solde insuffisant");
}
else{
    $nvsolde=$solde-$total;
    $sql="update utilisateurs set solde='$nvsolde' where email='$useremail';";
    mysqli_query($conn,$sql);
    $sql="delete from panier where email='$useremail';";
    mysqli_query($conn,$sql);
    header ("Location: panier.php");
    
}
?>