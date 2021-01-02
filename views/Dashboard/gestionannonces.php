<?php
include 'DBconnection.php';

/***********js error msg********/
$error="";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    }else{
        $id = 0;
    }


if(isset($_GET['choix'])){
    $choix = $_GET['choix'];
    }else{
        $choix = 0;
    }

/***** statistics ******/

if($choix==0){
    $total='nombre total de demandes de vente:';
    $table='demandesdevente';
}

if($choix==1){
    $total='nombre total de produits en vente:';
    $table='miseenvente';

}






if($choix!=2){

mysqli_query($conn,"DELETE FROM $table WHERE id='".$id."'");
$sql="select * from $table;";



//mysqli_close($conn);

$result=mysqli_query($conn,$sql);
$NbAnnonces=mysqli_num_rows($result);
}






?>


<!DOCTYPE html>
<html>
<head>


    <!-- Title Page-->
    <title>gestion des produits</title>

    <!-- Fontfaces CSS-->
    
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->


    <!-- Main CSS-->

    <link href="css/styles.css" rel="stylesheet" media="all">

    <link rel="shortcut icon" href="../front/assets/img/logo.ico">

    <?php if($choix==2){
    echo"<link href='../Front/style.css' rel='stylesheet' media='all'>
    
    <style>
        .reg-container {
          max-width: 450px;
        }
        .imgGallery img {
          padding: 8px;
          max-width: 100px;
        }    
    </style>
    
    ";
    }
    ?>


    


    <script src="AjouterAnnonce1.js"> </script>


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
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-home"></i>Acceuil
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#gestionannonces.php">
                                    <i class="fas fa-bullhorn"></i>
                                    <span class="bot-line"></span>Gestion des produits</a>
                            </li>
                            <li>
                                <a href="gestionbillets.php">
                                    <i class="fas fa-tag"></i>
                                    <span class="bot-line"></span>Gestion des billets</a>
                            </li>   
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-list-alt"></i>
                                    <span class="bot-line"></span>Gestion des actualités</a>
                            
                            </li>
                            <li class="has-sub">
                                <a href="gestioncompte.html">
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
                                <div class="image">
                                    <img src="images/icon/avatar-01.png" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">john doe</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="imag/avat.png" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">john doe</a>
                                            </h5>
                                            <span class="email">johndoe@example.com</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="#">
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

        <!-- HEADER MOBILE-->
        




        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                
                <div class="header-button-item js-item-menu">
                    <i class="zmdi zmdi-settings"></i>
                    <div class="setting-dropdown js-dropdown">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                            </div>
                        </div>
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
                            
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">ash</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">ash</a>
                                    </h5>
                                    <span class="email">ash@example.com</span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="#">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <?php if($choix!=2){?>
            
                <?php
                if($NbAnnonces==0){
                ?>


                                
                                </br></br></br></br></br>
                                <h2 style='text-align:center;'> Aucune annonce trouvée!</h2>
                                </br></br></br>
                        <?php
                        }else{
                        ?>
                                
                                <div class='page-content--bgf7'>
                                <br><br><br>

                                


                                    <div class=choose-btn>
                                        <div>
                                            <?php if($choix==0){
                                            echo "<a href='gestionannonces.php?choix=0' class='button button5 active'  > <strong>Demandes de vente</strong> </a>";
                                            }else{
                                            echo "<a href='gestionannonces.php?choix=0' class='button button5 '  > <strong>Demandes de vente</strong> </a>";
                                            }
                                            ?>
                                        </div>
                                        <div>
                                            <?php if($choix==1){
                                            echo "<a href='gestionannonces.php?choix=1' class='button button5 active'  > <strong>Produits en vente</strong> </a>";
                                            }else{
                                            echo "<a href='gestionannonces.php?choix=1' class='button button5 '  > <strong>Produits en vente</strong> </a>";
                                            }
                                            ?>
                                        </div>
                                        <div>

                                            <a href="gestionannonces.php?choix=2" class="button button5"  id=<?php echo 'button button5'; ?> > <strong>Mettre en vente</strong> </a>


                                        </div>


                                    </div>



                                    <div class='stat'>
                                        <div class='title'>
                                            <h4><?php echo $total; ?></h4>
                                            <?php echo "<p>$NbAnnonces</p>" ?>
                                        </div>


                                    </div>




                                <br><br><br>
                                    <div class='container'>
                                    <div class='row'>
                                    <div class='col-md-12'>
                                    </div>
                                    
                                <div class='table-responsive table-responsive-data2'>
                                <table class='table table-data2'>
                                        <thead>
                                            <tr>
                                                <th>Titre</th>
                                                <th>Description</th>
                                                <th>Categories</th>
                                                <th>Image</th>
                                                <th>Prix</th>
                                                <?php
                                                if($choix==0){ 
                                                echo "<th> emplacement </th>";
                                                echo "<th> email </th>";
                                                echo "<th> numTel </th>";
                                                }?>

                                            </tr>
                                        </thead>
                                        <tbody>

                            <?php
                            while($rows=mysqli_fetch_assoc($result))
                            {
                            $id=$rows['id'];
                            ?>

                            <tr class="tr-shadow">

                                <td><?php echo $rows['titre']; ?></td>
                                <td><?php echo $rows['description']; ?></td>
                                <td><?php echo $rows['categorie']; ?></td>
                                <td><?php echo "<a href=imagesproduit.php?id=$id&choix=$choix> <img src='../Front/assets/img/".$rows['image1']."' style='width:150px' >"; ?></td>
                                <td><?php echo $rows['prix']; ?></td>
                                <?php
                                if($choix==0){ 
                                echo "<td> ".$rows['emplacement']." </td>";
                                echo "<td> ".$rows['email']." </td>";
                                echo "<td> ".$rows['numtel']." </td>";
                                }?>


                                <td>


                                    <div class="table-data-feature">
                                    <?php $id=$rows['id'];?>
                                    <?php echo"<a href='gestionannonces.php?choix=$choix&id=$id'>
                                                <button class='item' data-toggle='tooltip' data-placement='top' title='Supprimer'>
                                                    <i class='zmdi zmdi-delete'></i>
                                                </button>
                                               </a>"; ?>
                                    </div>
                                </td>

                            </tr>

                            <?php
                            }
                            }
                            
                            ?>

                            <tr class="spacer"></tr>
                            


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <?php
        }else{
    /*********************page ajouter produit (choix==2)************************/
    ?>

    <div class='page-content--bgf7'>
    <br><br><br>



    <div class=choose-btn>
    <div>
    <a href="gestionannonces.php?choix=0" class="button button5"> <strong>Demandes de vente</strong> </a>
    </div>
    <div>
    <a href="gestionannonces.php?choix=1" class="button button5"> <strong>Produits en vente</strong> </a>
    </div>
    <div>
    <a href="gestionannonces.php?choix=2" class="button button5 active"> <strong>Mettre en vente</strong> </a>
    </div>
    </div>



    <div class="account-page">
        <div class="container">


        <?php

        if (isset($_GET["msg"]))
        {
        $msg=$_GET["msg"];
        }
        else{
        $msg='';
        }

        if ($msg!='')
        {
        ?>
            <div style="text-align:center;">
            <br><br><br>
            
            <p style="color :green; font-size: 25px; " ><?php echo $msg ?> </p>
            
            <a href='gestionannonces.php?choix=2' class='btn paniervide-btn'>Publier Un Autre Produit  </a>
            
            <br><br><br><br><br><br><br><br>

            </div>
        <?php
        }
        else
        { 
        ?>


            <div class="row">
                    <div class="vendreproduit-container">
                        <form action="AjouterAnnonce1.php" method="POST" id="AnnForm" name="f1" enctype="multipart/form-data">
                            <label for="titre">Titre</label>
                            <input type="text" name="titre" id="titre" placeholder="Saisissez un titre descriptif">
                            </br></br>
                            <label for="description">Description</label>
                            </br>
                            <textarea name="description" id="description" placeholder=" Description" cols="70" rows="5"></textarea>
                            </br></br>

                            <label for="cars">Catégorie</label>
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
                                <input type="file" name="fileUpload[]" class="customfile-input" id="chooseFile" multiple>
                            </div>
                            </br></br>
                            <label for="prix">Prix (TND)</label>
                            <input type="number" name="prix" placeholder="prix">
                            </br></br>
                            </br>
                            

                            </br>
                            <p style="color: rgb(255, 0, 0);" id="erreur"></p>
                            <br>
                            <button type="submit" name="submit" class="btn" value="AnnForm" onclick="return verif()">Ajouter le produit</button>
                             
                        </form>


    
                    </div>
    
    
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

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
                                    







<?php
        }

?>

    

                <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    
    <script src="vendor/animsition/animsition.min.js"></script>

    

    <!-- Main JS-->
    <script src="js/main.js"></script>





</body>
</html>