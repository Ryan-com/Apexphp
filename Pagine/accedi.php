<?php
    if(isset($_POST["username"])) {$username = $_POST["username"];} else {$username = "";}
    if(isset($_POST["password"])) {$password = $_POST["password"];} else {$password = "";}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex-registrazione</title>
    <?php require("include.php") ?>
</head>

<body>
    <?php require("nav.php");?>
    <main class = "container">
        <div class="cover-registrazione">
            <div class="cover-registrazione__background">
                <img src="../Foto/Foto main/registrazione-sfondo.jpg!d" alt="">
                <div class="cover-registrazione__content">
                    <h1 style="" class="big-text">Accedi</h1>
                    <p style="">Soldato prima di proseguire identificati</p>
                    <form action="" method="post">
                        <table style="">
                            <tr>
                                <td><label for="username">Username: </label></td>
                                <td><input type="text" name="username" id="username" value="<?php echo $username ?>" required></td>
                                
                            </tr>
                            <tr>
                                <td><label for="password">Password: </label></td>
                                <td><input type="password" name="password" id="password" required></td>
                            </tr>
                        </table>
                        <input type="submit" value="Invia">
                    </form>

                    <!-- <form method="post" action="">
                        <input type="hidden" id="foto" name="foto">
                        <button type="submit">Conferma Selezione</button>
                    </form> -->
                </div>
                <p>
                    <?php
                    if(isset($_POST["username"]) and isset($_POST["password"])) {
                        require("../data/connessione.php");
                        
                        $myquery = "SELECT username, password
                                    FROM utenti 
                                    WHERE username='$username'
                                        AND password='$password'";
                        $ris = $conn->query($myquery) or die("<p>Query fallita!</p>");
                        if ($ris->num_rows == 0) {
                            echo "Soldato non riusciamo e identificarti, ripeti le tue generalità al sergente o registrati al corso";
                            $conn->close();
                        } else {
                            session_start();
                            $_SESSION["username"]=$username;
                            $conn->close();
                            echo "Bentornato soldato $username <br>sarai ridirezionato alla home tra 5 secondi.";
                            header("Refresh: 5; URL=home.php");
                        }
                        
                    }
                    ?>
                </p>
            </div>
        </div>
    </main>

</body>
<?php require('footer.php');?>	
</html>