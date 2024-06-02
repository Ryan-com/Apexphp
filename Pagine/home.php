<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location: index.php");
    }
    $username = $_SESSION["username"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex Legends</title>
    <?php require("include.php") ?>
</head>

<body class="main1">
    
    <?php require("nav.php"); ?>

    <main class="container">

        <?php require("hamburger.php");?>


        <div class="cover">
            
            <div class="cover__logo">
                <img  src="../Foto/Logos/apex-hero-medium-logo-light.svg" alt="">
            </div>
            
            <div class="cover__content">
                <h2 class="sublogo-text tw"> Lanciati nella mischia!</h2>
            </div>
            
            <video width="320" height="240" autoplay muted loop class="video-class">
                <source src="../Foto/Logos/Apex Legends_ Breakout Launch Trailer.mp4" type="video/mp4">
            </video>
        </div>

        <!-- <div class="divisorio"></div> -->

        <div class="sfondo">
            
            <div>
                <h2 class="tito">Scegli dove atterrare!</h2>
            <div class="container-photo">
                <img class="photo" src="../Foto/Foto main/luoghi.jpg" alt="">
            </div>
        </div>  
        <div>
            <h2 class="tito">Armati fino ai denti!</h2>
            <div class="container-photo">
                <img class="photo" src="../Foto/Foto main/armi.jpg" alt="">
            </div>
        </div>  
        <div>
            <h2 class="tito">Sconfiggi tutti i nemici!</h2>
            <div class="container-photo">
                <img class="photo" src="../Foto/Foto main/enemy.webp" alt="">
            </div>
        </div>  
        <div>
            <h2 class="tito">Vinci il titolo di apex legend!</h2>
            <div class="container-photo">
                <img class="photo" src="../Foto/Foto main/vittoria.jpg" alt="">
            </div>
        </div>  
    </div>

    </main>

    <?php require("torna-su.php"); require("footer.php");?>
</body>
</html>