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
    echo"<h3 class='anotherlist'>Band</h3>";
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
    echo"<h3 class='anotherlist'>Genre</h3>";
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