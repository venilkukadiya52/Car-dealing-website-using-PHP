<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_REQUEST['submit'])) {
    
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        
        $uploadOk = 1;
    } else {
        echo "<script>alert('File is not an image.')</script>";
        $uploadOk = 0;
    }
}

// Check if file already exists


// Check file size

// Allow certain file formats
if ($imageFileType != "jpg") {
    
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        include 'connection.php';
        echo "<script>alert('The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.')</script>";
        $image = basename($_FILES["fileToUpload"]["name"], ".png");
        $cname=$_REQUEST['cname'];
        $cmodel=$_REQUEST['cmodel'];
        $ctype=$_REQUEST['ctype'];
        $cprice=$_REQUEST['cprice'];
        $clength=$_REQUEST['clength'];
        $cwidth=$_REQUEST['cwidth'];
        $cheight=$_REQUEST['cheight'];
        $ccapacity=$_REQUEST['ccapacity'];
        $cfuletype=$_REQUEST['cfuletype'];
        $cengine=$_REQUEST['cengine'];
        $cmileage=$_REQUEST['cmileage'];
        $ctransmissiontype=$_REQUEST['ctransmissiontype'];
        $cgear=$_REQUEST['cgear'];
        $cairbag=$_REQUEST['cairbag'];
        $ccolour=$_REQUEST['ccolour'];
        session_start();
        
        
        $qu = mysqli_query($con, "insert into tblcardetails (Car_name,	Car_model,Car_type,Car_price,Car_Length,Car_width,Car_height,Car_capacity,Car_fule_type,Car_engine,Car_mileage,Car_transmition_type,Car_gear,Car_airbag,Car_colour,Car_image) values ('$cname','$cmodel','$ctype','$cprice','$clength','$cwidth','$cheight','$ccapacity','$cfuletype','$cengine','$cmileage','$ctransmissiontype','$cgear','$cairbag','$ccolour','$image') ");
        echo "<script>alert('Car Added Successfully')</script>";
        header("Location: addcar.php ");
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>