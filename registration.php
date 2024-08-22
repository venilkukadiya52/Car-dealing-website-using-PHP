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
        <link rel="stylesheet" href="aassets/css/style.css">

        <title>Registration Page</title>
    </head>
    <body>
        <?php include 'head.php'; ?>
        <br><br><br><br><br><br><br>
        <div class="half">
            <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
            <div class="contents order-2 order-md-1">

                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6">
                            <div class="form-block">
                                <div class="text-center mb-5">
                                    <h3>Register to <strong>Car Deal</strong></h3>
                                    <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                                </div>
                                <form action="" method="post">
                                    <div class="form-group first">
                                        <label for="fname">First name</label>
                                        <input type="text" name="fname"  class="form-control" required="" placeholder="Enter Your First Name" id="fname">
                                    </div>
                                    <div class="form-group first">
                                        <label for="mname">Middle name</label>
                                        <input type="text" name="mname"   class="form-control" required="" placeholder="Enter Your Middle Name" id="mname">
                                    </div>
                                    <div class="form-group first">
                                        <label for="lname">Last name</label>
                                        <input type="text" name="lname" maxlength=""  class="form-control" required="" placeholder="Enter Your Last Name" id="lname">
                                    </div>
                                    <div class="form-group first">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" maxlength="50"  class="form-control" required="" placeholder="Enter Your Address" id="address">
                                    </div>
                                    <div class="form-group first">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" required="" placeholder="Enter Your Address" id="address">
                                    </div>
                                    <div class="form-group last mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" maxlength="10" minlength="10" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" required="" placeholder="Enter Your Password" id="password">
                                    </div>
                                    <div class="form-group first">
                                        <label for="contactno">Contact No</label>
                                        <input type="tel" name="contactno" minlength="10" class="form-control" required="" placeholder="Enter Your Contact No" id="contactno">
                                    </div>
                                    <input type="submit" name="register" value="Register" class="btn btn-block btn-primary">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <?php
        include 'connection.php';

        if (isset($_REQUEST['register'])) {

            $fname = $_REQUEST['fname'];
            $mname = $_REQUEST['mname'];
            $lname = $_REQUEST['lname'];
            $address = $_REQUEST['address'];
            $email = $_REQUEST['email'];
            $pass = $_REQUEST['password'];

            $password = password_hash($pass, PASSWORD_DEFAULT);

            $contactno = $_REQUEST['contactno'];
            $check = mysqli_num_rows(mysqli_query($con, "select * from tbluser where Email='$email'"));
            if ($check > 0) {
                echo "<script>alert('EmailId already exist')</script>";
            } else {
                $_SESSION['fname'] = $fname;
                $_SESSION['mname'] = $mname;
                $_SESSION['lname'] = $lname;
                $_SESSION['address'] = $address;
                $_SESSION['email'] = $email;
                $_SESSION['contactno']=$contactno;
                $_SESSION['password'] = $password;
                
                //$q = mysqli_query($con, "insert into tbluser (First_name,Middle_name,Last_name,Address,Email,Password,Contactno) values ('$fname','$mname','$lname','$address','$email','$password','$contactno')");

                $id = mysqli_insert_id($con);
                $msg = "We've just send verification link to <strong>$email</strong> id<br></br>Check your inbox and click on the link to get started.if you can't find the email plz request for resend from here.";

                $mailHtml = "Please confirm your account registration by clicking the button or link below: <a href='http://localhost/Car_Deal/login_check.php?id=$id'>http://localhost/Car_Deal/login_check.php?id=$id</a>";
                $email = $_REQUEST['email'];
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
                        window.location = "enterotp.php"
                        </script>';
                }
            }
        }
        ?>


        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

        <?php include 'footer.php'; ?>
    </body>
</html>