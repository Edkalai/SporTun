<?php
include 'DBconnection.php';
include '../../Controller/PHPfunctions.php';
session_start();
if (!isset($_SESSION["emailadmin"]))
    {
        header("Location: dashboardlogin.php");
        exit();
    }
    $sql='select * from utilisateurs where email="'.$_SESSION["emailadmin"].'";';
    $result1=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result1);
    $compte=$row['nom'].' '.$row['prenom'];



    $choix='Par défaut';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        }else{
            $id = 0;
        }
    
    //$id = $_GET['id'];

   mysqli_query($conn,"DELETE FROM events WHERE id='".$id."'");
    $sql="select * from events;";

    if(isset($_GET['tri'])) {
        $tri = $_GET['tri'];
        }else{
            $tri = 0;
        }

    if($tri==0){

        $sql1="SELECT * from events ORDER BY id DESC;";
        //echo $sql; die;
        $result=mysqli_query($conn,$sql1);
        $choix='Par défaut';


    }
        //Popularité
    if($tri==1){

        $sql1="SELECT * from events ORDER BY vues DESC;";
        $result=mysqli_query($conn,$sql1);
        $choix='Popularité';

    }

        //Nouveautés
    if($tri==2){

        $sql1="SELECT * FROM events ORDER BY date ASC ;";
        $result=mysqli_query($conn,$sql1);
        $choix='évènements à venir';


    }

        //Prix le plus bas
    if($tri==4){

        $sql1="SELECT * FROM events  ORDER BY prix ASC ;";
        //echo $sql; die;
        $result=mysqli_query($conn,$sql1);
        $choix='Prix le plus bas';


    }
        //Prix le plus élevé
    if($tri==5){

        $sql1="SELECT * FROM events ORDER BY prix DESC ;";
        $result=mysqli_query($conn,$sql1);
        $choix='Prix le plus élevé';


    }



//$sql='select * from events;';
//$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        

        <meta charset="UTF-8">
            <!-- Title Page-->
            <title>gestion des comptes</title>
        
            <!-- Fontfaces CSS-->
            
            <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
            <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        
            <!-- Bootstrap CSS-->
            <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
        
        
            <!-- Main CSS-->
            <link href="css/styles.css" rel="stylesheet" media="all">
            <link rel="shortcut icon" href="../front/assets/img/logo.ico">
            <script src="ajoutbillet.js"> </script>
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
                            
                            </li>
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

<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>Ajout des évènements:</strong>
        </div>
        <div class="card-body card-block">
            <form action="ajoutbillets.php" method="POST" enctype="multipart/form-data" id="AnnForm" name="f1" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Titre</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="titre" maxlength = "25" name="titre" style=" width:700px;" placeholder="Titre" class="form-control">
                        <small class="form-text text-muted">Titre de l'évènement</small>
                    </div>
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Déscription courte</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="descourte" name="descourte" maxlength = "69" style=" width:700px;" placeholder="Déscription courte" class="form-control">
                        <small class="form-text text-muted">Déscription courte de l'évènement</small>
                    </div>
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Prix billet</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="prix" name="prix" max = "200" style=" width:700px;" placeholder="Prix" class="form-control">
                        <small class="form-text text-muted">Prix en DT</small>
                    </div>
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Déscription Longue</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea type="text" id="deslongue" name="deslongue" maxlength = "800" cols="92" rows="15" style=" height:100px; width:700px;" placeholder="Déscription Longue" class="form-control"></textarea>
                        <small class="form-text text-muted">Déscription longue</small>
                    </div>
                   
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Date</label>
                        </div>
                    <div class="col-12 col-md-9">
                    <input type="date" id="start" name="date" class="form-control"
                           value="2021-01-05"
                           min="2021-01-05" max="2021-12-31" style=" width:700px;">
                            <small class="form-text text-muted">Tapez la date de l'évènement</small>

                    </div>
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Catégorie</label>
                    </div>
                    <div class="col-12 col-md-9">
                    <select name="categorie" id="categorie">
                                <option value="Sélectionner">Sélectionner</option>
                                <option value="Carritatif">Carritatif</option>
                                <option value="Tournoi">Tournoi</option>
                                <option value="Commercial">Commercial</option>
                                <option value="Conference">Conférence</option>
                                <option value="Online">Online</option>
                                <option value="Autre">AUTRE</option>

                            </select>
                        <small class="form-text text-muted">Catégorie de l'évènement</small>
                    </div>
                       
                            
                
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Choisir L'image</label>
                    </div>
                    <div class="col-12 col-md-9">
                    <input type="file" name="image" id="chooseFile" accept="images/*" multiple>
                    </div>
                <br> <br> <br> <br> 
        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary btn-sm" value="AnnForm" onclick="return verif()" >
                <i class="fa fa-dot-circle-o"></i> Publier
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>

        </form><p style="color: rgb(255, 0, 0);" id="erreur"></p>

</div>
<div class="row row-2">
    

    

    
    <select name="formal" onchange="javascript:handleSelect(this)">  
   <?php echo "<option selected disabled value='Sélectionner'>$choix</option>";?>  
    <option value="0">Par défaut</option> 
    <option value="1">Popularité</option> 
    <option value="2">évènements à venir</option> 
    <option value="4">Prix le plus bas</option> 
    <option value="5">Prix le plus élevé</option> 
    </select> 

</div>

<div class="card-header">
    <strong>Liste des évènements:</strong>
</div>
<div class="table-responsive table--no-card m-b-30">
    <table class="table table-borderless table-striped table-earning">
        <thead>
            <th>ID</th>
             <th>Titre</th>
            <th>Date </th>
            <th>Description courte</th>
            <th>Prix (en DT)</th>
            <th>Catégorie</th>
            <th>Vues</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
       
                            <?php 
                            while($rows=mysqli_fetch_assoc($result))
                            {
                               // $id=$rows['id'];
                                ?>

                            <tr class="tr-shadow">

                                <td><?php echo $rows['id']; ?></td>
                                <td><?php echo $rows['titre']; ?></td>
                                <td><?php echo $rows['date']; ?></td>
                                <td><?php echo $rows['descourte']; ?></td>
                                <td><?php echo $rows['prix']; ?></td>
                                <td><?php echo $rows['categorie']; ?></td>
                                <td><?php echo $rows['vues']; ?></td>
                                <td>


<div class="table-data-feature">
<?php $id=$rows['id'];?>
<?php echo"<a href='gestionbillets.php?id=$id'>
            <button class='item' data-toggle='tooltip' data-placement='top' title='Supprimer'>
                <i class='zmdi zmdi-delete'></i>
            </button>
           </a>"; ?>
</div>
</td>

                              

                                

                            </tr>

                            <?php
                            }
                            ?>

                           
                            


                        </tbody>
        
        
        </tbody>
    </table>
</div>


<script type="text/javascript"> 
            function handleSelect(elm) 
            {
           
            window.location = "gestionbillets.php?&tri="+elm.value; 
            //window.location = "AjouterAnnonce.html?tri=1"; 
            //window.location = elm.value+".php"; 
            } 
        </script>

</body>
</html>        
