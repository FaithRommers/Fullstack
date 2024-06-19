<?php
session_start();




if($_SERVER["REQUEST_METHOD"] =="POST"){
  $band = $_POST["band"];
  $event = $_POST["optreden"];

  try{
    require_once "../Inclusions/dbCon.inc.php"; //connects to database

    $query = "INSERT INTO band_has_optreden (band_idband, optreden_idoptreden) VALUES(?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt -> execute([$band, $event]);

    $pdo = null;
    $stmt = null;

    header("location: ../Admin.php");

    die();
  } catch(PDOException $e){
    die("Query failed". $e->getMessage());

  }
}

else {
  header("location: ../Home.php");
}