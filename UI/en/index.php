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
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="accomodation.php">Accomodation</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="../fr/index.php">Francais</a></li>
                                <li class="nav-item active"><a class="nav-link" href="index.php">English</a></li>
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
                    <h6>Away from monotonous life</h6>
                    <h2>Relax Your Mind</h2>
                    <p>If you are looking at empty rooms on the web, you may be very confused at the<br> difference in price. here You may see some for standard price each.</p>
                    <a href="accomodation.php" class="btn theme_btn button_hover">Get Started</a>
                </div>
            </div>
        </div>
        <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col-md-3">
                        <h2>Book<br> Your Room</h2>
                    </div>
                    <div class="col-md-9">
                        <div class="boking_table">
                            <form methode="POST" action=""> 
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker11'>
                                                <input type='text' name="bookingArrive" class="form-control" placeholder="Arrival Date" required />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' name="bookingDepart" class="form-control" placeholder="Departure Date" required />
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
                                                <input type='number' name="bookingNumber" class="form-control" placeholder="Phone Number" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type='email' name="bookingMail" class="form-control" placeholder="E-mail Address " required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="wide" name="bookingRoom" required>
                                                    <option data-display="Room's number">Room's number || Prix/n || Type</option>
                                                    <?php
                                                        $uQuery_numRoom = $db->prepare('SELECT * FROM chambres');
                                                        $uQuery_numRoom->execute();
                                                        foreach($uQuery_numRoom as $uData_numRoom){
                                                            echo '<option value="'.$uData_numRoom['numero'].'">Room '.$uData_numRoom['numero'].' || '.$uData_numRoom['prix'].'$<sub>/n<sub/> || '.$uData_numRoom['type'].'</option>';
                                                        }
                                                    ?>
                                                </select>
                                        </div>
                                        <button type="submit" name="SubmitBooking" class="book_now_btn button_hover" id="modalShow">Book Now</button>
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

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div id="container_acomodation">
            <div class="section_title text-center">
                <h2 class="title_color">Hotel Accomodation</h2>
                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
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
                                                Room <?php echo $uData_room['numero']; ?>
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
                                            <li data-toggle="popover" data-placement="top" title="Disponibility of the wifi in the room (yes / no)"><span class="ion-wifi"></span> <?php echo $uData_room['wifi']; ?></li>
                                            <li data-toggle="popover" data-placement="top" title="Disponibility of the Tele-Vision + Canal+ in the room (yes / no)"><span class="ion-monitor"></span> <?php echo $uData_room['tv']; ?></li>
                                            <li data-toggle="popover" data-placement="top" title="Room price/night"><span class="ion-ios-crop"></span> $<?php echo $uData_room['prix']; ?> <sup>/night</sup></li>
                                        </ul>
                                        <p>
                                            <?php 
                                            // echo $uData_room['description']; 
                                            ?>
                                            A very warm welcome is reserved for you for a memorable and unforgettable stay.</p>
                                        <p>
                                            <a href="accomodation-single.php?room_id=<?php echo $uData_room['ID']; ?>" class="btn theme_btn button_hover btn-sm">Book Now</a>
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
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                        <p>Taste the very special menu of the day with us.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                        <p>We also have a gym room with modern standard.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                        <p>Relax with us with an international standard pool.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                        <p>A luxury boutique with over 500 pieces of clothing.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                        <p>Due to rapid advances in technology and lifestyle.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                        <p>We have two large party rooms at your disposal.</p>
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
                        <h2 class="title title_color">About Us <br>Our History<br>Mission & Vision</h2>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate
                            behavior is often laughed.</p>
                        <a href="about.php" class="button_hover theme_btn_two">See more</a>
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
                <h2 class="title_color">Testimonial from our Clients</h2>
                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
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
                <h2 class="title_color">latest posts from blog</h2>
                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
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
                                        <a class="button_hover tag_btn">
                                            ID: <?php echo $uData_blog['ID'];?>
                                        </a>
                                        <a class="button_hover tag_btn"><?php echo $uData_blog['gender']; ?></a>
                                    </div>
                                    <a href="blog-single.php?id=<?php echo $uData_blog['ID']; ?>">
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