<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/ooops.css">
    <title>ooops</title>
  </head>
  <body>
    <div class="ooopsText">
      <span> Ooops, something went wrong! Please try again</span>
    </div>

  <div class="container">
    <div class="ooops">
      <div style="font-size:5em; color: grey">
        <button onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-exclamation-triangle"></i></button>
      </div>



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
      </div>
    </div>
  </body>
</html>
