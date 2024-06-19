<?php

if(isset($_SESSION['user']['naam']) == "kip"){
  echo "<ul>"; 
   echo "<li><a class='active' href='Home.php'>Home</a></li>";
   echo "<li><a href='Agenda.php'>Agenda</a></li>";
   echo "<li><a href='Admin.php'>Admin</a></li>";
   echo "<li style='float:right'><a class='active' href='Responses/uitloggen.php'>uitloggen</a></li>";
   echo "<li style='float:right'><a>Welkom, " . $_SESSION['user']['naam'] . "</a></li>";
  echo "</ul>";
} else{
  echo "<ul>"; 
   echo "<li><a class='active' href='Home.php'>Home</a></li>";
   echo "<li><a href='Agenda.php'>Agenda</a></li>";
   echo "<li style='float:right'><a class='active' href='Inloggen.php'>Inloggen</a></li>";
  echo "</ul>";
}