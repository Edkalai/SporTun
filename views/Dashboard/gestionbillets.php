<?php
include 'DBconnection.php';
$sql='select * from events;';
$result=mysqli_query($conn,$sql);
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
        
    </head>

<body class="animsition">
    <div class="page-wrapper">
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
                    <li class="has-sub">
                        <a href="gestioncomptes.php">
                            <i class="fas fa-user"></i>
                            <span class="bot-line"></span>Gestion des publicités</a>
                    
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

<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>Ajout des évènements:</strong>
        </div>
        <div class="card-body card-block">
            <form action="ajoutbillets.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Titre</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" maxlength = "25" name="titre" style=" width:700px;" placeholder="Titre" class="form-control">
                        <small class="form-text text-muted">Titre de l'évènement</small>
                    </div>
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Déscription courte</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="descourte" maxlength = "69" style=" width:700px;" placeholder="Déscription courte" class="form-control">
                        <small class="form-text text-muted">Déscription courte de l'évènement</small>
                    </div>
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Prix billet</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="prix" max = "200" style=" width:700px;" placeholder="Prix" class="form-control">
                        <small class="form-text text-muted">Prix en DT</small>
                    </div>
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Déscription Longue</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea type="text" id="text-input" name="deslongue" maxlength = "800" cols="92" rows="15" style=" height:100px; width:700px;" placeholder="Déscription Longue" class="form-control"></textarea>
                        <small class="form-text text-muted">Déscription longue</small>
                    </div>
                   
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Date</label>
                        </div>
                    <div class="col-12 col-md-9">
                    <input type="date" id="start" name="date" class="form-control"
                           value="2020-01-01"
                           min="2020-01-01" max="2021-12-31">
                            <small class="form-text text-muted">Tapez la date de l'évènement</small>

                    </div>
                       
                            
                
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Choisir L'image</label>
                    </div>
                    <div class="col-12 col-md-9">
                    <input type="file" name="image" accept="images/*" multiple>
                    </div>
                <br> <br> <br> <br> 
        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Publier
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>

        </form>

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
            <th class="text-right">Prix (en DT)</th>
        </tr>
        </thead>
        <tbody>
       
                            <?php 
                            while($rows=mysqli_fetch_assoc($result))
                            {
                                ?>

                            <tr class="tr-shadow">

                                <td><?php echo $rows['id']; ?></td>
                                <td><?php echo $rows['titre']; ?></td>
                                <td><?php echo $rows['date']; ?></td>
                                <td><?php echo $rows['descourte']; ?></td>
                                <td><?php echo $rows['prix']; ?></td>
                              

                                

                            </tr>

                            <?php
                            }
                            ?>

                           
                            


                        </tbody>
        
        
        </tbody>
    </table>
</div>


</body>
</html>