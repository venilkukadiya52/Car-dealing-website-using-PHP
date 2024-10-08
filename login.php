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

        <title>Login Page</title>
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
                                    <h3>Login to <strong>Car Deal</strong></h3>
                                    <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                                </div>
                                <form action="login_check.php" method="post">
                                    <div class="form-group first">
                                        <label for="username">Username</label>
                                        <input type="text" name="email" class="form-control" placeholder="Enter Your Email" id="username">
                                    </div>
                                    <div class="form-group last mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter Your Password" id="password">
                                    </div>

                                    <div class="d-sm-flex mb-5 align-items-center">
                                        <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption" ><a href="registration.php" >New User?</a></span>
                                            
                                            
                                        </label>
                                        <span class="ml-auto"><a href="forgot_pass.php" class="forgot-pass">Forgot Password</a></span> 
                                    </div>


                                    <input type="submit" name="submit" value="Log In" class="btn btn-block btn-primary">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>



        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

        <?php include 'footer.php'; ?>
    </body>
</html>