<?php
    if (isset($_GET["input-ricerca"])) {
        $input_ricerca = $_GET["input-ricerca"]; 
    }
    else {
        $input_ricerca="";
    }
    echo("<script>console.log('PHP: " . $input_ricerca . "');</script>");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex Legends</title>
    <link rel="stylesheet" href="../Css/style-leggende.css">
    <?php require("include.php") ?>

</head>
<body>
    <?php require("nav.php");?>
    <main class="container">
        <div class="cover2">
            <div class="cover2__background">
                <img src="../Foto/Foto main/Leggende.jpg" alt="">
                <div class="cover2__logo">
                    <img src="../Foto/Logos/apex-hero-medium-logo-light.svg" alt="">
                </div>
                <div class="cover2__content">
                    <h1 class="logo-text tw">Leggende</h1>
                    <p class="logo-subtext">Ecco le leggende del mondo Apex! Chi vincerà?</p>
                </div>
            </div>
        </div>
    </main>
    
    <div class="divisorio-ricerca">
        <form class="search-container__bar" method="get" id="search-form">
            <input type="text" id="input-ricerca" name="input-ricerca" placeholder="Search...">
            <div id="results" class="search"></div>
            <input type="submit" hidden />
        </form>

    </div>

    <!-- <?php
        echo "<p>NOME PERSONAGGIO: $input_ricerca - </p>";
    ?> -->

    <div class="legends-background">
        <div class="banners">
            <?php 
                require("../data/connessione.php");

                $sql = "SELECT nome_leggenda, banner, professione
                        FROM leggende
                        WHERE nome_leggenda LIKE '$input_ricerca%'";
        
                $ris = $conn->query($sql) or die("Query fallita!");


                if($ris->num_rows > 0){
                    // $nome = $_GET["input-ricerca"];
            
                    foreach($ris as $riga){
                        $nome_leggenda = $riga["nome_leggenda"];
                        $banner = $riga["banner"];
                        $professione = $riga["professione"];
            
                        echo <<<EOD
                            <a href="personaggio.php?nome_leggenda=$nome_leggenda">
                                <div class="banner">
                                    <img class="banner__img" src="../Foto/legends-banner/$banner" alt="$banner">
                                    <div class="banner__copy">
                                        <h3>$nome_leggenda</h3>
                                        <p>$professione</p>
                                    </div>
                                </div>
                            </a>
                        EOD;
                    }
                } else{
                    echo "<p>Nessun risultato trovato<?p>";
                }
            ?>
        </div>
    </div>
    <?php require("torna-su.php"); ?>

    <script>
        window.addEventListener('beforeunload', function() {
            localStorage.setItem('scrollPosition', window.scrollY);
        });

        window.addEventListener('load', function() {
            const scrollPosition = localStorage.getItem('scrollPosition');
            if (scrollPosition) {
                window.scrollTo(0, scrollPosition);
            }
        });
    </script>

</body>

<?php require("footer.php"); ?>
</html>
