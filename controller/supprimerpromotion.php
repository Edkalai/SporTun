<?php
include '../views/dashboard/DBconnection.php';

 $id = $_POST['idpromo'];
 $sql = "SELECT * FROM promotion WHERE idpromo=". $id .";" ;

 $result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$idproduit=$row['idproduit'];
$sql="update miseenvente set prix=prix/0.9 where id='$idproduit';";
mysqli_query($conn,$sql);
$sql="delete from promotion where idpromo='$id';";
mysqli_query($conn,$sql);
header("Location: ../views/dashboard/Modifierpromo.php");
