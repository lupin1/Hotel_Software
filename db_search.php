<?php
include('db_connect.php');

$name = $_POST['name'];

   echo "<b>Du hast nach dem Namen: \"<u>$name</u>\" gesucht. Dadurch wurden folgende Einträge gefunden:</b><br /><br />";

//* Überprüfung der Eingabe
   $abfrage = "SELECT * FROM kartei WHERE name LIKE '%$name%'";
   $ergebnis = mysql_query($abfrage) or die(mysql_error());
   if($ausgabe = mysql_fetch_assoc($ergebnis))
       { echo "".$ausgabe['name'].""; } //* Wenn was gefunden wurde, wird es hier ausgegeben.
   else
       { echo "Es wurde kein Name unter den Namen \"<u>$name</u>\" gefunden.<br />
       Bitte versuche es mit einem anderen namen.<br />
       <a href='suchen.html'>Zur&uuml;ck!</a>";
   }    // * Wenn nichts gefunden wurde, dann kommt diese Fehlermeldung.


 ?>
