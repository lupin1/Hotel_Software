<?php
include('db_connect.php');
?>
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/card.css">
    <title>Kartei</title>
  </head>
  <body>


      <div class="container-fluid">
      <div class="header">
        <div class="row">

  <div class="col-sm-8">

    <div class="butt">
      <div style="font-size:5em;">
        <button onclick="window.location.href='card.php'"><i class="fas fa-user-plus"></i></button>
      </div>
    </div>

  </div>


  <div class="col-sm-4">
    <div class="butt">
      <div style="font-size:5em;">
        <button onclick="window.location.href='card.php'"><i class="fas fa-address-book"></i></button>
      </div>
    </div>
  </div>
  </div>
</div>


  <div class="row">

    <div class="col-sm-4">

      <form action="db_insert.php" method="post">

<!--
  <input type="radio" name="gender" value="male">Herr
  <input type="radio" name="gender" value="female">Frau
  <input type="radio" name="gender" value="male"> Mr
  <input type="radio" name="gender" value="female"> Ms
-->
      <p>
      <input type="text" name="company" size="30" placeholder="Firmenname optional"/>

      <p>
      <input type="text" name="name" size="30" placeholder="Vorname"required/>


      <p>
      <input type="text" name="surename" size="30" placeholder="Nachname"required/>


      <p>
      <input type="text" name="streetno" size="30" placeholder="Adresse"/>


      <p>
      <input type="text" name="citycode" size="30" placeholder="PLZ"/>


      <p>
      <input type="text" name="city" size="30" placeholder="Stadt"/>

      </p>

      <input type="submit" value="speichern">

      </form>



    </div>



<!--
    <div class="col-sm-4">
      <p>
      <input type="text" name="first_name" size="30" placeholder="Vorname"required/>


      <p>
      <input type="text" name="first_name" size="30" placeholder="Nachname"required/>


      <p>
      <input type="text" name="first_name" size="30" placeholder="Strasse , Nr."/>


      <p>
      <input type="text" name="first_name" size="30" placeholder="PLZ"/>


      <p>
      <input type="text" name="first_name" size="30" placeholder="Stadt"/>

      </p>
    </div>
    <div class="col-sm-2">

    </div>
    -->
  </div>
  <button onclick="window.location.href='welcome.php'"></button>
</div>

    </form>
  </body>
</html>
