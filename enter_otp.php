<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Car Deal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
    </head>
    <body>
        <?php include 'head.php'; ?>
        <br><br><br><br><br>

        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
                <form class="login100-form validate-form" action="" method="post">
                    <span class="login100-form-title p-b-37">
                        Enter OTP
                    </span>

                    <div class="wrap-input100 validate-input m-b-20" data-validate="Enter OTP">
                        <input class="input100" type="text" name="otp" placeholder="Enter OTP">
                        <span class="focus-input100"></span>
                    </div>



                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="otpent">
                            VERIFY
                        </button>
                    </div>
                    <?php
                    if (isset($_REQUEST['otpent'])) {

                        if (isset($_SESSION['entotp'])) {

                            if ($_SESSION['entotp'] == $_REQUEST['otp']) {
                                echo '<script type="text/javascript">
                                        window.location = "forgot_password.php"
                                        </script>';
                            } else {

                                echo "<script>alert('invalid credential')</script>";
                                echo '<script type="text/javascript">
                                        window.location = "forgot_pass.php"
                                        </script>';
                            }
                        }
                    }
                    ?>

                    <br><br><br>


                </form>


            </div>
        </div>

    </body>
</html>
