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
    require_once "../../controller/ajouterpublicite.php" 

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
                                        <a href="../../controller/adminlogout.php">
                                            <i class="zmdi zmdi-power"></i>Déconnexion</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->
<div class="container">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Gestion des Publicites:</strong>
            </div>
    </div>
</div>
</th>
<th>
    <div class="table-responsive table--no-card m-b-30">
        <?PHP

        $publiciteC = new publiciteC();
        $listepublicite = $publiciteC->afficherpublicite();
        ?>
        <table class="table table-borderless table-striped table-earning">
            <thead>
                 <th>id</th>
                 <th>titre</th>
                <th>description</th>
                <th>image</th>
                <th>lien</th>
                <th> </th>
                <th> </th>
            </tr>
            </thead>
            <tbody>
            <?PHP
                            $numpub=0;

                            foreach ($listepublicite as $row) {
                            ?>
            <tr>
                <td><?PHP echo $row['idpublicite']; ?></td>
                <td><?PHP echo $row['titre']; ?></td>
                <td><?PHP echo $row['description']; ?></td>
                <td><img width="100" src="../front/assets/img/<?PHP echo $row['image']; ?> "> </td>
                <td><?PHP echo $row['lien']; ?></td>

                <td>
                
                    <form method="POST" action="../../controller/supprimerpublicite.php">
                    <h1><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button></h1>
                        <input type="submit" name="supprimer" value="">
                        <input type="hidden" value=<?PHP echo $row['idpublicite']; ?> name="idpublicite">
                    </form>
                </td>
                <td>
                    <a href="editpublicite.php?idpublicite=<?PHP echo $row['idpublicite']; ?>"><h1><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button></h1></a>
                </td>
            </tr>
            <?PHP $numpub++; ?>
            <?PHP
                           
                        }
                            ?>
           
                        <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number"><?php echo $numpub ; ?></h2>
                                <span class="desc">Nombres des publicités</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number"><?php echo $numpub*10 ; ?>.00TND</h2>
                                <span class="desc">Revenues publicitaires</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

            </tbody>
        </table>
    </div>
    </div>
</body>
</html>