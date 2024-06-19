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

<div class="inlog">
<form class = inlogzooi action="Responses/InloggenRespondPage.php" method="POST">
		Email: <br> <input type="text" name="email" value=""> <br>
    Wachtwoord: <br> <input type="password" name="wachtwoord" value="">
		<input type="submit" name="knop" value="verstuur">
	</form>
</div>

<?php if (isset($_GET['error'])) { ?>
<p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>

</main>

<footer> 
  <p>&copy; CasusCafe 2024</p> 
</footer> 

</body>
</html>