<?php 
  if(isset($_POST["nome_arena"])) $nome_arena=$_POST["nome_arena"]; else $nome_arena="";
  if(isset($_POST["foto_arena"])) $foto_arena=$_POST["foto_arena"]; else $foto_arena="";
  if(isset($_POST["descrizione_arena"])) $descrizione_arena=$_POST["descrizione_arena"]; else $descrizione_arena="";
  session_start();
  require("../data/connessione.php");
  if(!isset($_SESSION["username"]) or !isset($_SESSION["foto_profilo"])){
      $username = "";
      $foto_profilo="";
  }
  $username = $_SESSION["username"];
  
  $sql = "SELECT foto_profilo
          FROM utenti
          WHERE username='$username'";
  $ris = $conn->query($sql) or die("<p>Query fallita!</p>");
  $riga = $ris->fetch_assoc();
  $foto_profilo = $riga["foto_profilo"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mappe-Apex Legends</title>

    <link rel="stylesheet" href="../Css/mappe-style.css">
    <?php require("include.php") ?>
</head>

<body>
  <?php require("nav.php");?>

    <div class="top">
      <h1 style="font-size: 6vw; font-family: 'Teko'; font-weight: 510; color: #f3f3f3; text-align:center; ">Mappe</h1>
      <p style="font-size: 25px; font-family: 'TT lakes regular', sans-serif; color: #f3f3f3; text-align:center; padding-top:20px; padding-bottom: 50px">La modalità Battle Royale dispone di 5 mappe molto estese con rotazione continua ogni 24 ore per concedere ai nostri player varietà.</p>
    </div>
    
    <div class="carousel">
      <div class="link">
        <a class="abs" href="#Canyon dei Re">Canyon dei re</a>
        <a class="abs" href="#Confini del Mondo">Confini del mondo</a>
        <a class="abs" href="#Luna distrutta">Luna distrutta</a>
        <a class="abs" href="#Olympus">Olympus</a>
        <a class="abs" href="#Passo della Tempesta">Passo della tempesta</a>
      </div>
      <ul class="slides">
          <input type="radio" name="radio-buttons" id="img-1" checked />
          <li class="slide-container">
            <div class="slide-image">
              <img src="../Foto/Mappe/Canyon-dei-re-n.png">
            </div>
            <div class="carousel-controls">
              <label for="img-5" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-2" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
          <input type="radio" name="radio-buttons" id="img-2" />
          <li class="slide-container">
            <div class="slide-image">
              <img src="../Foto/Mappe/Confini-del-Mondo-n.png">
            </div>
            <div class="carousel-controls">
              <label for="img-1" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-3" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
          <input type="radio" name="radio-buttons" id="img-3" />
          <li class="slide-container">
            <div class="slide-image">
              <img src="../Foto/Mappe/Luna-distrutta-n.png">
            </div>
            <div class="carousel-controls">
              <label for="img-2" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-4" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
          <input type="radio" name="radio-buttons" id="img-4" />
          <li class="slide-container">
            <div class="slide-image">
              <img src="../Foto/Mappe/Olympus-n.png">
            </div>
            <div class="carousel-controls">
              <label for="img-3" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-5" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
          <input type="radio" name="radio-buttons" id="img-5" />
          <li class="slide-container">
            <div class="slide-image">
              <img src="../Foto/Mappe/Passo-della-tempesta-n.png">
            </div>
            <div class="carousel-controls">
              <label for="img-4" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-1" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
          <div class="carousel-dots">
            <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
            <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
            <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
            <label for="img-4" class="carousel-dot" id="img-dot-4"></label>
            <label for="img-5" class="carousel-dot" id="img-dot-5"></label>
          </div>
        </ul>
      </div>
    </div>
    
    <main class="sfondo">
      <?php 
          require("../data/connessione.php");
          $sql="SELECT nome_arena, foto_arena, descrizione_arena
                FROM arene";
          $ris = $conn->query($sql) or die("Query fallita!");
          if ($ris->num_rows == 0) {
            die ("Arena non trovata!");
          }else{
            foreach($ris as $row) {
              $nome_arena = $row["nome_arena"];
              $foto_arena = $row["foto_arena"];
              $descrizione_arena = $row["descrizione_arena"];
              echo <<<EOD
                <div class="nome_arena">
                    <h2 id="$nome_arena">$nome_arena</h2>
                </div>
                <div class="info">
                  <img class="mappa" src="$foto_arena" alt="$foto_arena">
                  <p class="descrizione">$descrizione_arena</p>
                </div>
              EOD;
            }
          }
      ?>
    </main>
    <?php require("footer.php"); require("torna-su.php");?>
  </body>
</html>