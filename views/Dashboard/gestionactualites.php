<?php

include_once 'C://xampp/htdocs/webprojettest/allfolders/model/users.php';
include_once 'C://xampp/htdocs/webprojettest/allfolders/controller/userC.php';


$error = "";
// create user
$user = null;

// create an instance of the controller
$userC = new UtilisateurC();
if (
    !empty($_POST["titre"]) && 
            !empty($_POST["texte"]) && 
            !empty($_POST["auteur"]) && 
            !empty($_POST["urlImage"]) && 
            !empty($_POST["notifCreateur"]) &&
            !empty($_POST["Datearticle"])
) {
    if (
        !empty($_POST["titre"]) && 
            !empty($_POST["texte"]) && 
            !empty($_POST["auteur"]) && 
            !empty($_POST["urlImage"]) && 
            !empty($_POST["notifCreateur"]) &&
            !empty($_POST["Datearticle"])
    ) {
        $user = new Utilisateur(
            $_POST['titre'],
            $_POST['texte'],
            $_POST['auteur'],
            $_POST['urlImage'],
            $_POST['notifCreateur'],
            $_POST['Datearticle']
        );
        $userC->ajouterarticles($user);
        //  header('Location:afficherUtilisateurs.php');
    } else
        $error = "Missing information";
}

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Dashboard</title>

        <!-- Fontfaces CSS-->
        <link href="css/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="css/styles.css" rel="stylesheet" media="all">

    </head>

    <body>
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="index.html">
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
                                    <span class="bot-line"></span>Gestion des produits</a>
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
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
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
                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
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

        <!-- ACTIONS -->
        <section id="actions" class="py-4 mb-4 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModal">
                            <i class="fas fa-plus"></i> Add Post
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModal">
                            <i class="fas fa-plus"></i> Add Category
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- POSTS -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-9" id="postParent">
                        <div class="card" id="postContainer">
                            <div class="card-header">
                                <h4>Latest Posts</h4>
                            </div>
                            <table class="table table-striped" id="postTable">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="latestPosts">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center bg-primary text-white mb-3">
                            <div class="card-body">
                                <h3>Posts</h3>
                                <!-- Added ID for JS -->
                                <h4 class="display-4" id="postCount">
                                    <i class="fas fa-pencil-alt"></i>
                                </h4>
                                <a href="posts.html" class="btn btn-outline-light btn-sm">View</a>
                            </div>

                        </div>
                        <div class="card text-center bg-success text-white mb-3">
                            <div class="card-body">
                                <h3>Categories</h3>
                                <h4 class="display-4">
                                    <i class="fas fa-folder"></i> 4
                                </h4>
                                <a href="categories.html" class="btn btn-outline-light btn-sm">View</a>
                            </div>
                        </div>
                        <div class="card text-center bg-warning text-white mb-3">
                            <div class="card-body">
                                <h3>Users</h3>
                                <h4 class="display-4">
                                    <i class="fas fa-users"></i> 4
                                </h4>
                                <a href="users.html" class="btn btn-outline-light btn-sm">View</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="lead text-center">
                            Copyright &copy; <span id="year"></span> SPORTUN
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- MODALS -->

        <!-- ADD POST MODAL -->
        <div class="modal fade" id="addPostModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title">Add Post</h5>
                        <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
                    </div>
                    <div class="modal-body">
                        <form  action=""  method="post">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="titre" name="titre">
                            </div> 
                            <div class="form-group">
                                <label for="auteur">auteur</label>
                                <input type="text" class="form-control" id="auteur" name="auteur">
                            </div>
                            <div class="form-group">
                                <label for="notifCreateur">notifCreateur</label>
                                <input type="number" class="form-control" id="notifCreateur" name="notifCreateur">
                            </div>
                            <div class="form-group">
                                <label for="Datearticle">Datearticle</label>
                                <input type="date" class="form-control" id="Datearticle" name="Datearticle">
                            </div>
                            <div class="form-group">
                                <label for="image">Upload Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="urlImage" name="urlImage">
                                    <label for="urlImage" class="custom-file-label">Choose File</label>
                                    <small class="form-text text-muted">Max Size 3Mb</small>
                                </div>
                                <div class="form-group">
                                    <label for="texte">texte</label>
                                    <input type="text" class="form-control" id="texte" name="texte" >
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!-- Added id for JS -->
                        <button class="btn btn-primary" data-dismiss="modal"  type="submit" name="signup_submit">Add Post</button>

                        
                    </div>
                </div>
            </div>
        </div>


        <!-- ADD CATEGORY MODAL -->
        <div class="modal fade" id="addCategoryModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title">Add Category</h5>
                        <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" data-dismiss="modal">Save Changes</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- ADD USER MODAL -->
        <div class="modal fade" id="addUserModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h5 class="modal-title">Add User</h5>
                        <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password2">Confirm Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" data-dismiss="modal">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- WYSWYG Editor -->
        <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

        <script>
            // Get the current year for the copyright
            $('#year').text(new Date().getFullYear());
            // Modal Editor
            CKEDITOR.replace('editor1');
        </script>
        <!-- Local JS -->
        <script src="js/app.js"></script>
    </body>

    </html>