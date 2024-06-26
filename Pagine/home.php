<?php
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
    <?php require("include.php") ?>
</head>

<?php require("nav.php"); ?>
<body class="main1">


    <main class="container">

        <?php require("hamburger.php");?>

        <div class="cover">
            
            <!-- <div class="cover__logo">
                </div> -->
            <div class="cover__content">
                <img  src="../Foto/Logos/apex-hero-medium-logo-light.svg" alt="">
                <h2 class="sublogo-text tw"> Affronta la nuova stagione di Apex Legends™: Scintilla!</h2>    
                <a href="https://www.youtube.com/watch?v=JK2p-vZNfPA" class="button2 button-text"> Guarda ora il nuovo trailer! <img src="../Foto/Icons/play-button.png" alt="" id="tasto-play"></a>
            </div>

            
            <video width="320" height="240" autoplay muted loop class="video-class">
                <source src="../Foto/Logos/Apex Legends_ Breakout Launch Trailer.mp4" type="video/mp4">
            </video>
        </div>
        <!-- <div class="divisorio"></div> -->

        <div class="cover-main">
            <img src="../Foto/Foto main/sfondo-main.jpg" alt="sfondo-main.jpg">
            <div class="cover-main__content">
                <img src="../Foto/Logos/Apex-legends-logo.png" alt="Apex-legends-logo.png">
                <br></br>
                <p class="logo-subtext-main bt">Scatenati nella nuova stagione: Scintilla!</p>
                <p class="logo-subtext-main bt">Entra a far parte del team Apex qui sotto!</p>
                <a href="https://www.youtube.com/watch?v=JK2p-vZNfPA" class="button2 button-text2">Registrati!</a>
            </div>
            
        </div>

        

    </main>

    <?php require("torna-su.php");?>
</body>
<?php require("footer.php");?>
</html>