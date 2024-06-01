<!-- Problema -->

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
    <link rel="stylesheet" href="../Css/style.css">
    <title>Apex-registrazione</title>
</head>
<body>
    <?php
        require("nav.php");
    ?>
    <div>
        <h1>Registrazione</h1>
        <p style="display:flex; text-align:center;">Immergiti subito nel modo di Apex, ma prima unisciti alla nostra squadra</p>
        <form action="" method="post">
            <table>
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

        <div class="carousel">
            <input type="radio" name="carousel" id="image1" checked>
            <input type="radio" name="carousel" id="image2">
            <input type="radio" name="carousel" id="image3">

            <div class="carousel-images">
                <label for="foto1" class="carousel-image">
                    <img src="../Foto/Icons/user.png" alt="">
                </label>
                <label for="foto2" class="carousel-image">
                    <img src="../Foto/Icons/user.png" alt="">
                </label>
                <label for="foto3" class="carousel-image">
                    <img src="../Foto/Icons/Apex logo.png" alt="">
                </label>
            </div>
        </div>
        <form method="post" action="">
            <input type="hidden" id="foto" name="foto">
            <button type="submit">Conferma Selezione</button>
        </form>
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
    <?php 
        require('footer.php');
    ?>	
</body>
</html>