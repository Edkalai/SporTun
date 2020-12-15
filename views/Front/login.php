<?php
include_once 'DBconnection.php';
session_start();
$email = $_POST['email'];
$mdp = $_POST['mdp'];


$sql="SELECT * from utilisateurs where email='$email';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0) 
{
    echo("Email invalide");
}
else
{
    $sql="SELECT mdp from utilisateurs where email='$email'; ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $hashed_password=$row['mdp'];
    echo($hashed_password);
    if (!  password_verify($mdp, $hashed_password) )
    {
      echo("Mot de passe invalide");
    }
    else
    {
    $sql="SELECT * from utilisateurs where email='$email' and ban=0";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==0) 
    {
      echo("Votre compte est suspendu");
    }
    else
    {
        $sql="SELECT nom from utilisateurs where email='$email';";
        $nom=mysqli_query($conn,$sql);
        $_SESSION["email"] = $email;
        header("Location: profile.php");
        
    }
}

}