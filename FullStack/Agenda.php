<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Style/CSS.css" /> 
  <link rel="icon" type="image/x-icon" href="Images/favicon.ico">
  <title>CasusCafe</title>
</head>
<body>
 
<header class="header">
  <!-- navigation bar  -->
  <?php require_once 'Inclusions/NavBar.inc.php' ?>
</header>

<div class="agenda">
<?php
  require_once "Inclusions/Events.php"
?>
</div>

<footer> 
      <p>&copy; CasusCafe 2024</p> 
</footer> 

</body>
</html>