<?php
    if(isset($_POST["username"])) {$username = $_POST["username"];} else {$username = "";}
    if(isset($_POST["password"])) {$password = $_POST["password"];} else {$password = "";}
    if(isset($_POST["conferma"])) $conferma = $_POST["conferma"];  else $conferma = "";
    if(isset($_POST["nome"])) $nome = $_POST["nome"];  else $nome = "";
    if(isset($_POST["cognome"])) $cognome = $_POST["cognome"];  else $cognome = "";
    if(isset($_POST["email"])) $email = $_POST["email"];  else $email = "";
    if(isset($_POST["telefono"])) $telefono = $_POST["telefono"];  else $telefono = "";
    if(isset($_POST["paese"])) $paese = $_POST["paese"];  else $paese = "";
    if(isset($_POST["foto"])) $foto = $_POST["foto"];  else $foto = "";
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
                    <h1 style="margin: auto;" class="big-text">Registrazione</h1>
                    <p style="margin: auto;">Immergiti subito nel modo di Apex, ma prima unisciti alla nostra squadra</p>
                    <form action="" method="post">
                        <table style="margin: auto;">
                            <tr>
                                <td><label for="username">Username: </label></td>
                                <td><input type="text" name="username" id="username" value="<?php echo $username ?>" required></td>
                                
                            </tr>
                            <tr>
                                <td><label for="password">Password: </label></td>
                                <td><input type="password" name="password" id="password" required></td>
                            </tr>
                            <tr>
                                <td><label for="conferma">Conferma password: </label></td>
                                <td><input type="password" name="conferma" id="conferma" required></td>
                            </tr>
                            <tr>
                                <td><label for="nome">Nome: </label></td>
                                <td><input type="text" name="nome" id="nome" <?php echo "value = '$nome'" ?>></td>
                            </tr>
                            <tr>
                                <td><label for="cognome">Cognome: </label></td>
                                <td><input type="text" name="cognome" id="cognome" <?php echo "value = '$cognome'" ?>></td>
                            </tr>
                            <tr>
                                <td><label for="email">Email: </label></td>
                                <td><input type="text" name="email" id="email" <?php echo "value = '$email'" ?>></td>
                            </tr>
                            <tr>
                                <td><label for="telefono">Telefono: </label></td>
                                <td><input type="text" name="telefono" id="telefono" <?php echo "value = '$telefono'" ?>></td>
                            </tr>
                            <tr>
                                <td><label for="paese">Paese: </label></td>
                                <td><input type="text" name="paese" id="paese" <?php echo "value = '$paese'" ?>></td>
                            </tr>
                        </table>
                        <input type="submit" value="Invia">
                    </form>
                    <a href="accedi.php">Sei già registrato? Accedi qui</a>
                </div>
                <p>
                    <?php
                    if(isset($_POST["username"]) and isset($_POST["password"])) {
                        if ($username == "" or $password == "") {
                            echo "username e password non possono essere vuoti!";
                        } elseif ($password != $conferma){
                            echo "<p>Le password inserite non corrispondono</p>";
                        } else {
                            require("../data/connessione.php");
                            
                            $myquery = "SELECT username 
                                        FROM utenti 
                                        WHERE username='$username'";

                            $ris = $conn->query($myquery) or die("<p>Query fallita!</p>");
                            if ($ris->num_rows > 0) {
                                echo "Questo username è già stato usato";
                            } else {
                                
                                $myquery = "INSERT INTO utenti (username, password, nome, cognome, email, telefono, paese)
                                                                                VALUES ('$username', '$password', '$nome', '$cognome','$email','$telefono','$paese')";

                                if ($conn->query($myquery) === true) {
                                    // session_start();
                                    $_SESSION["username"]=$username;
                                    
                                    $conn->close();
                                    
                                    echo "Registrazione effettuata con successo!<br>sarai ridirezionato alla home tra 5 secondi.";
                                    header('Refresh: 5; URL=../index.php');
                                    
                                } else {
                                    echo "Non è stato possibile effettuare la registrazione per il seguente motivo: " . $conn->error;
                                }
                            }
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