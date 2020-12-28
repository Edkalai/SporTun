<?php


$error="";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Ajouter annonce</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/img/logo.ico">

  

    <style>
        .reg-container {
          max-width: 450px;
        }
        .imgGallery img {
          padding: 8px;
          max-width: 100px;
        }    
    </style>

<script src="AjouterAnnonce.js"> </script>
</head>

<body>
    


    <div class="login-container">
        <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"> <img src="assets/img/logo.png"> </a>
            </div>
        
        <nav>
            <ul id="MenuItems">
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="Annonce.php">Produits</a></li>
                <li><a href='htmlAjouterAnnonce.php'>Vendre un produit</a></li>
                <li><a href="billets.php">Billets</a></li>
                <li><a href="actualites.php">Actualités</a></li>
                <li><a href="account.php">Profil</a></li>
            </ul>
        </nav>
        <a href="panier.html"><img src="assets/img/cart.png" class="cart" alt=""></a>
        <img src="assets/img/menu.png" class="menu-icon" onclick="togglemenu()">
      </div>
      </div>
      
<!--------------- account-page ----------->

    <div class="account-page">
        <div class="container">
            <div class="row">
                <!--<div class="col-2">
                    <img src="assets/img/image1.png" alt="" width="100%">
                </div> -->
                <!--<div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Connexion</span>
                            <span onclick="register()">Inscription</span>
                            <hr id="indicator">
                        </div>
                        <form action="login.php" method="POST" id="LoginForm">
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="mdp" placeholder="password">
                            <button type="submit" class="btn">Connexion</button>
                            <a href="mdp.html">Mot de passe oublié ?</a>
                        </form>
                -->  
                    <div class="vendreproduit-container">
                        <form action="AjouterAnnonce.php" method="POST" id="AnnForm" name="f1" enctype="multipart/form-data">
                            <label for="titre">Titre</label>
                            <input type="text" name="titre" id="titre" placeholder="Saisissez un titre descriptif">
                            </br></br>
                            <label for="description">Description</label>
                            </br>
                            <textarea name="description" id="description" placeholder=" Description" cols="70" rows="5"></textarea>
                            </br></br>

                            <label for="Catégorie">Catégorie</label>
                            </br>
                            <select name="categorie" id="categorie">
                                <option value="Sélectionner">Sélectionner</option>
                                <option value="Equitation">EQUITATION</option>
                                <option value="Fitness Muscu">FITNESS MUSCU</option>
                                <option value="Cyclisme">CYCLISME</option>
                                <option value="Golf">GOLF</option>
                                <option value="Nautique">NAUTIQUE</option>
                                <option value="Autre">AUTRE</option>

                            </select>
                            </br></br>
                            <label for="photos">Photos (5 maximum)</label>

                            <div class="user-image mb-3 text-center">
                                <div class="imgGallery"> 
                                  <!-- Image preview -->
                                </div>
                            </div>

                            <div class="custom-file">
                                <input type="file" name="fileUpload[]" class="custom-file-input" id="chooseFile" multiple>
                            </div>
                            </br></br>
                            <label for="prix">Prix (TND)</label>
                            <input type="number" name="prix" placeholder="prix">
                            </br></br>
                            <label for="emplacement">Emplacement</label>
                            </br>
                            <select name="emplacement" id="emplacement">
                                <option value="Sélectionner">Sélectionner</option>
                                <option value="Ariana">Ariana</option>
                                <option value="Ben arous">Ben arous</option>
                                <option value="Bizerte">Bizerte</option>
                                <option value="Béja">Béja</option>
                                <option value="Gabès">Gabès</option>
                                <option value="Gafsa">Gafsa</option>
                                <option value="Jendouba">Jendouba</option>
                                <option value="Kairouan">Kairouan</option>
                                <option value="Kasserine">Kasserine </option>
                                <option value="Kébili">Kébili</option>
                                <option value="La manouba">La manouba</option>
                                <option value="Le kef">Le kef</option>
                                <option value="Mahdia">Mahdia</option>
                                <option value="Monastir">Monastir</option>
                                <option value="Médenine">Médenine</option>
                                <option value="Nabeul">Nabeul</option>
                                <option value="Sfax">Sfax</option>
                                <option value="Sidi bouzid">Sidi bouzid</option>
                                <option value="Siliana">Siliana</option>
                                <option value="Sousse">Sousse</option>
                                <option value="Tataouine">Tataouine </option>
                                <option value="Tozeur">Tozeur</option>
                                <option value="Tunis">Tunis</option>
                                <option value="Zaghouan">Zaghouan</option>

                            </select>
                            <br><br>
                            <label for="numtel">Numero telephone</label>
                            <input type="number" name="numtel" placeholder="numero telephone">

                            </br>
                            <p style="color: rgb(255, 0, 0);" id="erreur"></p>
                            <br>
                            <button type="submit" name="submit" class="btn" value="AnnForm" onclick="return verif()">Ajouter le produit</button>
                            <!--<a href="href="#RegForm"></a><button  type="submit" class="btn" value="RegForm" onclick="return verif()">S'inscrire</button></a>-->

                             
                        </form>


                      
    
                    </div>
    
    
                    </div>
                </div>
            </div>
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





        <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script>
        $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#chooseFile').on('change', function() {
            multiImgPreview(this, 'div.imgGallery');
        });
        });    
    </script>

    <!-------js for toggle menu -------->
    <script>
        var MenuItems= document.getElementById("MenuItems");
        MenuItems.style.maxHeight="0px";
        function togglemenu(){
            if (MenuItems.style.maxHeight =="0px") {
                MenuItems.style.maxHeight ="250px";
            }
            else
            {
                MenuItems.style.maxHeight ="0px";
            }
        }
    </script>
</body>
</html>