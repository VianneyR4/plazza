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
                        <li class="nav-item"><a class="nav-link" href="about.php">À PROPOS</a></li>
                        <li class="nav-item"><a class="nav-link" href="accomodation.php">LOGEMENT</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">GALERIE</a></li>
                        <li class="nav-item active"><a class="nav-link" href="blog.php">Blog</a></li>
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
                <h2 class="page-cover-tittle">Articles</h2>
                <ol class="breadcrumb">
                    <li><a href="index.php">Acceuil</a></li>
                    <li class="active">Blog</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <?php
                    $query_hb = $db->prepare('SELECT * FROM blog ORDER BY ID DESC LIMIT 3');
                    $query_hb->execute();

                    foreach($query_hb as $uData_hb){
                        ?>
                        <div class="col-lg-4">
                            <div class="categories_post">
                                <img src="../uploads/blog/<?php echo $uData_hb['image']; ?>" alt="<?php echo $uData_hb['image']; ?>" id="img_from_db">
                                <div class="categories_details">
                                    <div class="categories_text">
                                        <a href="blog-single.php?id=<?php echo $uData_hb['ID']; ?>">
                                            <h5><?php echo $uData_hb['gender']; ?></h5>
                                        </a>
                                        <div class="border_line"></div>
                                        <p><?php echo $uData_hb['title']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                    <?php
                        $query_fb = $db->prepare('SELECT * FROM blog ORDER BY ID DESC');
                        $query_fb->execute();

                        foreach($query_fb as $uData_fb){
                            ?>
                            <article class="row blog_item">
                                <div class="col-md-3">
                                    <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a href="#">Technology,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list_style">
                                            <li><a href="#"><?php echo $uData_fb['bloger']; ?><i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#"><?php echo $uData_fb['date_blog']; ?><i class="lnr lnr-calendar-full"></i></a></li>
                                            <!-- <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="../uploads/blog/<?php echo $uData_fb['image'] ?>" alt="<?php echo $uData_fb['image'] ?>"  id="img_from_db">
                                        <div class="blog_details">
                                            <a href="blog-single.php?id=<?php echo $uData_fb['ID'] ?>">
                                                <h2><?php echo $uData_fb['title'] ?></h2>
                                            </a>
                                            <p>
                                            <?php
                                                $max_caracteres = 250;
                                                $texte_blog = $uData_fb['article'];
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
                                            <a href="blog-single.php?id=<?php echo $uData_fb['ID'] ?>" class="view_btn button_hover">Voir Plus</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php
                        }
                    ?>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item active"><a href="#" class="page-link">01</a></li>
                                <li class="page-item disabled"><a href="#" class="page-link">02</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                
                <div class="col-lg-4">
                    
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


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