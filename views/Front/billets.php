<?php
include '../Dashboard/DBconnection.php';
session_start();
$sql='select * from events;';
$result=mysqli_query($conn,$sql);
$r=mysqli_query($conn,$sql);
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
    <link rel="stylesheet" href="billets.css">
    <link rel="shortcut icon" href="assets/img/logo.ico">
   <!-- <link rel="preconnect" href="https://fonts.gstatic.com">   -->
    <link rel="shortcut icon" href="logo.ico">
    
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
            <ul>
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="annonce.php">Produits</a></li>
                <?php if($compte=="Profil"){ 
                echo"<li><a href='htmlAjouterAnnonce.php'>Vendre un produit</a></li>";
                }?>
                <li><a href="billets.php">Billets</a></li>
                <li><a href="actualites.php">Actualités</a></li>
                <li><a href="account.php"><?php echo $compte ?></a></li>
            </ul>
        </nav>
        <a href="panier.php"><img src="assets/img/cart.png" class="cart" alt=""></a>
      </div>
     
 <!-------- featured categories -------->
   
<br>

 <div class="container">
    
    <?php 
                            while($rows=mysqli_fetch_assoc($result))
                            { $id=$rows['id'];
                                ?>
    <div class="col-xs-12 col-md-6">
    <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                    
                        <div class="product-image"> 
                        <div class="col-4"> 
                        <?php echo "<a href=Detailevent.php?id=$id> <img src=../Dashboard/".$rows['image']." ></a> "?>
                            <span class="tag3 special">
                                Special
                            </span> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="product-deatil">
                            <h5 class="name">
                                <a href="#">
                                <?php echo $rows['titre']; ?> <span><?php echo $rows['date']; ?></span>
                                </a>
                            </h5>
                            <p class="price-container">
                                <span><?php echo $rows['prix']; ?> DT</span>
                            </p>
                            <span class="tag1"></span> 
                    </div>
                    <div class="description">
                        <p><?php echo $rows['descourte']; ?> </p>
                    </div>
                    <div class="product-info smart-form">
                        <div class="row">
                            <div class="col-md-12"> 
                               
                               
                                <?php echo "<a href=Detailevent.php?id=$id class=btn btn-info> Plus d'informations</a> "?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product --><?php
                            }
                            ?>
    </div>
    
        <!-- end product -->
    
    
            
    </div>
</div></div>

  
    

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
        
   
</body>
</html>