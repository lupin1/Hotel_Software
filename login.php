<?php
session_start();
include('config.php');
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($conn,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pwd']);
      //var_dump($myusername);
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {

         $_SESSION['login_user'] = $myusername;

         header("Location: welcome.php");
      }else {
         header("Location: ooops.php");
      }
   }
?>
