<?php
include "../../controller/ajouterpromotion.php";
include_once "../../model/promos.php";

$promoC = new promoC();
$error = "";
if (
    isset($_POST["titre"]) &&
    isset($_POST["description"])&&
    isset($_POST["prix"]) 
) {
    if (
        !empty($_POST["titre"]) &&
        !empty($_POST["description"]) &&
        !empty($_POST["prix"]) 

    ) {
        $promo = new promo(
            $_POST['titre'],
            $_POST['description'],
            $_POST['prix']
                );

        $promoC->modifierpromotion($promo, $_GET['idpromo']);
        // header('Location:../front/');
    } else
        echo "Missing information";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title Page-->
    <title>gestion des promotions</title>

    <!-- Fontfaces CSS-->

    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->


    <!-- Main CSS-->
    <link href="css/styles.css" rel="stylesheet" media="all">
</head>


<body class="animsition">

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
                            <a href="index.html">
                                <i class="fas fa-home"></i>Acceuil
                                <span class="bot-line"></span>
                            </a>
                        </li>
                        <li>
                            <a href="gestionannonces.html">
                                <i class="fas fa-bullhorn"></i>
                                <span class="bot-line"></span>Gestion des annonces</a>
                        </li>
                        <li>
                            <a href="gestionbillets.html">
                                <i class="fas fa-tag"></i>
                                <span class="bot-line"></span>Gestion des billets</a>
                        </li>
                        <li class="has-sub">
                            <a href="gestionactualites.html">
                                <i class="fas fa-list-alt"></i>
                                <span class="bot-line"></span>Gestion des actualités</a>

                        </li>
                        <li class="has-sub">
                            <a href="gestioncomptes.php">
                                <i class="fas fa-user"></i>
                                <span class="bot-line"></span>Gestion des comptes</a>

                        </li>
                        <li class="has-sub">
                            <a href="Modifierpublicite.php">
                                <i class="fas fa-user"></i>
                                <span class="bot-line"></span>Gestion des publicités</a>

                        </li>
                        <li class="has-sub">
                            <a href="Modifierpromo.php">
                                <i class="fas fa-user"></i>
                                <span class="bot-line"></span>Gestion des promotions</a>

                        </li>
                    </ul>
                </div>
                <div class="header__tool">
                    <div class="header-button-item has-noti js-item-menu">
                        <i class="zmdi zmdi-notifications"></i>
                        <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                            <div class="notifi__title">
                                <p>You have 3 Notifications</p>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c1 img-cir img-40">
                                    <i class="zmdi zmdi-email-open"></i>
                                </div>
                                <div class="content">
                                    <p>You got a email notification</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c2 img-cir img-40">
                                    <i class="zmdi zmdi-account-box"></i>
                                </div>
                                <div class="content">
                                    <p>Your account has been blocked</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c3 img-cir img-40">
                                    <i class="zmdi zmdi-file-text"></i>
                                </div>
                                <div class="content">
                                    <p>You got a new file</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__footer">
                                <a href="#">All notifications</a>
                            </div>
                        </div>
                    </div>
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
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_GET['idpromo'])) {
    $promo = $promoC->recupererpromotion($_GET['idpromo']);
    ?>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Modifier la promotion:</strong>
            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Titre:</label>
                        </div>
                        
                        <div class="col-12 col-md-9">
                            <input type="text" name="titre" id="titre" value="<?php echo $promo['titre']; ?> " class="form-control">
                            <small class="form-text text-muted">Tapez le nv titre du promo</small>
                        </div>
                    </div>  
                     <div class="row form-group">    
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Description:</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="description" id="description" value="<?php echo $promo['description']; ?> " class="form-control">
                            <small class="form-text text-muted"></small>
                        </div>
                     </div>
                     <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">prix:</label>
                        </div>
                        
                        <div class="col-12 col-md-9">
                            <input type="text" name="prix" id="prix" value="<?php echo $promo['prix']; ?> " class="form-control">

                        </div>
                    </div>

                 
                    <div class="card-footer">
                        <button type="submit" value="Envoyer" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> submit
                        </button>
                    </div>

                </form>

            </div>
            </th>


            <?php
            } else {
                echo "errorrrr ";
            }
            ?>
            </div>
            </th>



</body>
</html>
