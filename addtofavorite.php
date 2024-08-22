<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include 'connection.php';
        $id = $_REQUEST['id'];
        $s = mysqli_query($con, "select * from tbladdtofavorite");

        while ($rt = mysqli_fetch_row($s)) {

            if ($rt[1] == $id) {

                echo '<script type="text/javascript">
                    window.location = "inner.php"
                    </script>';
            } else {
                $d = mysqli_query($con, "insert into tbladdtofavorite (Car_id) values ($id)");
                echo '<script type="text/javascript">
                    window.location = "favoritecar.php"
                    </script>';
            }
        }
        ?>
    </body>
</html>
