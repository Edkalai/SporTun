<?php
include "ajouterpublicite.php";

$publicites = new publiciteC();

if (isset($_POST['idpublicite'])) {
    $publicites->supprimerpublicite($_POST['idpublicite']);
    header('location:../views/Dashboard/Modifierpublicite.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['idpublicite'];
}
