<?php

include 'connection.php';

if (isset($_REQUEST['submit'])) {
    $email = $_REQUEST['email'];
    $p = $_REQUEST['password'];



    $query = mysqli_query($con, "select * from tbluser");

    while ($row = mysqli_fetch_row($query)) {
        $pp = $row[6];
        $pass = password_verify($p, $pp);
        if ($row[5] == $email && $row[6] == $pass) {
            session_start();
            $_SESSION['fname'] = $row[1];
            $_SESSION['id'] = $row[0];
            $_SESSION['lname'] = $row[3];
            $_SESSION['mname'] = $row[2];
            $_SESSION['email']=$row[5];
            $_SESSION['address'] = $row[4];
            $_SESSION['contactno'] = $row[7];
            header("Location: index.php");
        }
        else
        {
            echo "<script>alert('Email or Password Are Invalid')</script>";
            echo '<script type="text/javascript">
           window.location = "login.php"
      </script>';
        }
    }
}