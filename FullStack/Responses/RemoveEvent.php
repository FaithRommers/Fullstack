<?php
require_once "../Inclusions/dbCon.inc.php"; //connects to database

if($_SERVER["REQUEST_METHOD"] =="POST"){
  $ID = $_POST["event"];

  try{
    $query = "DELETE FROM band_has_optreden WHERE optreden_idoptreden = $ID;";
    $stmt = $pdo->exec($query);

    $query2 = "DELETE FROM optreden WHERE idoptreden = $ID;";
    $stmt2 = $pdo->exec($query2);
  
      $pdo = null;
      $stmt = null;
  
      header("location: ../Admin.php");
  
      die();
    } catch(PDOException $e){
      die("Query failed". $e->getMessage());
  
    }


}else {
  header("location: ../Home.php");
}


    