<?php
require_once "dbCon.inc.php"; //connects to database

    try{
      $sql = "SELECT idband, bandnaam FROM band";
      $result = $pdo->query($sql);
    }catch(PDOException $e){
      echo "eeeeeeeeeeeeeeeeeror: ". $e->getMessage();
      die();
    }

    if($result->rowCount() > 0){
      while($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo "<option value=".$row["idband"].">".$row["bandnaam"]."</option>";
        }
      }else{
          echo "<p>Geeeeeeeeeeeeeeeeeeeeeeeeeeeeeen Data</p>";
      }
    