<?php

$conn = mysqli_connect('127.0.0.1', 'root', 'landstreicher', 'Hotel');

        if(!$conn) {
          die("Fehler im System");
          exit;
        }
        echo('SELECTED');













    //    mysqli_select_db($conn,'kartei');

/*
        if(!mysqli_select_db($conn,'Hotel'))
        {
          die("DB not selected");
          exit;
        }
*/

//mysqli_close($conn);

// error_reporting(E_ALL);
?>
