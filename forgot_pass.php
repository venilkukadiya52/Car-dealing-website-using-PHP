<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="fonts/icomoon/style.css">

        <link rel="stylesheet" href="css/owl.carousel.min.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Style -->
        <link rel="stylesheet" href="css/style.css">

        <title>Forgot Page</title>
    </head>
    <body>
        <?php include 'head.php'; ?>

        <div class="half">
            <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
            <div class="contents order-2 order-md-1">

                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6">
                            <div class="form-block">
                                <div class="text-center mb-5">
                                    <h3>Forgot Password</h3>
                                    <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                                </div>
                                <form action="" method="post">
                                    <div class="form-group first">
                                        <label for="username">Enter Email ID : </label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" id="username">
                                    </div>
                                    



                                    <input type="submit" name="verify" value="Verify" class="btn btn-block btn-primary">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if (isset($_REQUEST['verify'])) {
            $email = $_REQUEST['email'];
            include 'connection.php';
            $r= mysqli_query($con, "select Uid,Email from tbluser where Email='$email'");
            while($e= mysqli_fetch_row($r))
            {
                $_SESSION['uid']=$e[0];
                $_SESSION['email']=$e[1];
                
            }
            
            require './email/function.php';
            require './email/smtp/PHPMailerAutoload.php';
            $email = $_REQUEST['email'];

            $subject = "OTP";
            $o = rand(111111, 999999);
            if (send_email($email, $o, $subject)) {
                echo 'mail send';
            }

            $no = "entotp";
            //setcookie($no,$o,time()+(60*60),"/");
            //setcookie($no, $o, time()+(60*60),"/");
            //setcookie($no, $o, time() + (86400 * 30), "/");

            $_SESSION['entotp'] = $o;
            if (!$_SESSION['entotp']) {
                echo 'invalid';
            } else {

                echo '<script type="text/javascript">
                        window.location = "enter_otp.php"
                        </script>';
            }
        }

       
        include 'footer.php';
        ?>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>


    </body>
</html>