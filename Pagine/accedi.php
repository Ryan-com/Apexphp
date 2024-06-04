<?php
    if (isset($_GET["username"])) {$username = $_GET["username"];} else {$username = "";}
	if (isset($_GET["password"])) {$password = $_GET["password"];} else {$password = "";}
    if(isset($_GET["conferma"])) $conferma = $_GET["conferma"];  else $conferma = "";
    if(isset($_GET["nome"])) $nome = $_GET["nome"];  else $nome = "";
    if(isset($_GET["cognome"])) $cognome = $_GET["cognome"];  else $cognome = "";
    if(isset($_GET["email"])) $email = $_GET["email"];  else $email = "";

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style-registrazione.css">
    <title>Biblioteca-Registrazione</title>
</head>
<body>
    <main>
        <div class="background">
            <img src="../Foto/Foto main/registrazione-sfondo.jpg!d" alt="">
        </div>

        <div class="panel-accedi">
            <h1>Accedi</h1>
            <form action="" method="get">
                <table class="tab_input tab_registrazione">
                    <tr><td><label for="username">Username: </label></td></tr>
                    <tr>
                        <td><input type="text" name="username" id="username" value="<?php echo $username ?>" required></td>
                        
                    </tr>
                    <tr>
                        <td><label for="password">Password: </label></td>
                        <td><input type="password" name="password" id="password" required></td>
                    </tr>
                    <tr>
                </table>
                <input type="submit" value="Invia" class="submit">
            </form>

            <p>
                <?php
                    if(isset($_GET["username"]) and isset($_GET["password"])) {
                        if ($_GET["username"] == "" or $_GET["password"] == "") {
                            echo "username e password non possono essere vuoti!";
                        } else {
                            require("../data/connessione_db.php");

                            $myquery = "SELECT username 
                                    FROM user
                                    WHERE username='$username'";

                            $ris = $conn->query($myquery) or die("<p>Query fallita!</p>");
                            if ($ris->num_rows > 0) {
                                echo "Questo username è già stato usato";
                            } else {

                                $myquery = "INSERT INTO user (username, password, nome, cognome, email)
                                            VALUES ('$username', '$password', '$nome', '$cognome','$email')";
                                if ($conn->query($myquery) === true) {
                                    session_start();
                                    $_SESSION["username"]=$username;
                                    
                                    $conn->close();

                                    echo "Accesso eseguito correttamente!<br>sarai ridirezionato alla home tra 3 secondi...";
                                    header('Refresh: 3; URL=../index.php');

                                } else {
                                    echo "Non è stato possibile accedere per il seguente motivo" . $conn->error;
                                }
                            }
                        }
                    }
                ?>
            </p>

            <div class="log"><hr><a href="registrazione.php">Non hai ancora un account?</a></div>
            
            <a href="../index.php" class="home_button"><img src="../Foto/Icons/home.png" alt=""></a>
        </div>

    </main>
    
    </div>

</body>

</html>