<?php
    // session_start();
    // if(!isset($_SESSION["username"])){
    //     header("location: index.php");
    // }
    // $username = $_SESSION["username"];
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
    <p>
        <?php
        if(isset($_POST["username"])) {
            require("../data/connessione.php");
            
            $myquery = "SELECT utenti.username, icona_utente, livello, uccisioni, vittorie, leggenda_preferita, morti, rank
                        FROM utenti JOIN statistiche ON utenti.username=statistiche.username
                            JOIN leggende ON leggende.nome=statistiche.leggenda_preferita
                        WHERE utenti.username='$username'";
            $ris = $conn->query($myquery) or die("<p>Query fallita!</p>");
            $riga = $ris->fetch_assoc();
            if ($riga->num_rows == 0) {
                echo "Non trovo le tue statistiche";
                $conn->close();
            }else{
                $username=$riga["username"];
                $icona=$riga["icona_utente"];
                $livello=$riga["livello"];
                $uccisioni=$riga["uccisioni"];
                $vittorie=$riga["vittorie"];
                $leggenda_preferita=$riga["leggenda_preferita"];
                $morti=$riga["morti"];
                $rank=$riga["rank"];
            }
        }
        ?>
    </p>
    <div class="container_utente">
        <div class="utente">
            <div class="utente_foto">
                <?php echo $icona; ?>
            </div>
            <div class="utente_nome">
                <?php echo $username; ?>
            </div>
        </div>
        <div class="statistiche">

        </div>
    </div>
</body>
</html>