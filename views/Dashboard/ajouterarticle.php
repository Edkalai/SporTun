<?php include_once 'C://wamp64/www/SporTun-master (1)/controller/ArticleC.php';
include_once 'C://wamp64/www/SporTun-master (1)/model/Articles.php';

$error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new UtilisateurC();
    if (
        isset($_POST["titre"]) && 
        isset($_POST["texte"]) &&
        isset($_POST["auteur"]) && 
        isset($_POST["urlImage"]) && 
        isset($_POST["notifCreateur"]) &&
        isset($_POST["Datearticle"])
    ) {
        if (
            !empty($_POST["titre"]) && 
            !empty($_POST["texte"]) && 
            !empty($_POST["auteur"]) && 
            !empty($_POST["urlImage"]) && 
            !empty($_POST["notifCreateur"]) &&
            !empty($_POST["Datearticle"])
        ) {
            $user = new Utilisateur(
                $_POST['titre'],
                $_POST['texte'], 
                $_POST['auteur'],
                $_POST['urlImage'],
                $_POST['notifCreateur'],
                $_POST['Datearticle']
            );
            $userC->ajouterArticle($user);
            //header('Location:afficherUtilisateurs.php');
        }
        else
            $error = "Missing information";
    }
