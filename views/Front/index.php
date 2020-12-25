<?php
include 'DBconnection.php';
session_start();
$compte="Compte";
if (isset($_SESSION["email"]))
{
    $compte="Profil";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SporTun</title>
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
      <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"> <img src="assets/img/logo.png"> </a>
            </div>
        
        <nav>
            <ul id="MenuItems">
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="annonce.php">Annonces</a></li>
                <?php if($compte=="Profil"){ 
                echo"<li><a href='AjouterAnnonce.html'>Créer une annonce</a></li>";
                }?>
                <li><a href="billets.php">Billets</a></li>
                <li><a href="actualites.php">Actualités</a></li>
                <li><a href="account.php"><?php echo $compte ?></a></li>
            </ul>
        </nav>
        <a href="panier.php"><img src="assets/img/cart.png" class="cart" alt=""></a>
        <img src="assets/img/menu.png" class="menu-icon" onclick="togglemenu()">
      </div>
      <div class="row">
        <div class="col-2">
            <h1>Donnez Un Nouveau Style <br> à Votre Entrainemnet!</h1>
            <p>SporTun met en rapport les vendeurs et les acheteurs en Tunisie <br>
                 et offre une expérience utilisateur exceptionnelle</p>
         <a href="annonce.php" class="btn">Explorer &#8594; </a>
        </div>
          <div class="col-2">
             <img src="assets/img/image1.png" alt="">
           </div>
         </div>
      </div>
    </div>
<!-------- featured categories -------->
<div class="categories">
    <div class="small-container">
     <h2 class="title">Catégories en vedette</h2>
    <div class="row">
     <div class="col-3">
         <img src="assets/img/category-1.png" alt="Fitness Muscu">
     </div>
     
     <div class="col-3">
         <img src="assets/img/category-2.png" alt="Cyclisme">
     </div>
     <div class="col-3">
         <img src="assets/img/category-3.png" alt="Football">
     </div>
    </div>
 </div>
</div>
 <!-------- featured products -------->
 <div class="small-container">
     <h2 class="title">Produits en vedette</h2>
     <div class="row">
         <div class="col-4">
             <img src="assets/img/product-1.jpg" alt="">
             <h4>Raquette de tennis</h4>
             <p> 40.00TND</p>
             <p>Etat: comme neuf</p>
             <p> <a href="" class="hoverprofile" title="Voir profil de vendeur" > Nada </a> </p>
             
         </div>
         <div class="col-4">
             <img src="assets/img/product-2.jpg" alt="">
             <h4>Hatléres de musculation</h4>
             <p> 50.00TND</p>
             <p>Etat: comme neuf</p>
             <p> <a href="" class="hoverprofile" title="Voir profil de vendeur" > Hedi </a> </p>
             
         </div>
         <div class="col-4">
             <img src="assets/img/product-3.jpg" alt="">
             <h4>Vélo d'appartement</h4>
             <p> 550.00TND</p>
             <p>Etat: comme neuf</p>
             <p> <a href="" class="hoverprofile" title="Voir profil de vendeur" > Elyes </a> </p>
             
         </div>
         <div class="col-4">
             <img src="assets/img/product-4.jpg" alt="">
             <h4>Combinaison natation</h4>
             <p> 120.00TND</p>
             <p>Etat: comme neuf</p>
             <p> <a href="" class="hoverprofile" title="Voir profil de vendeur" > Youssef </a> </p>
             
         </div>
     </div>
 </div>
    <!---------- footer ------------>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Télécharger notre application</h3>
                    <p>Télécharger application pour Android et ios mobile</p>
                    <div class="app-logo">
                        <img src="assets/img/play-store.png" alt="">
                        <img src="assets/img/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img class="logofooter" src="assets/img/logo-footer.png" alt="">
                    <p>Donnez Un Nouveau Style à Votre Entrainement !</p>
                </div>
                <div class="footer-col-3">
                    <h3>Liens</h3>
                    <ul>
                        <li>Coupons</li>    
                        <li>Blog</li>
                        <li>Rejoindre affilié</li>
                        <li>test</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow  us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - SporTun</p>
        </div>
    </div>
    <!-------js for toggle menu -------->
    <script>
        var MenuItems= document.getElementById("MenuItems");
        MenuItems.style.maxHeight="0px";
        function togglemenu(){
            if (MenuItems.style.maxHeight =="0px") {
                MenuItems.style.maxHeight ="200px";
            }
            else
            {
                MenuItems.style.maxHeight ="0px";
            }
        }
    </script>

</body>
</html>