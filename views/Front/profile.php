<?php
include 'DBconnection.php';
session_start();
$sql='select * from utilisateurs where email="'.$_SESSION["email"].'";';
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="assets/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
<title>Profile</title>
</head>
<body style="overflow-x:hidden;" >
<div class="header" >
        <div class="container">
          <div class="navbar">
              <div class="logo">
                  <a href="index.html"> <img src="assets/img/logo.png"> </a>
              </div>
          
          <nav>
              <ul>
                  <li><a href="index.html">Acceuil</a></li>
                  <li><a href="annonce.html">Annonces</a></li>
                  <li><a href="billets.html">Billets</a></li>
                  <li><a href="actualites.html">Actualités</a></li>
                  <li><a href="account.php">Compte</a></li>
              </ul>
          </nav>
          <a href="panier.php"><img src="assets/img/cart.png" class="cart" alt=""></a>
        </div>
      
</div>

<div class="profile-container">
    <div class="leftbox">
        <nav>
        <a onclick="tabs(0)" class="tab active">
        <i class="fa fa-user"></i>
        </a>
        <a onclick="tabs(1)" class="tab">
        <i class="fa fa-credit-card"></i>
        </a>
        <a onclick="tabs(2)" class="tab">
        <i class="fa fa-cog"></i>
        </a>
        
        </nav>
    </div>
    <div class="rightbox">
        <div class="profile tabShow">

            <h1>Informations Personnelles</h1>
            <h2>Nom</h2>
            <input type="text" class="input" name="nom" value="<?php echo $row['nom']; ?>" >
            <h2>Prénom</h2>
            <input type="text" class="input" name="prenom" value="<?php echo $row['prenom']; ?>" >
            <h2>Date de naissance</h2>
            <input type="date" class="input" name="datenaissance" value="<?php echo $row['datenaissance']; ?>">
            <h2>Email</h2>
            <input type="text" class="input" name="mdp" value="<?php echo $row['email']; ?>" >
            <h2>Mot de passe</h2>
            <input type="password" class="input" value="hashed" >
            <button class="btn" type="submit">Modifier</button>
            <button  class="btn logout-btn"><a href="logout.php" style="color:white;" > Déconnexion </a> </button> 

        
        </div>
        <div class="payment tabShow">
            <h1>Informations de paiement</h1>
            <h2>Méthode de paiement</h2>
            <input type="text" class="input" value="MasterCard - 0202 **** **** 7336">
            <h2>Adresse</h2>
            <input type="text" class="input" value="Adresse">
            
            <button class="btn">Modifier</button>
        
        </div>
     
        </div>

</div>




<script src="jquery/jquery-3.2.1.min.js"></script>
<script>
 const tab8tn = document.querySelectorAll(".tab");
 const tab = document.querySelectorAll(".tabShow");

 function tabs(panelIndex) {
     tab.forEach(function(node) {
         node.style.display ="none";
     });
     tab[panelIndex].style.display="block";
 }
 tabs(0);
</script>
<script>
$(".tab").click(function() {
    $(this).addClass("active").siblings().removeClass("active");
})
</script>

</>
      <!---------- footer ------------>
      <div class="footer" style="padding : 1px 0 20px">
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