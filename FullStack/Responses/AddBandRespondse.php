<?php
session_start();




if($_SERVER["REQUEST_METHOD"] =="POST"){
  $naam = $_POST["bandNaam"];
  $genre = $_POST["bandGenre"];

  try{
  //  $pdo = new PDO('mysql:host=localhost;dbname=casuscafe;port=3306','root','');
    require_once "../Inclusions/dbCon.inc.php"; //connects to database

    $query = "INSERT INTO band (bandnaam, muziekgenre) VALUES (?, ?);";

    $stmt = $pdo->prepare($query);

    $stmt -> execute([$naam, $genre]);

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