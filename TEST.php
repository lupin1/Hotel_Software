<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
  </head>
  <body>

    <?php
    include('db_connect.php');

    $eintrag = "INSERT INTO kartei (company , name , surename) VALUES ('Lenovo','Dennis','Rabe')";

    mysqli_query($conn,$eintrag)
     ?>
    </form>
  </body>
</html>
