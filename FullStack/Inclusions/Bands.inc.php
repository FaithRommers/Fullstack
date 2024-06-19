<?php
require_once "dbCon.inc.php"; //connects to database

    try{
      $sql = "SELECT bandnaam, muziekgenre FROM band";
      $result = $pdo->query($sql);
    }catch(PDOException $e){
      echo "eeeeeeeeeeeeeeeeeror: ". $e->getMessage();
      die();
    }

    echo"<div class='list'>";
    echo"<p class='anotherlist'>Band</p>";
    echo"<ul class='bandlist'";
      if($result->rowCount() > 0){
      while($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo "<li>".$row["bandnaam"]. "</li>";
        }
      }else{
          echo "<p>Geeeeeeeeeeeeeeeeeeeeeeeeeeeeeen Data</p>";
      }
      echo "</ul>";
      echo "</div>";

      $result->execute(); 

      echo"<div class='list'>";
    echo"<p class='anotherlist'>genre</p>";
    echo"<ul class='bandlist'";
      if($result->rowCount() > 0){
      while($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo "<li>".$row["muziekgenre"]. "</li>";
        }
      }else{
          echo "<p>Geeeeeeeeeeeeeeeeeeeeeeeeeeeeeen Data</p>";
      }
      echo "</ul>";
      echo "</div>";