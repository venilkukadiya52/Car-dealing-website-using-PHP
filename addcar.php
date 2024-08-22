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
                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group first">
                                        <label for="fname">Car Name</label>
                                        <input type="text" pattern="[A-Za-z]" name="cname"  class="form-control" required="" >
                                    </div>
                                    <div class="form-group first">
                                        <label for="mname">Model</label>
                                        <select name="cmodel" class="form-control" >
                                            <option></option>
                                            <option>.</option>
                                            <option>.</option>
                                            <option>.</option>
                                            <option>.</option>
                                        </select>
                                    </div>
                                    <div class="form-group first">
                                        <label for="lname">Car Type</label>
                                        <select name="ctype" class="form-control" >
                                            <option></option>
                                            <option>sedan</option>
                                            <option>SUV</option>

                                        </select>
                                    </div>
                                    <div class="form-group first">
                                        <label for="address">Car Price</label>
                                        <input type="text" name="cprice" class="form-control" required="" >
                                    </div>
                                    <div class="form-group first">
                                        <label for="email">Car Length</label>
                                        <input type="tel" name="clength"  class="form-control" required="" >
                                    </div>
                                    <div class="form-group last mb-3">
                                        <label for="password">Car Width</label>
                                        <input type="tel" name="cwidth"  class="form-control" required="" >
                                    </div>
                                    <div class="form-group last mb-3">
                                        <label for="password">Car Height</label>
                                        <input type="tel" name="cheight"  class="form-control" required="" >
                                    </div>
                                    <div class="form-group first">
                                        <label for="contactno">Car Capacity</label>
                                        <input type="tel" name="ccapacity" class="form-control" required=""  >
                                    </div>
                                    <div class="form-group first">
                                        <label for="fname">Car Fule Type</label>
                                        <input type="text" name="cfuletype"  class="form-control" required=""  >
                                    </div>
                                    <div class="form-group first">
                                        <label for="fname">Car Engine</label>
                                        <input type="text" name="cengine"  class="form-control" required=""  >
                                    </div>
                                    <div class="form-group first">
                                        <label for="fname">Car Mileage</label>
                                        <input type="tel" name="cmileage"  class="form-control" required=""  >
                                    </div>
                                    <div class="form-group first">
                                        <label for="fname">Car Transmission type</label>
                                        <input type="text" name="ctransmissiontype"  class="form-control" required=""  >
                                    </div>
                                    <div class="form-group first">
                                        <label for="fname">Gear</label>
                                        <select name="cgear" class="form-control" >
                                            <option></option>
                                            <option>5</option>
                                            <option>6</option>

                                        </select>
                                    </div>
                                    <div class="form-group first">
                                        <label for="fname">Air Bag</label>
                                        <input type="text" name="cairbag"  class="form-control" required=""  >
                                    </div>
                                    <div class="form-group first">
                                        <label for="fname">Colour</label>
                                        <input type="text" name="ccolour"  class="form-control" required=""  >
                                    </div>
                                    <div class="form-group first">
                                        <label for="fname">Image</label>
                                        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" required="" >

                                    </div>
                                    <div class="form-group first">

                                        <input type="submit" value="Upload Image" name="submit" class="form-control">
                                    </div> 


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <?php
        /* include 'connection.php';
          $result= mysqli_query($con, "select * from tblcardetails");
          while ($row = mysqli_fetch_row($result)) {
          echo "<tr>";
          echo "<td><img src='uploads/$row[16].png' height='150px' width='300px'></td>";
          echo "</tr>\n"; } */
        ?>


        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

<?php include 'footer.php'; ?>
    </body>
</html>