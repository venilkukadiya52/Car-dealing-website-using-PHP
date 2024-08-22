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
                                <form action="" method="post">
                                    <div class="form-group first">
                                        <label for="username">Old Password</label>
                                        <input type="password" name="oldpassword" class="form-control" placeholder="Enter old password" id="username">
                                    </div>
                                    <div class="form-group first">
                                        <label for="username">New Password</label>
                                        <input type="password" name="newpassword" class="form-control" placeholder="Enter new password" id="username">
                                    </div>
                                    <div class="form-group last mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter new Password" id="password">
                                    </div>

                                   


                                    <input type="submit" name="submit" value="Change" class="btn btn-block btn-primary">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

<?php
    if(isset($_REQUEST['submit']))
    {
        include 'connection.php';
        $id=$_SESSION['id'];
        
        $q= mysqli_query($con,"select * from tbluser where Uid='$id'");
        $rw= mysqli_fetch_row($q);
        $o=$_REQUEST['oldpassword'];
        $ol= password_hash($o, PASSWORD_DEFAULT);
        $old= password_verify($o,$rw[6]);
       
        if($rw[6] == $old )
        {
            $n=$_REQUEST['newpassword'];
            $new= password_hash($n,PASSWORD_DEFAULT);
            
            $que= mysqli_query($con, "update tbluser set Password='$new' where Uid='$id'");
            echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';
        }
        else
        {
            echo "<script>alert('Wrong Old password')</script>";
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