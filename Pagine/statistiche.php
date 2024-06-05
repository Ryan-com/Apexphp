<!-- Pagina da rivedere, non prende le informazioni dal database -->
<?php

    if (isset($_POST["codice"])) $codie = $_POST["codice"]; else $codice = "";
    if (isset($_POST["conferma"])) $conferma = $_POST["conferma"];  else $conferma = "";
    if (isset($_POST["icona"])) $icona = $_POST["icona"];  else $icona = "";
    if (isset($_POST["livello"])) $livello = $_POST["livello"];  else $livello = "";
    if (isset($_POST["uccisioni"])) $uccisioni = $_POST["uccisioni"]; else $uccisioni = "";
    if (isset($_POST["vittorie"])) $vittorie = $_POST["vittorie"]; else $vittorie = "";
    if (isset($_POST["leggenda_preferita"])) $leggenda_preferita = $_POST["leggenda_preferita"];  else $leggenda_preferita = "";
    if (isset($_POST["morti"])) $morti = $_POST["morti"];  else $morti = "";
    if (isset($_POST["rank"])) $rank = $_POST["rank"];  else $rank = "";
    
    session_start();
    require("../data/connessione.php");
    if(!isset($_SESSION["username"]) or !isset($_SESSION["foto_profilo"])){
        $username = "";
        $foto_profilo="";
    }
    $username = $_SESSION["username"];
    
    $sql = "SELECT foto_profilo
            FROM utenti
            WHERE username='$username'";
    $ris = $conn->query($sql) or die("<p>Query fallita!</p>");
    $riga = $ris->fetch_assoc();
    $foto_profilo = $riga["foto_profilo"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Statistiche</title>
</head>
<body>
    <?php
        if(isset($_POST["username"])) {
            require("../data/connessione.php");
            
            $myquery = "SELECT codice, statistiche.username, foto_profilo, livello, uccisioni, vittorie, leggenda_preferita, morti, rank
                        FROM utenti JOIN statistiche ON utenti.username=statistiche.username
                            JOIN leggende ON leggende.nome_leggenda=statistiche.leggenda_preferita
                        WHERE username='$username'";
            $ris = $conn->query($myquery) or die("<p>Query fallita!</p>");
            $row = $ris->fetch_assoc();
            echo $row;
            if ($row->num_rows == 0){echo"sei negro";}
            if ($ris->num_rows > 0) {
                echo "Daje roma";
                $codice = $row["codice"];
                $username=$row["username"];
                $icona=$row["profilo_utente"];
                $livello=$row["livello"];
                $uccisioni=$row["uccisioni"];
                $vittorie=$row["vittorie"];
                $leggenda_preferita=$row["leggenda_preferita"];
                $morti=$row["morti"];
                $rank=$row["rank"];
                echo $row['codice'];
            }
            
        }
    ?>

    <div class="container_utente">
    
        <div class="utente">
            <div class="utente_foto">
                <?php echo $codice; ?>
            </div>
            <div class="utente_nome">
                <?php echo $username; ?>
            </div>
        </div>

        <ul class="statistiche">
            <li>
                <p>Livello</p>
                <?php echo "<p>$livello</p>"; ?>
            </li>
            <li>
                <p>Kill</p>
                <p><?php echo $uccisioni; ?></p>
            </li>
            <li>
                <p>Vittorie</p>
                <p><?php echo $vittorie; ?></p>
            </li>
            <li>
                <p>Leggenda preferita</p>
                <p><?php echo $leggenda_preferita; ?></p>
            </li>
            <li>
                <p>Morti</p>
                <p><?php echo $morti; ?></p>
            </li>
            <li>
                <p>Rank</p>
                <p><?php echo $rank; ?></p>
            </li>
        </ul>
        
    </div>
</body>
</html>