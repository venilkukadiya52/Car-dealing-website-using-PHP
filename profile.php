<?php
if (isset($_SESSION)) {
    session_start();
}
?>
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

        <title>Profile Page</title>
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
                                    <h3><strong>Profile</strong></h3>
                                    <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                                </div>
                                <form action="" method="post">
                                    <div class="form-group first">
                                        <label for="fname">First name</label>
                                        <input type="text" name="fname" value="<?php echo $_SESSION['fname']; ?>"  class="form-control" required=""  id="fname">
                                    </div>
                                    <div class="form-group first">
                                        <label for="mname">Middle name</label>
                                        <input type="text" name="mname" value="<?php echo $_SESSION['mname']; ?>"  class="form-control" required=""  id="mname">
                                    </div>
                                    <div class="form-group first">
                                        <label for="lname">Last name</label>
                                        <input type="text" name="lname" value="<?php echo $_SESSION['lname']; ?>"  class="form-control" required=""  id="lname">
                                    </div>
                                    <div class="form-group first">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" class="form-control" value="<?php echo $_SESSION['address']; ?>" required=""  id="address">
                                    </div>
                                    <div class="form-group first">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" value="<?php echo $_SESSION['email']; ?>"  class="form-control" required=""  id="">
                                    </div>

                                    <div class="form-group first">
                                        <label for="contactno">Contact No</label>
                                        <input type="tel" value="<?php echo $_SESSION['contactno']; ?>"  name="contactno" class="form-control" required=""  id="contactno">
                                    </div>
                                    <input type="submit" name="update" value="Update" class="btn btn-block btn-primary">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <?php

        include 'connection.php';
        if (isset($_REQUEST['update'])) {
            $fname = $_REQUEST['fname'];
            $mname = $_REQUEST['mname'];
            $lname = $_REQUEST['lname'];
            $address = $_REQUEST['address'];
            $email = $_REQUEST['email'];
          
            $contactno = $_REQUEST['contactno'];
            $id = $_SESSION['id'];
            $query_insert = mysqli_query($con, "update tbluser set First_name='$fname',Middle_name='$mname',Last_name='$lname',Address='$address',Email='$email',Contactno='$contactno' where Uid='$id'");
            $_SESSION['fname'] = $fname;
            $_SESSION['mname'] = $mname;
            $_SESSION['lname'] = $lname;
            $_SESSION['email'] = $email;
            $_SESSION['address'] = $address;
            $_SESSION['contactno'] = $contactno;
            
            echo '<script type="text/javascript">
           window.location = "profile.php"
      </script>';
            
        }
        ?>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

<?php include 'footer.php'; ?>
    </body>
</html>
