<?php
   include('session.php');
?>
<html>

   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
     <link rel="stylesheet" href="./css/welcome.css">
      <title>myHotel</title>
   </head>
   <body>
     <div class="container">
       <div class="row">
         <div class="col">
           <div class="butt">
             <div style="font-size:5em;">
               <button onclick="window.location.href='card.php'"><i class="fas fa-address-card"></i></button>
             </div>
           </div>
         </div>

          <div class="col">
            <div class="butt">
              <div style="font-size:5em;">
                <button onclick="window.location.href='belegungsPlan.php'"><i class="fas fa-bed"></i></button>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="butt">
              <div style="font-size:5em;">
                <button onclick="window.location.href='listen.php'"><i class="fas fa-clipboard-list"></i></button>
              </div>
            </div>
          </div>
        </div>
     </div>
   </body>
   <div class="footer">
     <div style="font-size:2em;">
       <button onclick="window.location.href='logout.php'"><i class="fas fa-power-off"></i></button>
     </div>
   </div>

</html>
