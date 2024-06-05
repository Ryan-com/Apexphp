<?php
    if(!isset($_GET["nome_leggenda"])){
        die("Errore: leggenda non trovata");
    } else{
        $nome_leggenda = $_GET["nome_leggenda"];
        require("../data/connessione.php");

        $sql = "SELECT nome_leggenda, descrizione_txt, foto_leggenda, copertina, link_video
                FROM leggende
                WHERE nome_leggenda = '$nome_leggenda'";

        $ris = $conn->query($sql) or die("Query fallita!");
        if ($ris->num_rows == 0) {
            // decidere che cosa fare
            die ("Personaggio non trovato");
        }else{
            $riga = $ris->fetch_assoc();
            $descrizione = $riga["descrizione_txt"];
            $foto = $riga["foto_leggenda"];
            $copertina = $riga["copertina"];
            $link = $riga["link_video"];
        }
    }

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
    <title>Apex Legends</title>

    <link rel="stylesheet" href="../Css/style-character.css">
    <?php require("include.php") ?>

</head>

<body class="main1">
    <?php require("nav.php"); ?>
    <main>
        <?php 
            require("../data/connessione.php");

            echo <<<EOD
                <div class="cover1">
                    <img src="../Foto/Character/$copertina" alt="$copertina" class="wp">
                    <div class="main_name">
                        <h1 class="name">$nome_leggenda</h1>
                    </div>
                </div>
        
                
                <div class="info">
                    <img src="../Foto/Character/$foto" alt="$foto" class="character">
                    <h3 class="title">Descrizione:</h3>
                    <p class="description"><em>$descrizione</em></p>
                </div>
        
                <div>
                    <iframe class="video" width="1103" height="622" src="$link" title="Incontra Ballistic | Trailer personaggio di Apex Legends" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            EOD;

            echo "$copertina";
        ?>
    </main>
    <?php require("torna-su.php");?>

</body>
</html>