<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Car Deal - Index</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- =======================================================
        * Template Name: BizLand - v1.2.1
        * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>

    <body>
        <!-- ======= Top Bar ======= -->
        <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
            <div class="container d-flex">
                <div class="contact-info mr-auto">
                    <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">cardeal@deal.com</a>
                    <i class="icofont-phone"></i> +91 87803 18357
                </div>
                <div class="social-links">
                    <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                    <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                    <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                    <a href="#" class="skype"><i class="icofont-skype"></i></a>
                    <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
                </div>
            </div>
        </div>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

                <h1 class="logo mr-auto"><a href="index.html">CarDeal<span>.</span></a></h1>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                      
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="inner.php">View Car</a></li>
                        <?php
                        if (isset($_SESSION['id'])) {
                        echo "<li class=drop-down><a>Welcome $_SESSION[fname] </a>";
                        echo "<ul>";
                        
                        echo " <li><a href=profile.php>Profile</a></li>";
                        echo " <li><a href=change_password.php>Reset Password</a></li>";
                        echo "<li><a href=logout.php>Logout</a></li>";
                        //echo "<li><a href=favoritecar.php>Favorite</a></li>";

                        echo "</ul>";
                        echo "</li>";
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['id'])) {
                            
                        } else {
                            echo "<li><a href=login.php>Sign In/Sign up</a></li>";
                        }
                        ?>
                    </ul>
                </nav><!-- .nav-menu -->

            </div>
        </header><!-- End Header -->

        <?php
// put your code here
        ?>
    </body>
</html>
