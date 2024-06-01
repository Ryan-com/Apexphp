    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Apex Legends</title>

        <link rel="shortcut icon" href="../Foto/Icons/Apex logo.png" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../Css/style.css">
        <link rel="stylesheet" href="../Css/style-leggende.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Teko:wght@300..700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://db.onlinewebfonts.com/c/f845acb18bd09864e4d77d93cedc1261?family=TT+Lakes+Regular" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
        <div class="divisorio">
            <div class="search-container__bar">
                <input type="text" placeholder="Search...">
                <div id="results" class="search"  ></div>
            </div>
        </div>

        <!-- Controllare come sistemare sta roba, dovrebbe essere dentro il legends background, pero quando restituisce il risultato, il risultato non si trova sul background -->
        <!-- <form class="search-container" method="post" id="search-form">
                <input type="text" id="input-ricerca" name="input-ricerca" class="search-input" placeholder="Cerca una leggenda...">
                <input type="submit" value="Cerca">
                <div id="results" class="results"></div>
        </form> -->

        
        
        <div class="legends-background">
            <div class="banners">
                <?php 
                require("../data/connessione.php");
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
                            //aggiorno il risultato
                            $('#results').html(response);
                            // Nascondo le carte
                            $('.banners').hide();
                        }
                    });
                });
            });
        </script>

    </body>

    <?php require("footer.php"); ?>
    </html>
