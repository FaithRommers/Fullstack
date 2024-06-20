<div class="eventList">
<?php
//$pdo = new PDO('mysql:host=localhost;dbname=casuscafe;port=3306','root','');
require_once "dbCon.inc.php"; //connects to database

try {
    $sqlEvent = "SELECT idoptreden, naam, entree, datum, begintijd FROM optreden";
    $resultEvent= $pdo->query($sqlEvent);
} catch(PDOException $e) {
    echo "Error: ". $e->getMessage();
    die();
}

if($resultEvent->rowCount() > 0) {
    while($row = $resultEvent->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='event'>";
        echo "<h1 class='eventName'>".$row["naam"]."</h1>";
        echo "<div class='bandsEvent'>";

        try {
            $idEvent = $row["idoptreden"];
            $sqlBands = "SELECT bandnaam, muziekgenre FROM band b INNER JOIN band_has_optreden bo ON b.idband = bo.band_idband WHERE bo.optreden_idoptreden = $idEvent";
            $resultBands = $pdo->query($sqlBands);

            $bands = $resultBands->fetchAll(PDO::FETCH_ASSOC); // Store bands in an array

            if(count($bands) > 0) {
                echo "<div>";
                echo "<h2>Artiesten</h2>";
                echo "<ul class= bandNaam>";
                foreach ($bands as $bandRow) {
                    echo "<li>".$bandRow["bandnaam"]."</li>";
                }
                echo "</ul>";
                echo "</div>";
                
                echo "<div>";
                echo "<h2>Genre</h2>";
                echo "<ul class= eventNaam>";
                foreach ($bands as $bandRow) {
                    echo "<li>".$bandRow["muziekgenre"]."</li>";
                }
                echo "</ul>";
                echo "</div>";
            } else {
                echo "<p>No bands scheduled for this event</p>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        
        echo "</div>";
        echo "<div class='eventInfo'>";
        echo "<h3>Datum: ".$row["datum"]."</h3>";
        echo "<h3>Aanvangstijd: ".$row["begintijd"]."</h3>";
        echo "</div>";
        echo "<h3>Prijs: ".$row["entree"]." Euro</h3>";
        echo "</div>";
    }
} else {
    echo "<p>No data found</p>";
}
?>
</div>
