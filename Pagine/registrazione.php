<?php
    session_start();

    if (isset($_POST["username"])) $username = $_POST["username"]; else $username = "";
    if (isset($_POST["password"])) $password = $_POST["password"]; else $password = "";
    if (isset($_POST["conferma"])) $conferma = $_POST["conferma"];  else $conferma = "";
    if (isset($_POST["email"])) $email = $_POST["email"];  else $email = "";
    if (isset($_POST["foto_profilo"])) $foto_profilo = $_POST["foto_profilo"];  else $foto_profilo = "";

    $error_message = '';

    if(isset($_POST["username"]) && isset($_POST["password"])) {
        if ($_POST["username"] == "" || $_POST["password"] == "") {
            $error_message = "username e password non possono essere vuoti!";
        } elseif ($_POST["password"] != $_POST["conferma"]){
            $error_message = "Le password inserite non corrispondono";
        } else {
            require("../data/connessione.php");

            $myquery = "SELECT username 
                        FROM utenti
                        WHERE username='$username'";

            $ris = $conn->query($myquery) or die("<p>Query fallita!</p>");
            if ($ris->num_rows > 0) {
                $error_message = "Questo username è già stato usato";
            } else {
                $myquery = "INSERT INTO utenti (username, password, email, foto_profilo)
                            VALUES ('$username', '$password','$email', '$foto_profilo')";

                if ($conn->query($myquery) === true) {
                    $_SESSION["username"] = $username;
                    $_SESSION["foto_profilo"] = $foto_profilo;
                    
                    // echo " <p>Registrazione effettuata con successo!<br>sarai ridirezionato alla home tra 5 secondi.</p>";
                    // header('Refresh: 1; URL=home.php');
                    header("location:home.php");
                    $conn->close();
                } else {
                    $error_message = "Non è stato possibile effettuare la registrazione per il seguente motivo: " . $conn->error;
                }
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Controlla se è stato inviato un valore per l'immagine
        if(isset($_POST["foto_profilo"])) {
            // Recupera il valore del link dell'immagine selezionato
            $foto_profilo = $_POST["foto_profilo"];
            // Puoi fare qualcosa con il link dell'immagine, come salvarlo in una variabile
        }
    }
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style-registrazione.css">
    <?php require("include.php") ?>
    <title>Apex-Registrazione</title>
</head>
<body>
    <main>
        <div class="background">
            <img src="../Foto/Foto main/Caustic-trap.jpg" alt="">
        </div>

        <div class="panel">
            <a href="../index.php" class="home_button"><img src="../Foto/Icons/home.png" alt=""></a>
            <a href="../index.php" class="home_button"><img src="../Foto/Icons/home.png" alt=""></a>
            <h1 style="font-size:50px ; font-family: 'Teko', sans-serif; padding: 15px 0 35px 0 ">Registrazione</h1>
            <form action="" method="post">
                <table >
                    <tr><td><label for="email">Email: </label></td></tr>
                    <tr><td><input type="text" name="email" id="email" <?php echo "value='$email'"; ?> required></td></tr>

                    <tr><td><label for="username">Username: </label></td></tr>
                    <tr><td><input type="text" name="username" id="username" value="<?php echo $username ?>" required></td></tr>
                    
                    <tr><td><label for="password">Password: </label></td></tr>
                    <tr><td><input type="password" name="password" id="password" required></td></tr>
                    
                    <tr><td><label for="conferma">Conferma password: </label></td></tr>
                    <tr><td><input type="password" name="conferma" id="conferma" required ></td></tr>
                    
                </table>
                
                <h3 style="font-size:28px ; font-family: 'Teko', sans-serif; text-align: left; padding: 15px 0" >Scegli la tua icona personale!</h3>
                
                <table class="foto">
                    <ul>
                        <li>
                            <input type="radio" name="foto_profilo" id="cb1" value="../Foto/Foto-profilo/Bloodhound.png">
                            <label for="cb1"><img src="../Foto/Foto-profilo/Bloodhound.png" alt="cb1"></label>
                        </li>
                        <li>
                            <input type="radio" name="foto_profilo" id="cb2" value="../Foto/Foto-profilo/Seer.webp">
                            <label for="cb2"><img src="../Foto/Foto-profilo/Seer.webp" alt="cb2"/></label>
                        </li>
                        <li>
                            <input type="radio" name="foto_profilo" id="cb3" value="../Foto/Foto-profilo/Lifeline.webp">
                            <label for="cb3"><img src="../Foto/Foto-profilo/Lifeline.webp" alt="cb3"/></label>
                        </li>
                        <li>
                            <input type="radio" name="foto_profilo" id="cb4" value="../Foto/Foto-profilo/Gibraltar.webp">
                            <label for="cb4"><img src="../Foto/Foto-profilo/Gibraltar.webp"  alt="cb4"/></label>
                        </li>
                        <li>
                            <input type="radio" name="foto_profilo" id="cb5" value="../Foto/Foto-profilo/Octane.webp">
                            <label for="cb5"><img src="../Foto/Foto-profilo/Octane.webp" alt="cb5"/></label>
                        </li>
                        <li>
                            <input type="radio" name="foto_profilo" id="cb6" value="../Foto/Foto-profilo/Mirage.webp">
                            <label for="cb6"><img src="../Foto/Foto-profilo/Mirage.webp" alt="cb6"/></label>
                        </li>
                    </ul>
                </table>
                <input type="submit" value="Invia" class="submit">
            </form>

            <?php
                if (!empty($error_message)) {
                    echo "<p>$error_message</p>";
                }
            ?>
            <div class="log"><a href="accedi.php">Hai già un account?</a></div>
        </div>
    </main>

</body>
</html>
