<?php
    require_once('../../Server Side/function.php');
    session_start();
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
                            <li>
                                <a href="home.php">
                                    <img id="icon_img" src="img/icons/home.png" />
                                    <span class="mini-click-non">Acceuil</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="has-arrow" href="chambre.php" aria-expanded="false">
                                    <img id="icon_img" src="img/icons/bed-room.png" />
                                    <span class="mini-click-non">Chambres</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li class="active"><a title="chambre-toute" href="chambre-toute.php"><span class="mini-sub-pro"> | Toute</span></a></li>
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

                <!-- Mobile Menu end -->
                <div class="breadcome-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="breadcome-heading">
                                                <form role="seach" class="sr-input-func" action="chambre-edite.php">
                                                    <input type="text" name="room_to_edite" placeholder="Recherche..." class="search-int form-control" required>
                                                    <a name="search">
                                                        <i class="fa fa-search"></i>
                                                    </a>
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

            <div class="library-book-area mg-t-30" id="myTable">
                <table id="t01">
                    <tr>
                        <th>ID</th>
                        <th>Disponibilité</th>
                        <th>Type</th>
                        <th>Numero</th>
                        <th>Standard</th>
                        <th>Etoiles</th>
                        <th>Wifi</th>
                        <th>TV</th>
                        <th>Prix</th>
                        <th>Suprimer</th>
                        <th>Edite</th>
                    </tr>
                    <?php
                        $type1 = 'Speciale';
                        $type2 = 'Normale';
                        $counterConfirmation = 0; 
                        $counterBooking = 0; 
                        $query_select_rooms = $db->prepare('SELECT * FROM chambres WHERE type=:type1 OR type=:type2');
                        $query_select_rooms->execute(array(
                            'type1' => $type1,
                            'type2' => $type2
                        ));
                        foreach ($query_select_rooms as $ard){
                            $id_to_delete = $ard['ID'];
                            echo '
                            <tr>
                                <td>'.$ard['ID'].'</td>
                                <td id="td_center">
                                    ';
                                    if ($ard['disponibilite'] == 'yes'){
                                        echo '<span class="ion-ios-checkmark" style="color: rgba(29, 199, 43, 0.644);font-size: 20px;"></span>';
                                    }
                                    else {
                                        echo '<a href="../../Server Side/delete-room.php?id_availability='.$ard['ID'].'">
                                                <span class="ion-alert-circled" style="color: #f3c300;font-size: 20px;"></span>
                                              </a>';
                                        $counterConfirmation = $counterConfirmation+1;
                                    }
                                    echo '
                                </td>
                                <td>'.$ard['type'].'</td>
                                <td>'.$ard['numero'].'</td>
                                <td>'.$ard['standard'].'</td>
                                <td>
                                    ';
                                    if ($ard['stars'] == 1){
                                        echo '
                                        <div class="review-item-rating">
                                            <i class="educate-icon educate-star"></i>
                                        </div>
                                        ';
                                    }
                                    else if($ard['stars'] == 2){
                                        echo '
                                        <div class="review-item-rating">
                                            <i class="educate-icon educate-star"></i>
                                            <i class="educate-icon educate-star"></i>
                                        </div>
                                        ';
                                    }
                                    else if($ard['stars'] == 3){
                                        echo '
                                        <div class="review-item-rating">
                                            <i class="educate-icon educate-star"></i>
                                            <i class="educate-icon educate-star"></i>
                                            <i class="educate-icon educate-star"></i>
                                        </div>
                                        ';
                                    }
                                    else if($ard['stars'] == 4){
                                        echo '
                                        <div class="review-item-rating">
                                            <i class="educate-icon educate-star"></i>
                                            <i class="educate-icon educate-star"></i>
                                            <i class="educate-icon educate-star"></i>
                                            <i class="educate-icon educate-star"></i>
                                        </div>
                                        ';
                                    }
                                    else if($ard['stars'] == 5){
                                        echo '
                                        <div class="review-item-rating">
                                            <i class="educate-icon educate-star"></i>
                                            <i class="educate-icon educate-star"></i>
                                            <i class="educate-icon educate-star"></i>
                                            <i class="educate-icon educate-star"></i>
                                            <i class="educate-icon educate-star"></i>
                                        </div>
                                        ';
                                    }
                                    echo '
                                </td>
                                <td>'.$ard['wifi'].'</td>
                                <td>'.$ard['tv'].'</td>
                                <td>'.$ard['prix'].' USD</td>
                                <td id="td_center">
                                    <a href="../../Server Side/delete-room.php?id='.$ard['ID'].'">
                                    <span class="ion-android-remove-circle" style="color: #e2171783;font-size: 20px;"></span>
                                    </a>
                                </td>
                                <td id="td_center">
                                    <a href="chambre-edite.php?room_to_edite='.$ard['ID'].'"><span class="ion-ios-compose" style="color: #777777;font-size: 20px;"></span></a>
                                </td>
                            </tr>
                            ';
                            $counterBooking = $counterBooking+1;
                        }
                    ?>
            
                    <tr>
                        <th></th>
                        <th><?php echo $counterConfirmation.'/'.$counterBooking ?>  sont prise</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </table>
            </div>
            <br/><br/><br/><br/><br/><br/>
            <br/><br/><br/><br/><br/><br/>
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