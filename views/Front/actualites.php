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
<html>

<head>
    <meta charset="UTF-8">
    <title>Actualités</title>
    <link rel="stylesheet" type="text/css" href="news.css">
    <link rel="stylesheet" type="text/css" href="news.css">
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
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
                        <li><a href="annonce.php">Annonces</a></li>
                        <?php if($compte=="Profil"){ 
                        echo"<li><a href='AjouterAnnonce.html'>Créer une annonce</a></li>";
                        }?>
                        <li><a href="billets.php">Billets</a></li>
                        <li><a href="actualites.php">Actualités</a></li>
                        <li><a href="account.php"><?php echo $compte ?></a></li>
                    </ul>
                </nav>
                <img src="assets/img/cart.png" class="cart" alt="">
                
            </div>
            <!--- <div class="barre">
                <nav>
                    <ul>
                        <li><a href="fb.html">Football</a></li>
                        <li><a href="tennis.html">Tennis</a></li>
                        <li><a href="bb.html">Basketball  </a></li>
                        <li><a href="hb.html">Handball    </a></li>
                        <li><a href="ftf1.html">Lig Tunisie Pro1</a></li>
                        <li><a href="jo.html">Jeux olympiques</a></li>
                        <li><a href="cm.html">Coupe du monde</a></li>
                        <li><a href="transfert.html">Transferts</a></li>
                        <li><a href="ath.html">Athlétisme</a></li>
                    </ul>
                </nav>
            </div>
        </div> -->
        <div class="container">
            <div class="news">
                <div class="article small">
                    <img src="assets/img/sport1.jpg">
                    <div class="pins">
                        <h5><a href="news1.html">Ligue des champions : PSG-Basaksehir interrompu</a></h5>
                        <p>le match PSG - Basaksehir interrompu,Erdogan dénonce le racisme...</p>
                    </div>
                </div>
                <div class="article small">
                    <img src="assets/img/sport2.jpg">
                    <div class="pins">
                        <h5><a href="news2.html">TENNIS:NADAL DÉCORÉ PAR EN MADRID</a></h5>
                        <p>Rafael Nadal a reçu jeudi la Grand-Croix de l'Ordre du 2 mai...</p>
                    </div>
                </div>
                <div class="article small">
                    <img src="assets/img/sport3.jpg">
                    <div class="pins">
                        <h2><a href="news3.html">KENIN JOUEUSE DE L'ANNÉE 2020</a></h2>
                        <p>A l'occasion des WTA Player Awards organisés ce mardi, Sofia Kenin a été élue meilleure...</p>
                    </div>
                </div>
                <div class="article small">
                    <img src="assets/img/sport4.jpg">
                    <div class="pins">
                        <h6><a href="news4.html">F1-HAAS CONDAMNE LE COMPORTEMENT DE MAZEPIN</a></h6>
                        <p>SAISON 21-La collaboration entre Nikita Mazepin et Haas commence très...</p>
                    </div>
                </div>
                <div class="article small">
                    <img src="assets/img/sport5.jpg">
                    <div class="pins">
                        <h2><a href="news5.html">ES Tunis : Raed Fedâa de retour au bercail</a></h2>
                        <p>LA quelques heures de la clôture de la session du mercato,...'</p>
                    </div>
                </div>
                <div class="article small">
                    <img src="assets/img/sport6.jpg">
                    <div class="pins">
                        <h2><a href="news6.html">Qui peut encore gagner la Race to Dubai?</a></h2>
                        <p>Patrick Reed, Tommy Fleetwood, Collin Morikawa et Lee Westwood peuvent garantir la...</p>
                    </div>
                </div>
                <div class="article small">
                    <img src="assets/img/sport7.jpg">
                    <div class="pins">
                        <h2><a href="news7.html">LA JUVENTUS HUMILIE LE BARÇA (0-3)</a></h2>
                        <p>La Juventus Turin a signé une victoire sensationnelle au Camp Nou face au FC Barcelone...</p>
                    </div>
                </div>
                <class class="article small">
                    <img src="assets/img/sport8.jpg">
                    <div class="pins">
                        <h2>
                            <a href="news8.html">Vendé Globe : Zéro risque en pleine tempête</a>
                        </h2>
                        <p>Ruyant et Dalin prudents dans la tempête, Eviter la casse à tout prix,...</p>
                    </div>
                </class>
            </div>
        </div>
        <div class="plus">
            <ul>
                <h2><a href="actualites2.html">Afficher plus d'actualites</a></h2>
            </ul>
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