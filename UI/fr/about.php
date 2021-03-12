<?php
    require_once('../../Server Side/function.php');
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../image/favicon.png" type="image/png">
    <title>La Joie Plazza Hotel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">


    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.php"><img src="../image/Logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Acceuil</a></li>
                        <li class="nav-item active"><a class="nav-link" href="about.php">À PROPOS</a></li>
                        <li class="nav-item"><a class="nav-link" href="accomodation.php">LOGEMENT</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">GALERIE</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Langue</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item active"><a class="nav-link" href="../fr/index.php">Francais</a></li>
                                <li class="nav-item"><a class="nav-link" href="../en/index.php">English</a></li>
                                <li class="nav-item"><a class="nav-link" href="../es/index.php">Spanish</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->

    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">À propos</h2>
                <ol class="breadcrumb">
                    <li><a href="index.php">Acceuil</a></li>
                    <li class="active">À propos de nous</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">À propos <br>Notre histoire<br>Mission & Vision</h2>
                        <p>un comportement inapproprié est souvent ri parce que «les garçons seront des garçons», les femmes sont confrontées à des normes de conduite plus élevées, en particulier sur le lieu de travail. C’est pourquoi il est crucial que, en tant que femmes, notre comportement au travail soit irréprochable.</p>
                        <a href="about.php" class="button_hover theme_btn_two">VOIR PLUS</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="../image/about_bg.jpg" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->


    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">La Joie Plazza Services</h2>
                <p>Qui sont extrêmement amoureux du système écologique.</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                        <p>Degustez le menu du jour tres bien specialisé chez nous</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Club de sport</h4>
                        <p>Nous avons aussi une salle de sport au standard moderne</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Piscine</h4>
                        <p>Detandez vous chez nous avec une puscine au standard international</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Boutique d'habillement</h4>
                        <p>Une boutique de luxe avec plus 500 pieces de vetements</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Cyber café</h4>
                        <p>En raison des progrès rapides de la technologie et du lifestyle</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Des Salles de fête</h4>
                        <p>Nous pocedons deux grande salles de fête a votre disposition</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Facilities Area  =================-->

    
    <!--================ Testimonial Area  =================-->
    <section class="testimonial_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Témoignage de nos clients</h2>
                <p>Nous avons investi notre temps pour concevoir la plateforme avec option de poster votre temoignage a propos de nous </p>
            </div>
            <div class="testimonial_slider owl-carousel">
                <?php
                    $uQuery_testimonial = $db->prepare('SELECT * FROM temoignage ORDER BY ID DESC');
                    $uQuery_testimonial->execute();

                    foreach($uQuery_testimonial as $uData_testimonial){
                        ?>
                        <div class="media testimonial_item">
                            <img class="rounded-circle" src="../image/testtimonial-1.jpg" alt="" style="width: 80px;">
                            <div class="media-body">
                                <p><?php echo $uData_testimonial['article']; ?></p>
                                <a href="#">
                                    <h4 class="sec_h4"><?php echo $uData_testimonial['name'] ?></h4>
                                </a>
                                <div class="star">
                                <?php
                                    if ($uData_testimonial['stars'] == 1){
                                        echo '
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        ';
                                    }
                                    else if($uData_testimonial['stars'] == 2){
                                        echo '
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        ';
                                    }
                                    else if($uData_testimonial['stars'] == 3){
                                        echo '
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        ';
                                    }
                                    else if($uData_testimonial['stars'] == 4){
                                        echo '
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        ';
                                    }
                                    else if($uData_testimonial['stars'] == 5){
                                        echo '
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        ';
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <!--================ Testimonial Area  =================-->

    <!--================ start footer Area  =================-->
    <?php require_once('footer.php') ?>
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>