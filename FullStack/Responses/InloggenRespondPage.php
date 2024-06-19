
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
    require_once "../Inclusions/dbCon.inc.php"; //connects to database

  
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage(); // Foutmelding bij een mislukte database verbinding
  }
}


if (isset($_POST['email']) && isset($_POST['wachtwoord'])) {

    if (empty($email)) {

       // header("Location: Inloggen.php?error=User Name is required");
        echo "Geen email ingevuld";
        exit();

    }else if(empty($wachtwoord)){

        //header("Location: Inloggen.php?error=Password is required");
        echo "Geen wachtwoord ingevuld";
        exit();

    }else{

        $sql = "SELECT voornaam, achternaam, email, wachtwoord FROM gebruiker WHERE email = :email";
        $query = $pdo->prepare($sql);
        $query->execute(['email' => $email]);
        //print_r($result);

        $row = $query->fetch(PDO::FETCH_ASSOC);

        if ($row){
            
            if ($wachtwoord === $row["wachtwoord"]){
              $_SESSION["user"] = array("naam" => $row["voornaam"]);
              header("Location: ../Home.php");
                exit();
            }else{
              header("Location: ../Inloggen.php");
                exit();
            }
          } else{
            header("Location: ../Inloggen.php");
                exit();
          }
    }
}else{
    header("Location: ../Inloggen.php");
    exit();
}
