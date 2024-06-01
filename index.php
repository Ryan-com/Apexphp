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
    <link rel="shortcut icon" href="Foto/Icons/Apex logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="Css/style.css">
    <!-- Stare attenti al percorso file -->
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/f845acb18bd09864e4d77d93cedc1261?family=TT+Lakes+Regular" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="main1">
    
    <?php require("Pagine/nav.php"); ?>

    <main class="container">

        <?php require("pagine/hamburger.php");?>


        <div class="cover">
            
            <div class="cover__logo">
                <img  src="Foto/Logos/apex-hero-medium-logo-light.svg" alt="">
            </div>
            
            <div class="cover__content">
                <h2 class="sublogo-text tw"> Lanciati nella mischia!</h2>
            </div>
            
            <video width="320" height="240" autoplay muted loop class="video-class">
                <source src="Foto/Logos/Apex Legends_ Breakout Launch Trailer.mp4" type="video/mp4">
            </video>
        </div>

        <div class="divisorio"></div>

        <div class="sfondo">
            
            <div>
                <h2 class="tito">Scegli dove atterrare!</h2>
            <div class="container-photo">
                <img class="photo" src="Foto/Foto main/luoghi.jpg" alt="">
            </div>
        </div>  
        <div>
            <h2 class="tito">Armati fino ai denti!</h2>
            <div class="container-photo">
                <img class="photo" src="Foto/Foto main/armi.jpg" alt="">
            </div>
        </div>  
        <div>
            <h2 class="tito">Sconfiggi tutti i nemici!</h2>
            <div class="container-photo">
                <img class="photo" src="Foto/Foto main/enemy.webp" alt="">
            </div>
        </div>  
        <div>
            <h2 class="tito">Vinci il titolo di apex legend!</h2>
            <div class="container-photo">
                <img class="photo" src="Foto/Foto main/vittoria.jpg" alt="">
            </div>
        </div>  
    </div>

    </main>

    <?php require("pagine/torna-su.php"); require("pagine/footer.php");?>
</body>
</html>