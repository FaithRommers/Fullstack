<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Style/CSS.css" /> 
  <title>CasusCafe</title>
</head>
<body>

  <header class="header"> 
    <!-- navigation bar  -->
    <?php require_once 'Inclusions/NavBar.inc.php' ?>
  </header>

  <main>
    <div class="wooooParagraphy"> 
      <p>EasyTiger Patio heeft een klein cafe/muziektheater genaamd CasusCafe dat muziekavonden organiseert waarop bands op bezoek komen om te spelen. 
          Op 1 avond is er ruimte voor een hoofdact en een
          supportact, maar er zijn ook wel eens festivals waarbij er meerdere hoofdacts spelen op een
          avond of dag.
          Soms is de toegang gratis, maar in veel gevallen wordt er entreegeld gevraagd. Een band heeft
          zo zijn eigen prijs.
          log in of registreer om tickets te bestellen om u favoriete bands live te supporten of een plek te reserveren.
      </p>
    </div>

  </main>


  <footer> 
      <p>&copy; CasusCafe 2024</p> 
  </footer> 

</body>
</html>