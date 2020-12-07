<?php
include_once 'DBconnection.php';

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
    $sql="SELECT * from utilisateurs where email='$email' and mdp='$mdp';";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==0) 
    {
      echo("Mot de passe invalide");
    }
    else
    {
    $sql="SELECT * from utilisateurs where email='$email' and mdp='$mdp' and ban=0";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==0) 
    {
      echo("Votre compte est suspendu");
    }
    else
    {
        $sql="SELECT nom from utilisateurs where email='$email' and mdp='$mdp';";
        $nom=mysqli_query($conn,$sql);
        while ($rows=mysqli_fetch_assoc($nom))
        {
        echo( "bienvenue ".$rows['nom']);
        }
    }
}

}