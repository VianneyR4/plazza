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
                        <li class="nav-item"><a class="nav-link" href="index.php">Acceuil</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">À PROPOS</a></li>
                        <li class="nav-item active"><a class="nav-link" href="accomodation.php">LOGEMENT</a></li>
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
                <h2 class="page-cover-tittle">Logement</h2>
                <ol class="breadcrumb">
                    <li><a href="index.php">Acceuil</a></li>
                    <li class="active">Logement</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Hébergement spéciale</h2>
                <p>Nous vivons tous à une époque qui appartient aux jeunes de cœur. La vie qui devient extrêmement rapide</p>
            </div>
            <div class="row mb_30">
            <?php
                $var_shek = 'yes';
                $var_shek_type = 'Speciale';

                $uQuery_select_rooms = $db->prepare('SELECT * FROM chambres WHERE disponibilite=:disponibilite AND type=:type ORDER BY ID DESC');
                $uQuery_select_rooms->execute(array(
                    'disponibilite' => $var_shek,
                    'type' => $var_shek_type
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
                        <center><h2>Rien encore!</h2></center>
                        <br/><br/><br/><br/><br/><br/>
                        </div>
                    ';
                }
            ?>
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->
    <!--================Booking Tabel Area =================-->
    <section class="hotel_booking_area">
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
    </section>
    <!--================Booking Tabel Area  =================-->

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
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Hébergement Normale</h2>
                <p>Nous vivons tous à une époque qui appartient aux jeunes de cœur. La vie qui devient extrêmement rapide</p>
            </div>
            <div class="row accomodation_two">
            <?php
                // $var_shek = 'yes';
                $var_shek_type = 'Normale';

                $uQuery_select_rooms = $db->prepare('SELECT * FROM chambres WHERE disponibilite=:disponibilite AND type=:type ORDER BY ID DESC');
                $uQuery_select_rooms->execute(array(
                    'disponibilite' => $var_shek,
                    'type' => $var_shek_type
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
                        <center><h2>Rien encore!</h2></center>
                        <br/><br/><br/><br/><br/><br/>
                        </div>
                    ';
                }
            ?>
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->

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