<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="CSS.css" /> 
  <title>CasusCafe</title>
</head>
<body>


  <header> 
      <!-- navigation bar  -->
      <ul> 
        <li><a href="Home.php">Home</a></li> 
        <li><a href="Agenda.php">Agenda</a></li> 
        <li><a class="active" href="Admin.php">Admin</a></li> 
        <li style="float:right"><a class="active" href="Inloggen.php">Inloggen</a></li>
      </ul> 
  </header>  

<main>

<div class = "buttons">
<button>aaaaaaaaaaaaaaaaaaaaaaaaa</button>
</div>

<!-- in database -->
<div class="addBand">
    <form action="AddBandRespondse.php" method= "POST">
      <input type="text" name="bandNaam" value="" placeholder="Band naam">
      <input type="text" name="bandGenre" value="" placeholder="Band genre">
      <input type="submit" name="knop" value="voeg toe">
    </form>
</div>

<!-- on the page -->
<div class="addEvent">
    <form action="AddEventResponse.php" method= "POST">
      <input type="text" name="eventNaam" value="" placeholder="Event naam">
      <input type="text" name="datum" value="" placeholder="yyyy-mm-dd">
      <input type="time" name="tijd" value="">
      <input type="decimal" name="prijs" value="" placeholder="entreeprijs">
      <input type="submit" name="knop" value="voeg toe">
    </form>
</div>

<div class="addEventToBand">
    <form action="AddEventResponse.php" method= "POST">
      <input type="text" name="bandNaam" value="" placeholder="Band naam">
      <input type="text" name="eventNaam" value="" placeholder="Event naam">
      <input type="submit" name="knop" value="voeg toe">
    </form>
</div>





</main>

    <footer> 
      <p>&copy; CasusCafe 2024</p> 
    </footer> 
</body>
</html>