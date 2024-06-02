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
        <form class="search-container__bar" method="post" id="search-form">
            <input type="text" id="input-ricerca" name="input-ricerca" placeholder="Search...">
            <div id="results" class="search"  ></div>
        </form>
    </div>

    <div class="legends-background">
        <div class="banners">
            <?php 
                require("../data/connessione.php");
                if(isset($_POST["input_ricerca"])){
                    $nome = $_POST["input_ricerca"];
                    $sql = "SELECT nome_leggenda, banner, professione
                            FROM leggende
                            WHERE nome_leggenda LIKE '%$nome%'";
            
                    $ris = $conn->query($sql) or die("Query fallita!");
            
                    foreach($ris as $riga){
                        $nome_leggenda = $riga["nome_leggenda"];
                        $banner = $riga["banner"];
                        $professione = $riga["professione"];
            
                        echo <<<EOD
                            <div class="">
                                <div class="banners">
                                    <a href="personaggio.php?nome_leggenda=$nome_leggenda">
                                        <div class="banner">
                                            <img class="banner__img" src="../Foto/legends-banner/$banner" alt="$banner">
                                            <div class="banner__copy">
                                                <h3>$nome_leggenda</h3>
                                                <p>$professione</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        EOD;
                    }
                } else if(!isset($_POST["input_ricerca"])) {
                    $sql = "SELECT nome_leggenda, banner, professione FROM leggende";
                    $ris = $conn->query($sql) or die("Query fallita!");
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
                } 
                else{
                    echo "<p>Nessun risultato trovato<?p>";
                }
            ?>
        </div>
    </div>
    <?php require("torna-su.php"); ?>

    <script>
        $(document).ready(function() {
            $('#search-form').on('submit', function(e) {
                e.preventDefault();  // Prevent the default form submission
                var searchQuery = $('#input-ricerca').val();
                
                $.ajax({
                    type: 'POST',
                    url: 'ricerca.php',  // The server-side script to handle the search query
                    data: { input_ricerca: searchQuery },
                    success: function(response) {
                        // Update the results div with the search results
                        $('#results').html(response);
                        // Hide the original list of legends
                        $('.banners').hide();
                    }
                });
            });
        });
    </script>

</body>

<?php require("footer.php"); ?>
</html>
