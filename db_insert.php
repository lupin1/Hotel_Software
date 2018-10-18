<?php
include('db_connect.php');

// Var aus Card.php
$Firmenname = $_POST["company"];
$Vorname = $_POST["name"];
$Nachname = $_POST["surename"];
$Adresse = $_POST["streetno"];
$PLZ = $_POST["citycode"];
$Stadt = $_POST["city"];

// if Null dann leerer String oder 0.
if(empty($Firmenname))
{
  $Firmenname = "";
}

if(empty($Adresse))
{
  $Adresse = "";
}

if(empty($PLZ))
{
  $PLZ = "0";
}

if(empty($Stadt))
{
  $Stadt = "";
}

$eintrag = "INSERT INTO kartei (company , name , surename, streetno, citycode, city) VALUES ('$Firmenname','$Vorname','$Nachname','$Adresse','$PLZ','$Stadt')";

mysqli_query($conn,$eintrag);

header("refresh:0000.1; url=card.php");

?>
