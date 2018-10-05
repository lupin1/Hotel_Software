
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <script src="js/action.js"></script>
    <title></title>
  </head>
  <body>
    <!-- Button to open the modal login form -->
  <div class="butt">
    <div style="font-size:3em;">
      <button onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-home" ></i></button>
    </div>
  </div>
<!-- The Modal -->

<div id="id01" class="modal">
 <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

 <!-- Modal Content -->

 <form class="modal-content animate" method="post" action="login.php">
   <div class="imgcontainer">
    <div style="font-size:5em;color:grey;">
     <i class="fab fa-fort-awesome-alt"> </i>
   </div>
  </div>
   <div class="container">

     <label for="uname"><b>Username</b></label>
     <input type="text" placeholder="Enter Username" name="uname" required>

     <label for="pwd"><b>Password</b></label>
     <input type="password" placeholder="Enter Password" name="pwd" required>

     <button type="submit">Login</button>
   </div>
 </form>
</div>

  </body>
</html>
