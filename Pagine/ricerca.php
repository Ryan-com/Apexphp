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
    } else {
        echo "Nessun risultato trovato.";
    }
?>
