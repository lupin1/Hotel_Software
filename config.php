<?php
$conn = mysqli_connect("127.0.0.1", "root", "landstreicher", "database");

        if(!$conn) {
          die("Fehler im System");
          exit;
        }

//mysqli_close($conn);

error_reporting(E_ALL);
?>
