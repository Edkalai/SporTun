<?php
include 'DBconnection.php';
session_start();
$sql='select * from panier where email="'.$_SESSION["email"].'";';
$result=mysqli_query($conn,$sql);
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
    <div class="header">
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
                  <li><a href="account.html">Compte</a></li>
              </ul>
          </nav>
          <img src="assets/img/cart.png" class="cart" alt="">
        </div>
      
            <!-------cart items details  -------->
  
        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Subtotal</th>
                 </tr>
             
              <?php 
                            while($rows=mysqli_fetch_assoc($result))
                            {
                                ?>
                    <tr>
                     <td>
                <div class="cart-info">
                    <img src="assets/img/<?php echo $rows['image']; ?>">
                      <div>
                          <p><?php echo $rows['titre']; ?></p>
                          <small> Prix : <?php echo $rows['prix']; ?> TND</small>
                          <br>
                          <a href="">Annuler</a>
                      </div>
                </div>
                  
                  <td><input type="number" value="<?php echo $rows['quantite']?>" min="1"></td>
                  <td><?php echo $rows['prix']; ?></td>
              </td>
              </tr>
              <?php
                 }
                 ?>
              
              
        </table>
        <div class="totalprice">
            <table>
                <tr>
                <td>Subtotal</td>
                <td>630TND</td>
            </tr>
            <tr>
                    <td>Tax</td>
                    <td>40TND</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>670TND</td>
                </tr>
            </table>
        </div>
    </div>
</div>
  
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