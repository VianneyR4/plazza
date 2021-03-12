<?php
    require_once('../../Server Side/function.php');
    session_start();
    require_once('../../Server Side/booking_system.php');
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
                        <li class="nav-item active"><a class="nav-link" href="index.php">Acceuil</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">À PROPOS</a></li>
                        <li class="nav-item"><a class="nav-link" href="accomodation.php">LOGEMENT</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">GALERIE</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Langue</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item active"><a class="nav-link" href="../fr/index.php">Francais</a></li>
                                <li class="nav-item"><a class="nav-link" href="../en/index.php">English</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" href="../es/index.php">Spanish</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h6>Loin de la vie monotone</h6>
                    <!-- <h2>Détends ton esprit</h2> -->
                    <h2>Bienvenue!</h2>
                    <p>Si vous regardez des pièces vides sur le Web, vous pouvez être très confus au</br> différence de prix. ici Vous pouvez en voir pour le prix standard chacun.</p>
                    <a href="accomodation.php" class="btn theme_btn button_hover">Démarrer</a>
                </div>
            </div>
        </div>
        <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col-md-3">
                        <h2>Réserve<br> Ta Chambre</h2>
                    </div>
                    <div class="col-md-9">
                        <div class="boking_table">
                            <form methode="POST" action=""> 
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker11'>
                                                <input type='text' name="bookingArrive" class="form-control" placeholder="Date d'arrivée" required />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' name="bookingDepart" class="form-control" placeholder="Date de départ" required />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type='number' name="bookingNumber" class="form-control" placeholder="Numero de telephone" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type='email' name="bookingMail" class="form-control" placeholder="Address mail" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="wide" name="bookingRoom" required>
                                                    <option data-display="Numero Chambre">Numero Chambre || Prix/n || Type</option>
                                                    <?php
                                                        $uQuery_numRoom = $db->prepare('SELECT * FROM chambres');
                                                        $uQuery_numRoom->execute();
                                                        foreach($uQuery_numRoom as $uData_numRoom){
                                                            echo '<option value="'.$uData_numRoom['numero'].'">Chambre '.$uData_numRoom['numero'].' || '.$uData_numRoom['prix'].'$<sub>/n<sub/> || '.$uData_numRoom['type'].'</option>';
                                                        }
                                                    ?>
                                                </select>
                                        </div>
                                        <button type="submit" name="SubmitBooking" class="book_now_btn button_hover" id="modalShow">Réserve Maintenant</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Banner Area =================-->
    
    <!-- ================ modall ================ -->
    <?php 
        if (isset($bookingMsg)){
        ?>
    <div id="modal">
        <div class="container">
            <div class="myModal">
                <div class="myModal-head">
                    <button class="hidden-btn"><img src="../image/cancel.png" id="hideClose" /></butto>
                </div>
                <?php
                    echo $bookingMsg;
                ?>
                <div class="myModal-footer">
                    <button id="hide_btn">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <style>
        html{min-height:100%;/* make sure it is at least as tall as the viewport */position:relative;}
        body{height:100%; /* force the BODY element to match the height of the HTML element */}
        #modal{position:fixed;top:0;bottom:0;left:0;right:0;overflow:hidden;z-index:99;background-color: #0a0e0088;display: block;}
        #modal .myModal{width: 40%;margin: 10% auto;background-color: #fff;border-radius: 3px;}
        #modal .myModal .myModal-head{text-align: right;padding: 10px;}
        #modal .myModal .myModal-head button{background: none;border: none;outline: none;width: 35px;cursor: pointer;}
        #modal .myModal .myModal-head button img{width: 100%;}
        #modal .myModal .myModal-body{text-align: center;padding: 15px;}
        #modal .myModal .myModal-footer{text-align: right;padding: 15px 10px 15px;}
        #modal .myModal .myModal-footer button{background-color: #f3c300;color: #fff;border: none;padding: 5px 10px;cursor: pointer;}    
        @media (max-width: 991px){#modal .myModal{width: 60%;margin: 10% auto;background-color: #fff;border-radius: 3px;}}      
        @media (max-width: 791px){#modal .myModal{width: 75%;margin: 10% auto;background-color: #fff;border-radius: 3px;}}    
        @media (max-width: 451px){#modal .myModal{width: 95%;margin: 10% auto;background-color: #fff;border-radius: 3px;}}
    </style>
    <script>
        const showModal = document.getElementById('modalShow');
        const closeModal = document.getElementById('hideClose');
        const hideModal = document.getElementById('hide_btn');
        const myModal = document.getElementById('modal');
        showModal.addEventListener('click', () => {
            myModal.style.display="block";
        });
        closeModal.addEventListener('click', () => {
            myModal.style.display="none";
        });
        hideModal.addEventListener('click', () => {
            myModal.style.display="none";
        });
    </script>

        <?php
        }
    ?>
    
    <!-- ================ modall ================ -->

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div id="container_acomodation">
            <div class="section_title text-center">
                <h2 class="title_color">Hébergement à l'hôtel</h2>
                <p>Nous vivons tous à une époque qui appartient aux jeunes de cœur. La vie qui devient extrêmement rapide</p>
            </div>
            <div class="row mb_30">
                <?php
                    $var_shek = 'yes';

                    $uQuery_select_rooms = $db->prepare('SELECT * FROM chambres WHERE disponibilite=:disponibilite ORDER BY ID DESC LIMIT 3');
                    $uQuery_select_rooms->execute(array(
                        'disponibilite' => $var_shek
                    ));
                    foreach ($uQuery_select_rooms as $uData_room){

                        $uQuery_select_room_img = $db->prepare('SELECT * FROM chambre_img WHERE chambre_num=:c_num ORDER BY ID DESC LIMIT 1');
                        $uQuery_select_room_img->execute(array(
                            'c_num' => $uData_room['numero']
                        ));
                        foreach($uQuery_select_room_img as $uData_img){

                            ?>
                            <div class="col-md-4 mb-4">
                                <div class="media d-block room mb-0">
                                    <figure>
                                        <img src="../uploads/rooms/<?php echo $uData_img['img_name']; ?>" alt="Generic placeholder image" class="img-fluid" id="img_from_db">
                                        <div class="overlap-text">
                                            <span>
                                                Chambre <?php echo $uData_room['numero']; ?>
                                                <?php
                                                    if ($uData_room['stars'] == 1){
                                                        echo '<span class="ion-ios-star"></span>';
                                                    }
                                                    else if($uData_room['stars'] == 2){
                                                        echo '<span class="ion-ios-star"> </span><span class="ion-ios-star"></span>';
                                                    }
                                                    else if($uData_room['stars'] == 3){
                                                        echo '<span class="ion-ios-star"> </span><span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>';
                                                    }
                                                    else if($uData_room['stars'] == 4){
                                                        echo '<span class="ion-ios-star"></span> <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span> <span class="ion-ios-star"></span>';
                                                    }
                                                    else if($uData_room['stars'] == 5){
                                                        echo '<span class="ion-ios-star"></span> <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span> <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>';
                                                    }
                                                ?>
                                            </span>
                                        </div>
                                    </figure>
                                    <div class="media-body">
                                        <h3 class="sec_h4">
                                            <a href="accomodation-single.php?room_id=<?php echo $uData_room['ID']; ?>"><?php echo $uData_room['standard']; ?></a>
                                        </h3>
                                        <ul class="room-specs">
                                            <li data-toggle="popover" data-placement="top" title="La disponibilite du wifi dans la chambre (yes / no)"><span class="ion-wifi"></span> <?php echo $uData_room['wifi']; ?></li>
                                            <li data-toggle="popover" data-placement="top" title="La disponibilite de la Tele-Vision + Canal+ dans la chambre (yes / no)"><span class="ion-monitor"></span> <?php echo $uData_room['tv']; ?></li>
                                            <li data-toggle="popover" data-placement="top" title="Prix de la chambre par nuit"><span class="ion-ios-crop"></span> $<?php echo $uData_room['prix']; ?> <sup>/nuit</sup></li>
                                        </ul>
                                        <p><?php echo $uData_room['description']; ?> </p>
                                        <p>
                                            <a href="accomodation-single.php?room_id=<?php echo $uData_room['ID']; ?>" class="btn theme_btn button_hover btn-sm">Réserver</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    if (!isset($uData_room)){
                        echo '
                            <div class="col-md-12 mb-12">
                            <br/><br/><br/><br/><br/><br/>
                            <center><h2>Nothing yet!</h2></center>
                            <br/><br/><br/><br/><br/><br/>
                            </div>
                        ';
                    }
                ?>

            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->

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

    <!--================ Testimonial Area  =================-->
    <section class="testimonial_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Témoignage de nos clients</h2>
                <p>Nous avons investi notre temps pour recevoir certains témoignage de chez nos clients</p>
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

    <!--================ Latest Blog Area  =================-->
    <section class="latest_blog_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Derniers articles du blog</h2>
                <p>Nous avons investi notre temps pour concevoir la plateforme avec un system de Blog </p>
            </div>
            <div class="row mb_30">
                <?php
                    $query_select_blog = $db->prepare('SELECT * FROM blog ORDER BY ID DESC LIMIT 3');
                    $query_select_blog->execute();
                    foreach($query_select_blog as $uData_blog){
                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-recent-blog-post">
                                <div class="thumb">
                                    <img class="img-fluid" src="../uploads/blog/<?php echo $uData_blog['image']; ?>" alt="post" id="img_from_db">
                                </div>
                                <div class="details">
                                    <div class="tags">
                                        <a href="#" class="button_hover tag_btn">
                                            ID: <?php echo $uData_blog['ID'];?>
                                        </a>
                                        <a href="#" class="button_hover tag_btn"><?php echo $uData_blog['gender']; ?></a>
                                    </div>
                                    <a href="blog-single.php?blog_id=<?php echo $uData_blog['ID']; ?>">
                                        <h4 class="sec_h4"><?php echo $uData_blog['title']; ?></h4>
                                    </a>
                                    <p>
                                        <?php
                                            $max_caracteres = 105;
                                            $texte_blog = $uData_blog['article'];
                                            if (strlen($texte_blog)>$max_caracteres)
                                            {
                                                $texte_blog = substr($texte_blog, 0, $max_caracteres);
                                                $position_espace = strrpos($texte_blog, " ");
                                                $texte_blog = substr($texte_blog, 0, $position_espace);
                                                $texte_blog = $texte_blog."...";
                                            }
                                            echo $texte_blog;
                                        ?>
                                    </p>
                                    <h6 class="date title_color"><?php echo $uData_blog['date_blog'];?></h6>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <!--================ Recent Area  =================-->

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
    <script src="js/mail-script.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>