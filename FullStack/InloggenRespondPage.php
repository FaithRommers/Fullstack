
<?php
session_start();


$host = 'localhost';  // De hostnaam van de database server
$username = 'root'; // De gebruikersnaam voor de database verbinding
$password = ''; // Het wachtwoord voor de database verbinding
$database = 'casuscafe'; // De naam van de database


$conn = ''; // Initialiseer de variabele voor de database verbinding

// Controleer of het verzoek een POST-verzoek is
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"]; // Haal het ingevoerde e-mailadres op uit het POST-verzoek
  $wachtwoord = $_POST["wachtwoord"]; // Haal het ingevoerde wachtwoord op uit het POST-verzoek

  try {
    // Maak een PDO-verbinding
    $dsn = "mysql:host=$host;dbname=$database";
    $conn = new PDO($dsn, $username, $password);

    // Bereid de SQL-query voor om de gebruiker op te zoeken op basis van het e-mailadres
    $sql = $conn->prepare("SELECT * FROM gebruiker WHERE email = :email");
    $sql->execute([':email' => $email]); // Voer de query uit met de ingevoerde e-mail

    // Haal de resultaten op als een associatieve array
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    // Controleer of het wachtwoord overeenkomt met het wachtwoord uit de database
    if(isset($result[0]["wachtwoord"]) && ($result[0]["wachtwoord"] == $_POST["wachtwoord"])) {
      session_destroy(); // Beëindig de bestaande sessie
      $_SESSION["user"] = $_POST["email"]; // Sla het e-mailadres van de gebruiker op in de sessie

      // Controleer of het wachtwoord overeenkomt met het administratieve wachtwoord
      if($_POST["wachtwoord"] === "doetje123") {
        echo "succesvol ingelogd als administrator " . $_SESSION["user"];
        header("location: Home.php"); // Redirect naar de homepagina
      } else {
        echo "no autghoritei. ingelogd als " . $_SESSION["user"]; // Gebruiker ingelogd zonder admin rechten
      }
    } else {
      echo "sorry geen toegang"; // Foutmelding als het wachtwoord niet overeenkomt
    }
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage(); // Foutmelding bij een mislukte database verbinding
  }
}
?>