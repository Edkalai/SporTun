<?php include "../../controller/ajouterpublicite.php";
session_start();
$publiciteC = new publiciteC();
$listepublicites = $publiciteC->afficherpublicite();
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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>






      <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"> <img src="assets/img/logo.png"> </a>
            </div>
        
        <nav>
            <ul id="MenuItems">
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="Annonce.php">Produits</a></li>
                <?php if($compte=="Profil"){ 
                echo"<li><a href='AjouterAnnonce.php'>Vendre un produit</a></li>";
                }?>
                <li><a href="billets.php">Billets</a></li>
                <li><a href="actualites.php">Actualités</a></li>
                <li><a href="Publicite.php">Publicite</a></li>
                <li><a href="account.php"><?php echo"$compte"?></a></li>
            </ul>
        </nav>
        <a href="panier.php"><img src="assets/img/cart.png" class="cart" alt=""></a>
        <img src="assets/img/menu.png" class="menu-icon" onclick="togglemenu()">
      </div>

      </div>


    <div class="categories">
    <div class="small-container">
    <li> <a href="Ajouterpublicite.php"> <button class="au-btn au-btn-load"> Ajout d'une nouvelle publicite</button></a></li>
     <h2 class="title">Les publicites disponibles</h2>
    <div class="row">
    <?PHP
            foreach ($listepublicites as $row) {
            ?>
     <div class="col-3">
         <img src="assets/img/<?PHP echo $row['image']; ?>" >
         <div class="text text-center">
              <h2><?PHP echo $row['titre']; ?></h2>
              <h2><?PHP echo $row['description']; ?></h2>
              </div>
     </div>
     <?PHP
            }
            ?>
     
     
    </div>
 </div>
</div>






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
</body>
</html>