<?php 
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
    <title>Apex Legends</title>
    <link rel="stylesheet" href="../Css/battle-royale.css">
    <?php require("include.php") ?>
</head>

<body>
    
  <?php require("nav.php");?>  

  <div class="coverbr">

    <img src="../Foto/Foto main/sfondo br1.jpg" alt="" >

    <div class="coverbr__logo">
        <img  src="../Foto/Logos/Logo apex legends rosso.png" alt="">
    </div>

    <div class="coverbr__content">
        <h1 class="logo-text">Battle Royale</h1>
        <p class="logo-subtext"> Enormi mappe. 60 giocatori. L'anello continua a restringersi. Sarà la tua squadra a vincere?</p>
    </div>
  </div>
  
  <div class="divisorio"></div>


    <div class="sfondo-br">
      <div class="brcard">
        <img class="brcard__container" src="../Foto/Foto main/loot.jpg" alt="">
        <div style="display:flex; flex-direction:column;">
          <h2 class="card-title">Looting</h2>
          <p class="card-text">Prima di gettarsi dall'aereo è necessario scegliere in che punto dell'arena atterrare. Avrai la possibilità di trovare in giro per la mappa, per terra o nelle casse di rifornimento, il necessario per la battaglia</p>
        </div>
      </div>

      <div class="brcard">
        <img class="brcard__container" src="../Foto/Foto main/nemici.jpg" alt="">
        <div style="display:flex; flex-direction:column;">
          <h2 class="card-title">Nemici</h2>
          <p class="card-text">Sia in Duo che in Trio l'obiettivo è sempre lo stesso: essere gli ultimi in piedi. Quindi è necessario valutare quando ingaggiare i nemici!</p>
        </div>
      </div>

      <div class="brcard">
        <img class="brcard__container" src="../Foto/Foto main/foto-card1.jpg" alt="">
        <div style="display:flex; flex-direction:column;">
          <h2 class="card-title">Gioco di squadra</h2>
          <p class="card-text">La cooperazione nell'arena Apex è fondamentale, quindi anziché pushare come non mai da solo credendoti un pro player e morire in malo modo, è consigliato stare in gruppo con i propri compagni per evitare di essere presi alla sprovvista!</p>
        </div> 
      </div> 
    </div>
  

  <?php require("footer.php"); require("torna-su.php");?>
</body>
</html>