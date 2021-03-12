<?php
    require_once('../../Server Side/function.php');
    session_start();
    
    $uQuery_verif = $db->prepare('SELECT * FROM chambres WHERE ID=:room_id');
    $uQuery_verif->execute(array(
        'room_id' => $_GET['room_id']
    ));
    foreach ($uQuery_verif as $verif){}
    if (!isset($verif)){
        header('location:accomodation.php');
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>La Joie Plazza Hotel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">


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
                <a class="navbar-brand logo_h" href="index.php"><img src="image/Logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                        <li class="nav-item active"><a class="nav-link" href="accomodation.php">Accomodation</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="../fr/index.php">Francais</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.php">English</a></li>
                                <li class="nav-item active"><a class="nav-link" href="../es/index.php">Spanish</a></li>
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
                <h2 class="page-cover-tittle">Accomodation</h2>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="accomodation.php">Accomodation</a></li>
                    <li class="active">Accomodation-Single</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <?php
        $uQuery_single_room = $db->prepare('SELECT * FROM chambres WHERE ID=:room_id');
        $uQuery_single_room->execute(array(
            'room_id' => $_GET['room_id']
        ));
        foreach ($uQuery_single_room as $uData_room){
            ?>
            <!--================ Accomodation Area  =================-->
            <section class="accomodation_area section_gap">
                <div class="container">
                    <div class="section_title text-center">
                        <h2 class="title_color"><?php echo $uData_room['type']; ?> Accomodation</h2>
                        <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,</p>
                    </div>
                    <div class="row mb_30">
                        <div class="col-md-7 mb-7">
                            <div class="media d-block room mb-0">
                                <figure>
                                    <?php
                                        $uQuery_select_room_img = $db->prepare('SELECT * FROM chambre_img WHERE chambre_num=:c_num ORDER BY ID DESC LIMIT 1');
                                        $uQuery_select_room_img->execute(array(
                                            'c_num' => $uData_room['numero']
                                        ));
                                        foreach($uQuery_select_room_img as $uData_room_img){
                                            $main_room_img = $uData_room_img['img_name'];
                                        }
                                    ?>
                                    <img src="../uploads/rooms/<?php echo $main_room_img; ?>" alt="Generic placeholder image" class="img-fluid">
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
                                        <!-- <li><span class="ion-close-circled" style="color: rgba(231, 12, 12, 0.432);"></span> This Room is Not Available</li> -->
                                        <li><span class="ion-ios-checkmark" style="color: rgba(29, 199, 43, 0.644);"></span> This Room is Available</li>
                                        <li><span class="ion-wifi"></span> <?php echo $uData_room['wifi']; ?></li>
                                        <li><span class="ion-monitor"></span> <?php echo $uData_room['tv']; ?></li><br/>
                                        <li><span class="ion-ios-people"></span> Yes</li>
                                        <li><span class="ion-ios-crop-strong"></span> $<?php echo $uData_room['prix']; ?> <sup>/night</sup></li>
                                    </ul>
                                    <p><?php echo $uData_room['description']; ?> </p>


                                    <!--============= start Room's Pics  ==============-->
                                    <section class="gallery_area">
                                        <div class="row imageGallery1" id="gallery">
                                            <?php
                                                $uQuery_select_all_room_img = $db->prepare('SELECT * FROM chambre_img WHERE chambre_num=:c_num ORDER BY ID DESC');
                                                $uQuery_select_all_room_img->execute(array(
                                                    'c_num' => $uData_room['numero']
                                                ));
                                                foreach($uQuery_select_all_room_img as $uData_al_room_img){
                                                    $main_room_img = $uData_al_room_img['img_name'];
                                                    ?>
                                                    <div class="col-md-4 gallery_item">
                                                        <div class="gallery_img">
                                                            <img src="../uploads/rooms/<?php echo $main_room_img; ?>" alt="">
                                                            <div class="hover">
                                                                <a class="light" href="../uploads/rooms/<?php echo $main_room_img; ?>"><i class="fa fa-expand"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                    </section>
                                    <!--================ Room's Pics  =================-->

                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 mb-5">
                            <!--================Booking Tabel Area =================-->
                            <section class="hotel_booking_area">
                                <div class="container">
                                    <div class="row hotel_booking_table">
                                        <div class="col-md-12" style="margin-left: 20px">
                                            <h2>Book Your Room</h2>
                                        </div>
                                        <div class="col-md-12" id="to_left_20">
                                            <div class="boking_table">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="book_tabel_item">
                                                            <div class="form-group">
                                                                <div class='input-group date' id='datetimepicker11'>
                                                                    <input type='text' class="form-control" placeholder="Arrival Date" />
                                                                    <span class="input-group-addon">
                                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class='input-group date' id='datetimepicker1'>
                                                                    <input type='text' class="form-control" placeholder="Departure Date" />
                                                                    <span class="input-group-addon">
                                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="book_tabel_item">
                                                            <div class="input-group">
                                                                <select class="wide">
                                                                            <option data-display="I am">I am a/an</option>
                                                                            <option value="1">Adult</option>
                                                                            <option value="2">Old</option>
                                                                            <option value="3">Younger</option>
                                                                    </select>
                                                            </div>
                                                            <div class="input-group">
                                                                <select class="wide">
                                                                            <option data-display="With">With a/an</option>
                                                                            <option value="1">No one</option>
                                                                            <option value="2">Child</option>
                                                                            <option value="3">Baby</option>
                                                                            <option value="4">Wife</option>
                                                                            <option value="5">Brother</option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="book_tabel_item">
                                                            <div class="input-group">
                                                                <select class="wide">
                                                                        <option data-display="Room <?php echo $uData_room['numero']; ?>" value="<?php echo $uData_room['numero']; ?>">Room <?php echo $uData_room['numero']; ?></option>
                                                                </select>
                                                            </div>
                                                            <a class="book_now_btn button_hover" href="#">Book Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--================Booking Tabel Area  =================-->
                        </div>
                    </div>
                </div>
            </section>
            <!--================ Accomodation Area  =================-->
            <?php
        }
    ?>

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">About Agency</h6>
                        <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Navigation Links</h6>
                        <div class="row">
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Feature</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Newsletter</h6>
                        <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>
                        <div id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                    <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h6 class="footer_title">InstaFeed</h6>
                        <ul class="list_style instafeed d-flex flex-wrap">
                            <li><img src="image/instagram/Image-01.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-02.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-03.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-04.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-05.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-06.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-07.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-08.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border_line"></div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0">
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Made by <a href="http://vianneyr.com" target="_blank">Solft World <i>(VR)</i></a>
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
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
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>