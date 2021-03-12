<footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">HOTEL ADDRESS</h6>
                        <p>
                            RDC-Ville de Goma<br/>Avenue BUNAGANA, <br/>Q. Katindo, Comm. de Goma
                            <br/>Phone: +(243) 812082665, 994326446
                            <br/>E-mail: info@lajoieplazza.com
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">NAVIGATION LINKS</h6>
                        <div class="row">
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="accomodation.php">Booking</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="../fr/index.php">Franch</a></li>
                                    <li><a href="../en/index.php">English</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Subscribe</h6>
                        <p>Subscribe to be informed in real time of our news</p>
                        <div id="mc_embed_signup">
                            <?php
                                if (isset($_POST['submit_nl'])){
                                    $query_nl = $db->prepare('INSERT INTO news_letter(mail) VALUES(:mail)');
                                    $query_nl->execute(array(
                                        'mail' => $_POST['submit_nl']
                                    ));
                                    ?>
                                    <script>
                                        alert('Abonnement reussi!');
                                    </script>
                                    <?php
                                }
                            ?>
                            <form target="_blank" action="" method="POST" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="email_nl" placeholder="Address Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                    <button type="submit" name="submit_nl" class="btn sub-btn"><span class="lnr lnr-location"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h6 class="footer_title">Gallery</h6>
                        <ul class="list_style instafeed d-flex flex-wrap">
                            <?php
                                $uQuery_select_all_room_img = $db->prepare('SELECT * FROM galerie ORDER BY ID DESC LIMIT 8');
                                $uQuery_select_all_room_img->execute();
                                foreach($uQuery_select_all_room_img as $uData_al_room_img){
                                    $main_room_img = $uData_al_room_img['img_name'];
                                    ?>
                                    <li><img src="../uploads/galerie/<?php echo $main_room_img; ?>" alt="<?php echo $main_room_img; ?>" style="width: 50px; height: 50px; object-fit: cover;"></li>
                                    <?php
                                }
                            ?>
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
                    </script> All rights reserved | Made by <a href="http://vianneyr.com" target="_blank">Soft World <i>(VR)</i></a>
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