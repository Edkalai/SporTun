<?php

    include '../Dashboard/DBconnection.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM annonces WHERE id=". $id .";";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);


    //Produits Connexes


    
    $sql1 = "SELECT * FROM annonces WHERE categorie ='" . $row['categorie']. " ' and id !=". $id ." LIMIT 4 ;"; 
    //echo $sql1; die;
    $result1 = mysqli_query($conn,$sql1);
    $rows = mysqli_fetch_assoc($result1);

    //echo $row['categorie']

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SporTun</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
      <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"> <img src="assets/img/logo.png"> </a>
            </div>
        
        <nav>
            <ul>
                <li><a href="index.html">Acceuil</a></li>
                <li><a href="AjouterAnnonce">Annonces</a></li>
                <li><a href="billets.html">Billets</a></li>
                <li><a href="actualites.html">Actualités</a></li>
                <li><a href="account.html">Compte</a></li>
            </ul>
        </nav>
        <a href="panier.php"><img src="assets/img/cart.png" class="cart" alt=""></a>
      </div>

      </div>



      <!----------single product details------>

      
        <div class="small-container single-product" >
            <div class="row">
                <div class="col-2">
               
                <?php echo " <img src=".$row['image']. " width='100%' ></a> "?>
                
            <!--        <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="assets/img/product-1.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="assets/img/product-2.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="assets/img/product-1.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="assets/img/product-1.jpg" width="100%" class="small-img">
                        </div>
                    </div>     -->
                
                </div> 
                <div class="col-2">
                    <h1><?php echo $row['titre']; ?></h1>
                    
                    <h4><?php echo $row['prix'] . ' TND'; ?></h4>
                    <input type="number" value="1">
                    <a href="" class="btn">Ajouter Au Panier</a>
                    <h3>Description <i class="fa fa-indent"></i></h3>
                    <br>
                    <p><?php echo $row['description']; ?></p>

                </div>
            </div>
        </div>


    <!-----------------title------------------------->
        <div class="small-container">
            <div class="row row-2">
                <h2>Produits Connexes</h2>
                <p>Voir Plus</p>
            </div>
        </div>


    <!-------------------products-------------------->


    <div class="small-container">

        <div class="row">



            <?php
                $n=0;
                while(($rows=mysqli_fetch_assoc($result1))&&($n<4))
                {
                    $idx=$rows['id'];
                    $n++;
                
            ?>
                     <div class='col-4'>
                        <?php echo "<a href=DetailsAnnonce.php?id=$idx> <img src=" .$rows['image']. " ></a> "?>
                        <h4><?php echo $rows['titre']; ?></h4>
                        <p><?php echo $rows['prix'] . ' TND'; ?></p>
                        <p><?php echo $rows['description']; ?></p>
                        <p> <a href="" class="hoverprofile" title="Voir profil de vendeur" > Nada </a> </p>
                        
                    </div>

            <?php
                }
        
            ?>

            <!--
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
            -->








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



<!---------------js for product gallery------------>

<script>
     var ProductImg = document.getElementById("ProductImg");
     var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function()
        {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function()
        {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function()
        {
            ProductImg.src = SmallImg[3].src;
        }
        
</script>

</body>
</html>