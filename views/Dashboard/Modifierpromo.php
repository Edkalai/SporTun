<?php 
include 'DBconnection.php';
session_start();
if (!isset($_SESSION["emailadmin"]))
    {
        header("Location: dashboardlogin.php");
        exit();
    }
    $sql='select * from utilisateurs where email="'.$_SESSION["emailadmin"].'";';
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $compte=$row['nom'].' '.$row['prenom'];
$sql='select * from miseenvente;';
$result=mysqli_query($conn,$sql);
require_once "../../controller/ajouterpromotion.php" 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title Page-->
    <title>gestion des publicité</title>

    <!-- Fontfaces CSS-->

    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->


    <!-- Main CSS-->
    <link href="css/styles.css" rel="stylesheet" media="all">
</head>


<body>
 <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li>
                                <a href="gestionannonces.php">
                                    <i class="fas fa-bullhorn"></i>
                                    <span class="bot-line"></span>Gestion des produits</a>
                            </li>
                            <li>
                                <a href="gestionbillets.php">
                                    <i class="fas fa-tag"></i>
                                    <span class="bot-line"></span>Gestion des billets</a>
                            </li> 
                            <li class="has-sub">
                                <a href="gestionventes.php">
                                    <i class="fas fa-user"></i>
                                    <span class="bot-line"></span>Gestion des ventes</a>
                            
                            </li>  
                            <li class="has-sub">
                            <a href="gestionactualites.php">
                                    <i class="fas fa-list-alt"></i>
                                    <span class="bot-line"></span>Gestion des actualités</a>
                                    <li class="has-sub">
                            <a href="ModifierPublicite.php">
                                <i class="fas fa-user"></i>
                                <span class="bot-line"></span>Gestion des publicités</a>

                        </li>
                        <li class="has-sub">
                            <a href="Modifierpromo.php">
                                <i class="fas fa-user"></i>
                                <span class="bot-line"></span>Gestion des promotions</a>

                        </li>
                            
                            </li>
                            <li class="has-sub">
                                <a href="gestioncomptes.php">
                                    <i class="fas fa-user"></i>
                                    <span class="bot-line"></span>Gestion des comptes</a>
                            
                            </li>
                           
                        </ul>
                    </div>
                    <div class="header__tool">
                        
                        <div class="header-button-item js-item-menu">
                            <i class="zmdi zmdi-settings"></i>
                            <div class="setting-dropdown js-dropdown">
                               
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-globe"></i>Language</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-pin"></i>Location</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-email"></i>Email</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="content">
                                  <span> <?php echo $compte ?></span>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    
                                    <div class="account-dropdown__footer">
                                        <a href="adminlogout.php">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->
        <div class='page-content--bgf7'>
            <div class="container">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Gestion des Publicites:</strong>
            </div>
</div>
</div>
         
                <div class="table-responsive table--no-card m-b-30">
                    <?PHP

                    $promoC = new promoC();
                    $listepromo = $promoC->afficherpromotion();
                    ?>
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                        <th>ID Promotion</th>
                        <th>Titre</th>
                        <th>Prix</th>
                        <th>ID</th>
                        <th></th>
                       
                        
                        
                
                        
                        </thead>
                        <tbody>

                        <?PHP
                        $numprom=0;
                        foreach ($listepromo as $row) {
                            ?>
                            <tr>
                                <td><?PHP echo $row['idpromo']; ?></td>
                                <td><?PHP echo $row['titre']; ?></td>
                                <td><?PHP echo $row['prix']; ?></td>
                                <td><?PHP echo $row['idproduit']; ?></td>
                                <td>
                                <h1><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button></h1>
                                    <form method="POST" action="../../controller/supprimerpromotion.php">
                                        <input type="submit" name="supprimer" value="Supprimer">
                                        <input type="hidden" value=<?PHP echo $row['idpromo']; ?> name="idpromo">
                                    </form>
                                </td>
                                
                            </tr>
                            <?PHP $numprom++; ?>
                            <?PHP
                        }
                        
                        ?>
                     
                        <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number"><?php echo $numprom ; ?></h2>
                                <span class="desc">Nombres des promotions</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titre</th>
                                <th>Desription</th>
                                <th>Prix</th>
                                <th></th>

                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            while($rows=mysqli_fetch_assoc($result))
                            {
                                $id=$rows['id'];
                                ?>

                            <tr class="tr-shadow">

                                <td><?php echo $rows['id']; ?></td>
                                <td><?php echo $rows['titre']; ?></td>
                                <td><?php echo $rows['description']; ?></td>
                                <td><?php echo $rows['prix']; ?></td>
                                <td></td>
                                <td><h1><?php echo"<a href='ajoutprom.php?id=$id'>
                                                <button class='item' data-toggle='tooltip' data-placement='top' title='Ajouter la Promotion'>
                                                    <i class='zmdi zmdi-mail-send'></i>
                                                </button>
                                               </a>"; ?></h1></td>

                            
          
                                
                                
                                

                            </tr>

                            <?php
                            }
                            ?>
                            <tr class="spacer"></tr>
                            


                        </tbody>
                    </table>
                </div>

                        </tbody>
                    </table>
                </div>
                        </div>
                        </div>

</body>
</html>