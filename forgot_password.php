<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

    if(isset($_SESSION['entotp']))
    {
        
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
                                    <h3>Forgot Password</h3>
                                    <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                                </div>
                                <form action="" method="post">
                                    
                                    <div class="form-group first">
                                        <label for="username">New Password</label>
                                        <input type="password" name="newpassword" class="form-control" placeholder="Enter new password" id="username">
                                    </div>
                                    <div class="form-group last mb-3">
                                        <label for="password">Confirm Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter Confirm Password" id="password">
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
        // put your code here
                if (isset($_REQUEST['submit'])) {
            include 'connection.php';

            $id=$_SESSION['uid'];
            $q = mysqli_query($con, "select * from tbluser where Uid='$id'");
            $rw = mysqli_fetch_row($q);
            $n = $_REQUEST['newpassword'];
            $cn = $_REQUEST['password'];
            $em = $_SESSION['email'];
            $qu = mysqli_query($con, "select * from tbluser where Email='$em'");
            $rww = mysqli_fetch_row($qu);

            $id = $rww[0];
            if ($n == $cn) {

                $new = password_hash($n, PASSWORD_DEFAULT);

                $que = mysqli_query($con, "update tbluser set Password='$new' where Uid='$id'");
                echo '<script type="text/javascript">
           window.location = "login.php"
      </script>';
            } else {
                echo "<script>alert('New Password And Confirm Password Are Not Same!')</script>";
                
            }
        }
        include 'footer.php';
        ?>
    </body>
</html>
