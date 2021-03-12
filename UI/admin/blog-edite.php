<?php
    require_once('../../Server Side/function.php');
    session_start();
    include_once('../../Server Side/admin_edite_blog.php');   

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
    <title>Ajouté | Admin La Joie Plazza</title>
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
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
                        <li class="active">
                            <a class="has-arrow" href="blog.php" aria-expanded="false"><img id="icon_img" src="img/icons/blog.png" /> <span class="mini-click-non">Blog</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="blog-tout" href="blog-tout.php"><span class="mini-sub-pro"> | Toute</span></a></li>
                                <li><a title="blog-ajoute" href="blog-ajoute.php"><span class="mini-sub-pro"> | Ajouté</span></a></li>
                                <li class="active"><a title="blog-edite" href="blog-edite.php"><span class="mini-sub-pro"> | Edité</span></a></li>
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
                                                        <img src="img/product/pro4.jpg" alt="" />
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
                                        <li><a data-toggle="collapse" data-target="#demoevent">Chambres <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="chambre-toute.php">Toute</a>
                                                </li>
                                                <li><a href="chambre-ajoute.php">Ajouté</a>
                                                </li>
                                                <li><a href="chambre-edite.php">Edité</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro">Galerie <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="galerie-toute.php">Toute</a>
                                                </li>
                                                <li><a href="galerie-ajoute.php">Ajouté</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou">Blog <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="blog-tout.php">Toute</a>
                                                </li>
                                                <li><a href="blog-ajoute.php">Ajouté</a>
                                                </li>
                                                <li><a href="blog-edite.php">Edité</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra">Temoignage <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
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
                                                <input type="text" name="blog_to_edite" value="<?php if(isset($_GET['blog_to_edite'])){echo $_GET['blog_to_edite'];} ?>" placeholder="Recherche..." class="search-int form-control">
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
                       
        <!-- message start-->      
        <?php 
            if (!empty($uploaded)){
                echo '
                <div class="server-message bg-success">
                    <span>MIS A JOUR REUSSI: </span> blog ID: <small>'.$_GET['blog_to_edite'].'</small> + ';
                    $i=0;
                    foreach ($uploaded as $failed_content){
                        $i=$i+1;
                }
                echo '<small>'.$i.'</small> Fichiers images</div> ';
            } else if (isset($_POST['submit_update_blog'])){
                if ($update_message == 'ok'){
                    echo '
                    <div class="server-message bg-success">
                        <span>MIS A JOUR REUSSI: </span> blog ID: <small>'.$_GET['blog_to_edite'].'</small>       
                    </div> ';
                }
            }
			if (!empty($failed)){
                echo '
                <div class="server-message bg-danger">
                    <span>ECHEC DE FICHIERS: </span><br/>
                    <ul>
                ';
                $y=0;
                foreach ($failed as $failed_content){
                    $y=$y+1;
                    echo '<li>('.$y.') '.$failed_content.'</li>';
                }
                echo '  
                    </ul>
                </div> ';
			}
        ?>                      
        <!-- message End-->


        <?php
            if (isset($_GET['blog_to_edite'])) {
                $myID = $_GET['blog_to_edite'];
            } else {
                echo '
                <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                <center><h2><i class="fa fa-search"></i> Recherchez un Blog a editer par ID!</h2></center>
                <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                ';
            }

            if (isset($myID)){
                $query_bte = $db->prepare('SELECT * FROM blog WHERE ID=:ID');
                $query_bte->execute(array(
                    'ID' => $myID
                ));
                foreach($query_bte as $bte) {
                    
                    ?> <!-- Single pro tab review Start-->
                    <div class="single-pro-review-area mt-t-30 mg-b-15">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="product-payment-inner-st">
                                        <ul id="myTabedu1" class="tab-review-design">
                                            <li class="active"><a href="#description">Article ID: <?php echo $bte['ID']; ?></a></li>
                                        </ul>
                                        <div id="myTabContent" class="tab-content custom-product-edit">
                                            <div class="product-tab-list tab-pane fade active in" id="description">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="review-content-section">
                                                            <div id="dropzone1" class="pro-ad">
                                                                
                                                                <div class="box-des-images">
                                                                    <div class="row">
                                                                        <div class="admin-img-box col-md-12 col-sm-12" style="height: 350px;">
                                                                            <img src="../uploads/blog/<?php echo $bte['image']; ?>" style="border-radius: 2px;height: 350px;" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <form action="" enctype="multipart/form-data" method="POST" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="form-group">
                                                                                <input name="bloger" type="text" value="<?php echo $bte['bloger']; ?>" class="form-control" placeholder="Nom du blogeur." required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <select name="gender" class="form-control">
                                                                                    <?php
                                                                                        echo '<option value="'.$bte['gender'].'">'.$bte['gender'].'</option>';
                                                                                    ?>
                                                                                    <option value="Nouriture">Nouriture</option>
                                                                                    <option value="Technologie">Technologie</option>
                                                                                    <option value="Lifestyle">Lifestyle</option>
                                                                                </select>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <input name="title" type="text" value="<?php echo $bte['title'] ?>" class="form-control" placeholder="Titre de l'article." required>
                                                                            </div>
                                                                            <div class="form-group alert-up-pd">
                                                                                <input name='blog_files[]' type="file" value="<?php echo $bte['image'] ?>" class="form-control" id="multi_media" style="padding: 81px 15px !important;border: 2px dashed #ccc;" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="form-group res-mg-t-15" id="article">
                                                                                <textarea name="article" placeholder="Article" id="text_area" required><?php echo $bte['article']; ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <br/>
                                                                            <div class="payment-adress">
                                                                                <button type="submit" name="submit_update_blog" class="btn btn-primary">
                                                                                    Actualisé 
                                                                                    <span class="ion-ios-navigate"></span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                if (empty($bte)){
                    echo '
                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                    <center><h2><i class="fa fa-search"></i> Resultat de la recherche blog ID: '.$_GET['blog_to_edite'].' n\'est pas trouver!</h2></center>
                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                    ';
                }
            }
        ?>


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
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="js/datepicker/jquery-ui.min.js"></script>
    <script src="js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="js/form-validation/jquery.form.min.js"></script>
    <script src="js/form-validation/jquery.validate.min.js"></script>
    <script src="js/form-validation/form-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
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