<?php
    if (isset($_POST["username"])) {$username = $_POST["username"];} else {$username = "";}
	if (isset($_POST["password"])) {$password = $_POST["password"];} else {$password = "";}
    if (isset($_POST["foto_profilo"])) {$foto_profilo= $_POST["foto_profilo"];} else {$foto_profilo = "";}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style-registrazione.css">
    <?php require("include.php") ?>
    <title>Apex-Accesso</title>
</head>
<body>
    <main>
        <div class="background">
            <img src="../Foto/Foto main/Caustic-trap.jpg" alt="">
        </div>

        <div class="panel-accedi">
            <h1 style="font-size:50px; font-family: 'Teko', sans-serif; padding: 25px 0 30px 0 ">Accedi</h1>
            <form action="" method="post">
                <table>
                    <tr><td><label for="username">Username: </label></td></tr>
                    <tr><td><input type="text" name="username" id="username" value="<?php echo $username ?>" required></td></tr>

                    <tr><td><label for="password">Password: </label></td></tr>
                    <tr><td><input type="password" name="password" id="password" required></td></tr>
                </table>
                <input type="submit" value="Invia" class="submit">
            </form>

            <?php
                if (isset($_POST["username"]) and isset($_POST["password"])) {
                    require("../data/connessione.php");
    
                    $myquery = "SELECT username, password 
                                FROM utenti
                                WHERE username='$username'
                                    AND password='$password'";
    
                    $ris = $conn->query($myquery) or die("<p>Query fallita! ".$conn->error."</p>");
    

                    if ($ris->num_rows == 0) {
                        echo "<p>Utente o password non trovati.</p>";
                        $conn->close();
                    } else {
                        session_start();
                        $_SESSION["username"] = $username;
    
                        $conn->close();
                        header("location: ../index.php");
                    }
                }
            ?>

            <div class="log"><hr><a href="registrazione.php">Non hai ancora un account?</a></div>
            
            <a href="../index.php" class="home_button"><img src="../Foto/Icons/home.png" alt=""></a>
        </div>

    </main>
    
    </div>

</body>

</html>