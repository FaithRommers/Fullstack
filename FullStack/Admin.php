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
  <link rel="icon" type="image/x-icon" href="Images/favicon.ico">
</head>
<body>


  <header class='header'> 
      <!-- navigation bar  -->
      <?php require_once 'Inclusions/NavBar.inc.php' ?>
  </header>  
<!-- in database -->

<div class="addAdmin">
  <div class="addBand">
      <form action="Responses/AddBandRespondse.php" method= "POST">
        <input type="text" name="bandNaam" value="" placeholder="Band naam">
        <select name="bandGenre">
          <option value="" hidden disabled selected>(Kies genre)</option>
          <option value="Pop">Pop</option>
          <option value="Rock">Rock</option>
          <option value="Metal">Metal</option>
          <option value="Klassiek">Klassiek</option>
          <option value="Hiphop">Hiphop</option>
          <option value="R&B">R&B</option>
          <option value="Electronic">Electronic</option>
          <option value="Dance">Dance</option>
          <option value="Jazz">Jazz</option>
        <input type="submit" name="knop" value="voeg toe">
      </form>
  </div>

  <!-- on the page -->
  <div class="addEvent">
      <form action="Responses/AddEventResponse.php" method= "POST">
        <input type="text" name="eventNaam" value="" placeholder="Event naam">
        <input type="text" name="datum" value="" placeholder="yyyy-mm-dd">
        <input type="time" name="tijd" value="">
        <input type="decimal" name="prijs" value="" placeholder="entreeprijs">
        <input type="submit" name="knop" value="voeg toe">
      </form> 
  </div>

  <div class="addEventToBand">
      <form action="Responses/AddEventToBandResponsePage.php" method= "POST">
        <select name="band">
          <option value="" hidden disabled selected>(Kies band)</option>
          <?php require_once "Inclusions/AddBand.inc.php"; ?>
          </select>

        <select name="optreden">
          <option value="" hidden disabled selected>(Kies event)</option>
          <?php require_once "Inclusions/AddEvent.inc.php"; ?>
        </select>
        <input type="submit" name="knop" value="voeg toe">
      </form>
  </div>

  <div class="removeEvent">
  <form action="Responses/RemoveEvent.php" method= "POST">
      <select name="event">
          <option value="" hidden disabled selected>(Kies event)</option>
          <?php require_once "Inclusions/RemoveEvent.inc.php"?>
      </select>
      <input type="submit" name="knop" value="Verwijder">
    </form>
  </div>

  <div class="removeBand"> 
    <form action="Responses/RemoveBand.php" method= "POST">
      <select name="band">
          <option value="" hidden disabled selected>(Kies band)</option>
          <?php require_once "Inclusions/RemoveBand.inc.php"?>
      </select>
      <input type="submit" name="knop" value="Verwijder">
    </form>
  </div>

</div>

<div class="bandTabel">
  <?php  require_once "Inclusions/Bands.inc.php"; //connects to database?>
 </div>
    <footer> 
      <p>&copy; CasusCafe 2024</p> 
    </footer> 
</body>
</html>