<?php
    require_once('../../Server Side/function.php');
    session_start();
	if (!isset($_SESSION['admin_ID'])){
		header('location:index.php');
    }
    
    $admin_ID = $_SESSION['admin_ID'];

    $query_admin_data = $db->prepare('SELECT * FROM admin WHERE ID=:ID');
    $query_admin_data->execute(array(
        'ID' => $admin_ID
    ));
    foreach($query_admin_data as $admin_data){
        $admin_name = $admin_data['admin_name'];
        $admin_mail = $admin_data['admin_mail'];
        $admin_password = $admin_data['admin_password'];
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home | Admin La Joie Plazza</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- icon
		============================================ -->
    <link rel="stylesheet" href="../en/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../en/fonts/fontawesome/css/font-awesome.min.css">
</head>

<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="home.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="home.php"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="home.php">
                                <img id="icon_img" src="img/icons/home.png" />
                                <span class="mini-click-non">Acceuil</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow" href="chambre.php" aria-expanded="false">
                                <img id="icon_img" src="img/icons/bed-room.png" />
                                <span class="mini-click-non">Chambres</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="chambre-toute" href="chambre-toute.php"><span class="mini-sub-pro"> | Toute</span></a></li>
                                <li><a title="chambre-ajoute" href="chambre-ajoute.php"><span class="mini-sub-pro"> | Ajouté</span></a></li>
                                <li><a title="chambre-edite" href="chambre-edite.php"><span class="mini-sub-pro"> | Edité</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="booking.php">
                                <img id="icon_img" src="img/icons/booking.png" />
                                <span class="mini-click-non">Reservations</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow" href="galerie.php" aria-expanded="false"><img id="icon_img" src="img/icons/galerie.png" /> <span class="mini-click-non">Galerie</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="galerie-toute" href="galerie-toute.php"><span class="mini-sub-pro"> | Toute</span></a></li>
                                <li><a title="galerie-ajoute" href="galerie-ajoute.php"><span class="mini-sub-pro"> | Ajouté</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="blog.php" aria-expanded="false"><img id="icon_img" src="img/icons/blog.png" /> <span class="mini-click-non">Blog</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="blog-tout" href="blog-tout.php"><span class="mini-sub-pro"> | Toute</span></a></li>
                                <li><a title="blog-ajoute" href="blog-ajoute.php"><span class="mini-sub-pro"> | Ajouté</span></a></li>
                                <li><a title="blog-edite" href="blog-edite.php"><span class="mini-sub-pro"> | Edité</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="temoignage.php" aria-expanded="false"><img id="icon_img" src="img/icons/testim.png" /> <span class="mini-click-non">Temoignage</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="temoignage-tout" href="temoignage-tout.php"><span class="mini-sub-pro"> | Toute</span></a></li>
                                <li><a title="temoignage-ajoute" href="temoignage-ajoute.php"><span class="mini-sub-pro"> | Ajouté</span></a></li>
                                <li><a title="temoignage-edite" href="temoignage-edite.php"><span class="mini-sub-pro"> | Edité</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="home.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <!-- --- empty div --- -->
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i>
                                                        <span class="indicator-ms"></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="educate-icon educate-bell" aria-hidden="true"></i>
                                                        <span class="indicator-nt"></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="img/student/4.jpg" alt="" />
                                                        <span class="admin-name">
                                                            <?php 
                                                                if (isset($admin_name)){
                                                                    echo $admin_name;
                                                                }
                                                                else{
                                                                    echo 'Admin Name';
                                                                }
                                                            ?>
                                                        </span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>Mon Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Parametre</a>
                                                        </li>
                                                        <li><a href="deconnexion.php"><span class="edu-icon edu-locked author-log-ic"></span>Déconnexion</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="educate-icon educate-menu"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li>
                                            <a data-toggle="collapse" data-target="#Charts" href="home.php">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Chambres <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="chambre-toute.php">Toute</a>
                                                </li>
                                                <li><a href="chambre-ajoute.php">Ajouté</a>
                                                </li>
                                                <li><a href="chambre-edite.php">Edité</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="booking.php">Reservations</a>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Galerie <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="galerie-toute.php">Toute</a>
                                                </li>
                                                <li><a href="galerie-ajoute.php">Ajouté</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Blog <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="blog-tout.php">Toute</a>
                                                </li>
                                                <li><a href="blog-ajoute.php">Ajouté</a>
                                                </li>
                                                <li><a href="blog-edite.php">Edité</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="temoignage-tout.php">Toute</a>
                                                </li>
                                                <li><a href="temoignage-ajoute.php">Ajouté</a>
                                                </li>
                                                <li><a href="temoignage-edite.php">Edité</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Recherche..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="home.php">Acceuil</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Chambres</h5>
                                <?php
                                    $query_admin_home_chambres = $db->prepare('SELECT * FROM booking');
                                    $query_admin_home_chambres->execute();
                                    $reservation_count = 0;
                                    $reservation_mount_count = 0;
                                    foreach($query_admin_home_chambres as $admin_hChambres){
                                        $reservation_mount_count = $reservation_mount_count+$admin_hChambres['prix'];
                                        $reservation_count = $reservation_count+1;
                                    }
                                ?>
                                <h2>$<span class="counter"><?php echo $reservation_mount_count; ?></span> <span class="tuition-fees"><?php echo $reservation_count; ?> Reservations</span></h2>
                                <span class="text-success"><?php echo date('d').'/'.date('m'); ?></span>
                                <?php 
                                    $progress_d = date('d')/30*100;           
                                ?>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progress_d; ?>%;"> <span class="sr-only"><?php echo $progress_d; ?>% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Temoignage</h5>
                                <?php
                                    $query_admin_home_temoignage = $db->prepare('SELECT * FROM temoignage');
                                    $query_admin_home_temoignage->execute();
                                    $temoignage_count = 0;
                                    foreach($query_admin_home_temoignage as $admin_hTemoignage){
                                        $aaaaa=$admin_hTemoignage['name'];
                                        $temoignage_count = $temoignage_count+1;
                                    }
                                ?>
                                <h2><span class="counter"><?php echo $temoignage_count; ?></span> <span class="tuition-fees"><?php echo $temoignage_count; ?> personnes</span></h2>
                                <span class="text-danger"><?php echo date('m').'/20'.date('y'); ?></span>
                                <?php 
                                    $progress_m = date('m')/12*100;           
                                ?>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progress_m; ?>%;"> <span class="sr-only"><?php echo $progress_m; ?>% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Blog</h5>
                                <?php
                                    $query_admin_home_blog = $db->prepare('SELECT * FROM blog');
                                    $query_admin_home_blog->execute();
                                    $blog_count = 0;
                                    foreach($query_admin_home_blog as $admin_hBlog){
                                        $aaaaa=$admin_hBlog['ID'];
                                        $blog_count = $blog_count+1;
                                    }
                                ?>
                                <h2><span class="counter"><?php echo $blog_count; ?></span> <span class="tuition-fees"><?php echo $blog_count; ?> sujets</span></h2>
                                <span class="text-info"><?php echo date('d').'/'.date('m'); ?></span>
                                <?php 
                                    $progress_d = date('d')/30*100;           
                                ?>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progress_d; ?>%;"> <span class="sr-only"><?php echo $progress_d; ?>% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Abonneé</h5>
                                <?php
                                    $query_admin_home_nl = $db->prepare('SELECT * FROM news_letter');
                                    $query_admin_home_nl->execute();
                                    $nl_count = 0;
                                    foreach($query_admin_home_nl as $admin_hNl){
                                        $aaaaa=$admin_hNl['ID'];
                                        $nl_count = $nl_count+1;
                                    }
                                ?>
                                <h2><span class="counter"><?php echo $nl_count; ?></span> <span class="tuition-fees"><?php echo $nl_count; ?> abonnés</span></h2>
                                <span class="text-inverse"><?php echo date('m').'/20'.date('y'); ?></span>
                                <?php 
                                    $progress_m = date('m')/12*100;           
                                ?>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progress_m; ?>%;"> <span class="sr-only"><?php echo $progress_m; ?>% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject"><b>Legende</b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp graph-rp-dl">
                                            <p>Tous les gains sont compté</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline cus-product-sl-rp">
                                <li>
                                    <h5><i class="fa fa-circle" style="color: #f3c300;"></i>Chambre</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle" style="color: #933EC5;"></i>Temoignage</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle" style="color: #65b12d;"></i>blog</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle" style="color: #D80027;"></i>Abonnés</h5>
                                </li>
                            </ul>
                            <!-- <div id="extra-area-chart" style="height: 356px;"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- <div class="library-book-area mg-t-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-cards-item">
                            <div class="single-product-image">
                                <a href="#"><img src="img/product/profile-bg.jpg" alt=""></a>
                            </div>
                            <div class="single-product-text">
                                <img src="img/product/pro4.jpg" alt="">
                                <h4><a class="cards-hd-dn" href="#">Admin Dominic</a></h4>
                                <h5>IT Manager</h5>
                                <p class="ctn-cards">Lorem ipsum dolor sit amet, this is a consectetur adipisicing elit</p>
                                <a class="follow-cards" href="#">Demarrée</a>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="cards-dtn">
                                            <h3><span class="counter">199</span></h3>
                                            <p>Articles</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="cards-dtn">
                                            <h3><span class="counter">599</span></h3>
                                            <p>Blog</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="cards-dtn">
                                            <h3><span class="counter">399</span></h3>
                                            <p>Commentaires</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-review-st-item res-mg-t-30 table-mg-t-pro-n">
                            <div class="single-review-st-hd">
                                <h2>Temoignages</h2>
                            </div>
                            <div class="single-review-st-text">
                                <img src="img/notification/1.jpg" alt="">
                                <div class="review-ctn-hf">
                                    <h3>Sarah Graves</h3>
                                    <p>J'aime bien ca</p>
                                </div>
                                <div class="review-item-rating">
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star-half"></i>
                                </div>
                            </div>
                            <div class="single-review-st-text">
                                <img src="img/notification/2.jpg" alt="">
                                <div class="review-ctn-hf">
                                    <h3>Garbease sha</h3>
                                    <p>C'est Professionnel</p>
                                </div>
                                <div class="review-item-rating">
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star-half"></i>
                                </div>
                            </div>
                            <div class="single-review-st-text">
                                <img src="img/notification/3.jpg" alt="">
                                <div class="review-ctn-hf">
                                    <h3>Gobetro pro</h3>
                                    <p>Grand Site Web</p>
                                </div>
                                <div class="review-item-rating">
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star-half"></i>
                                </div>
                            </div>
                            <div class="single-review-st-text">
                                <img src="img/notification/4.jpg" alt="">
                                <div class="review-ctn-hf">
                                    <h3>Siam Graves</h3>
                                    <p>Ca c'est bien</p>
                                </div>
                                <div class="review-item-rating">
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star-half"></i>
                                </div>
                            </div>
                            <div class="single-review-st-text">
                                <img src="img/notification/5.jpg" alt="">
                                <div class="review-ctn-hf">
                                    <h3>Sarah Graves</h3>
                                    <p>J'aime bien ca</p>
                                </div>
                                <div class="review-item-rating">
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star-half"></i>
                                </div>
                            </div>
                            <div class="single-review-st-text">
                                <img src="img/notification/6.jpg" alt="">
                                <div class="review-ctn-hf">
                                    <h3>Julsha Grav</h3>
                                    <p>J'aime vos services</p>
                                </div>
                                <div class="review-item-rating">
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star-half"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-product-item res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                            <div class="single-product-image">
                                <a href="#"><img src="../image/img_3.jpg" alt=""></a>
                            </div>
                            <div class="single-product-text edu-pro-tx">
                                <h4><a href="#">Double Deluxe Room</a></h4>
                                <h5>Nulla vel metus scelerisque ante sollicitudin. Fusce condimentum nunc ac nisi vulputate fringilla.</h5>
                                <div class="product-price">
                                    <h3>$150<sub>/nuit</sub></h3>
                                    <div class="single-item-rating">
                                        <i class="educate-icon educate-star"></i>
                                        <i class="educate-icon educate-star"></i>
                                        <i class="educate-icon educate-star"></i>
                                    </div>
                                </div>
                                <div class="product-buttons">
                                    <button type="button" class="button-default cart-btn">Voir Plus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <br/><br/><br/><br/><br/><br/>
        <br/><br/><br/><br/><br/><br/>
        <!-- <br/><br/><br/><br/><br/><br/> -->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | Made by <a href="http://vianneyr.com" target="_blank" style="color: #f3c300;">Solft World <i>(VR)</i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>