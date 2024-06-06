<?php
    
    session_start();
    require("../data/connessione.php");
    if(!isset($_SESSION["username"]) or !isset($_SESSION["foto_profilo"])){
        $username = "";
        $foto_profilo="";
    }
    $username = $_SESSION["username"];
    
    require("../data/connessione.php");
            
    $myquery = "SELECT codice, statistiche.username, foto_profilo, livello, uccisioni, vittorie, leggenda_preferita, morti, rank
                FROM utenti JOIN statistiche ON utenti.username=statistiche.username
                    JOIN leggende ON leggende.nome_leggenda=statistiche.leggenda_preferita
                WHERE statistiche.username='$username'";
    $ris = $conn->query($myquery) or die("<p>Query fallita!</p>");
    $row = $ris->fetch_assoc();
    if ($ris->num_rows > 0) {
        $codice = $row["codice"];
        $username=$row["username"];
        $icona=$row["foto_profilo"];
        $livello=$row["livello"];
        $uccisioni=$row["uccisioni"];
        $vittorie=$row["vittorie"];
        $leggenda_preferita=$row["leggenda_preferita"];
        $morti=$row["morti"];
        $rank=$row["rank"];
    }
    
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
    <link rel="stylesheet" href="../Css/style-statistiche.css">
    <?php require("include.php") ?>
    <title>Apex-Statistiche</title>
</head>
<body>
    <?php require("nav.php"); ?>

    <div class="container_utente">  
        <div class="utente">
            <div class="utente_foto">
                <img src="<?php echo $icona; ?>" alt="">
            </div>
            <div class="utente_nome">
                <?php echo "<p>$username</p>"; ?>
            </div>
        </div>
        <div class="background">
            <img src="../Foto/Foto main/Caustic-trap.jpg" alt="">
        </div>
        <br><br><br><br><br><br>
        <ul class="statistiche" style="font-family: 'TT Lakes Regular', sans-serif;">
            <li>
                <p>Livello</p>
                <p><br><?php echo $livello; ?></p>
            </li>
            <li>
                <p>Kill</p>
                <p><br><?php echo $uccisioni; ?></p>
            </li>
            <li>
                <p>Vittorie</p>
                <p><br><?php echo $vittorie; ?></p>
            </li>
        </ul>
        <br><br><br><br><br>
        <ul class="statistiche" style="font-family: 'TT Lakes Regular', sans-serif;">
            <li>
                <p>Leggenda preferita</p>
                <p><br><?php echo $leggenda_preferita; ?></p>
            </li>
            <li>
                <p>Morti</p>
                <p><br><?php echo $morti; ?></p>
            </li>
            <li>
                <p>Rank</p>
                <p><br><?php echo $rank; ?></p>
            </li>
        </ul>
        
    </div>
    <?php require("footer.php") ?>
</body>
</html>