<?php
  require_once('../../Server Side/function.php');
  session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Admin La Joie Plazza</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="icon" href="../image/favicon.png" type="image/png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
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
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body style="background-color: #0b1803">
    <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="">
        <div class="error-pagewrap">

            <div class="error-page-int" id="left_content">
                <div class="text-center m-b-md custom-login">
                    <h3>Espace admin</h3>
                    <p>Veuillez vous connecter</p>
                </div>
                <div class="content-error">
                    <div class="hpanel">
                        <div class="panel-body">
                          <?php
                            include_once('../../Server Side/admin_pass.php');
                          ?>
                            <form action="" id="loginForm" method="POST">
                                <div class="form-group">
                                    <label class="control-label" for="username">E-mail</label>
                                    <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" name="admin_mail" id="username" class="form-control">
                                    <span class="help-block small">
                                      <?php
                                        if (isset($erreur_message_mail)) {
                                          echo '<span style="color: red;">'.$erreur_message_mail.'</span>';
                                        }
                                        else {
                                          echo 'Votre unique addresse E-mail';
                                        }
                                      ?>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="password">Mot de passe</label>
                                    <input type="password" title="Please enter your password" placeholder="******" required="" name="admin_password" id="password" class="form-control">
                                    <span class="help-block small">
                                      <?php
                                        if (isset($erreur_message_password)) {
                                          echo '<span style="color: red;">'.$erreur_message_password.'</span>';
                                        }
                                        else {
                                          echo 'Votre mot de passe';
                                        }
                                      ?>
                                    </span>
                                </div>
                                <div class="checkbox login-checkbox">
                                    <label>
                                      <input type="checkbox" class="i-checks"> Se souvenir de moi </label>
                                    <p class="help-block small">(ceci est un compte privé)</p>
                                </div>
                                <button type="submit" name="connexion" class="btn btn-success btn-block loginbtn" id="height_btn">Connexion</button>
                                <a id="height_btn_default" style="padding: 10px;">Mot de passe oublier</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center login-footer">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Made by <a href="http://vianneyr.com" target="_blank">Solft World <i>(VR)</i></a>
                    </p>
                </div>
            </div>



            <div class="error-page-int" id="right_content">
                <div class="text-center m-b-md custom-login">
                    <h3>Espace admin</h3>
                    <p>Signaler le cas au developpeur</p>
                </div>
                <div class="content-error">
                    <div class="hpanel">
                        <div class="panel-body">
                            <form action="#" id="loginForm">
                                <div class="form-group">
                                    <label class="control-label" for="username">E-mail</label>
                                    <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">

                                    <span class="help-block small">Envoyer votre addresse E-mail</span>
                                </div>
                                <button class="btn btn-success btn-block loginbtn" id="height_btn">Envoyer</button>
                                <a id="height_btn_default_right" style="padding: 10px;">Retour</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center login-footer">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Made by <a href="http://vianneyr.com" target="_blank">Solft World <i>(VR)</i></a>
                    </p>
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
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/admin.js"></script>
</body>

</html>