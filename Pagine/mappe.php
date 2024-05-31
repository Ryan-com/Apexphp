<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex Legends</title>

    <!-- Aggiungere solo questo alle pagine -->
    <link rel="shortcut icon" href="../Foto/Icons/Apex logo.png" />

    <!-- Sta roba serve per resettare tutte le proprietà css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/mappe-style.css">
    <!-- Stare attenti al percorso file -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/f845acb18bd09864e4d77d93cedc1261?family=TT+Lakes+Regular" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/f845acb18bd09864e4d77d93cedc1261?family=TT+Lakes+Regular" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    
  <div class="header">
    <div class="logo-menu">
        <a href="../index.html"> <img src="../Foto/Logos/apex-white-nav-logo.svg" alt=""> </a>
    </div>
    
    <ul class="menu">
        <li class="tendina"><a href=""  class="menu-text"> Informazioni <img src="../Foto/Icons/white-down-arrow.png" alt="" class="freccetta"></a>
            <ul class="tendina-info">
                <a href="https://www.ea.com/it-it/games/apex-legends" class="menu-subtext">Apex Legends</a>
                <a href="../Pagine/leggende.html" class="menu-subtext">Leggende</a>
            </ul>
        </li>
        
        <li class="tendina"> <a href="" class="menu-text"> Modalità <img src="../Foto/Icons/white-down-arrow.png" alt="" class="freccetta"></a>
            <ul class="tendina-info">
                <a href="../Pagine/battle-royale.html" class="menu-subtext">Battle Royale</a>
            </ul>
        </li>
        
        <li><a href="../Pagine/mappe.html" class="menu-text">Mappe</a> </li>
        <li> <a href="https://answers.ea.com/t5/Apex-Legends/ct-p/apex-legends-it?profile.language=it"  class="menu-text"> Community </a> </li>

    </ul>

    
    <!-- Call to action -->
    <div class="cta">
        <a href="https://www.ea.com/it-it/games/apex-legends/buy/pc" class="button button-text"> Scarica gratis </a>
    </div>

    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>

  </div>

  <div class="menu-panel">
      <div class="logo-menu">
          <a href="../index.html"> <img src="../Foto/Logos/apex-white-nav-logo.svg" alt=""> </a>
      </div>
      <ul>
          <h3 class="menu-text">Informazioni</h3>
          <div class="subtext">
              <li class="menu-subtext"> <a href="https://www.ea.com/it-it/games/apex-legends" class="menu-subtext"> <img src="../Foto/Icons/White-dot.png" alt="">Apex Legends </a></li>
              <li class="menu-subtext"> <a href="../Pagine/leggende.html" class="menu-subtext"> <img src="../Foto/Icons/White-dot.png" alt="">Leggende</a></li>
          </div>
          
          <h3 class="menu-text"> <a href="../Pagine/mappe.html" class="menu-text"> Mappe</a></h3>
          <h3 class="menu-text">Modalità</h3>
          <div class="subtext">
              <li class="menu-subtext"> <a href="../Pagine/battle-royale.html" class="menu-subtext"> <img src="../Foto/Icons/White-dot.png" alt="">Battle Royale</a></li>
          </div>

          <h3 class="menu-text"> <a href="https://answers.ea.com/t5/Apex-Legends/ct-p/apex-legends-it?profile.language=it"  class="menu-text"> Community </a></h3>
          
      </ul>
  </div>


    <div>
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script type="text/javascript">
          $( document ).ready(function() {

          $(".box").addClass("box--hide")
          /*Open Panel*/
          $(".hamburger").on('click', function(){
              $(".menu-panel").toggleClass("menu-panel--open");
          });

      });
      </script>

      <div>
        <h1 class="tit">Mappe</h1>
        <p class="descriziones">La modalità Battle Royale dispone di 5 mappe molto estese con rotazione continua ogni 24 ore per concedere ai nostri player varietà.</p>
      </div>
      
      <div class="carousel">
        <div class="link">
          <a class="abs" href="#Canyon-dei-re">Canyon dei re</a>
          <a class="abs" href="#Confini-del-mondo">Confini del mondo</a>
          <a class="abs" href="#Luna-distrutta">Luna distrutta</a>
          <a class="abs" href="#Olympus">Olympus</a>
          <a class="abs" href="#Passo-della-tempesta">Passo della tempesta</a>
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
      
    <div class="sfondo__tot">
        <div>
          <a class="ghost" name="Canyon-dei-re"><br></a>
        <h2 class="tit">Canyon dei Re</h2>
        <div class="container-mappe">
          <img class="mappa" src="../Foto/Mappe/Canyon-dei-re.jpg" alt="">
          <p class="descriziones">Un tempo semplice insediamento su Solace, l'isola conosciuta come Canyon dei Re prosperò grazie all'IMC, che la scelse come luogo di ricerca e sviluppo. Ospitava una base aerea, un impianto di depurazione dell'acqua e numerose altre strutture a supporto delle operazioni IMC. Per scaricare la tensione, i soldati dell'IMC di stanza partecipavano a combattimenti in stile gladiatorio in un'area che chiamavano "Arena": erano a tutti gli effetti gli antenati degli Apex Games. Ma all'oscuro di tutti, Canyon dei Re era anche sede di strutture sotterranee che nascondevano le più vertiginose operazioni dell'IMC, come un progetto top secret sulla tecnologia fasica e un programma volto alla creazione di un esercito di simulacri controllato da un'unica mente.</p>
        </div>
      </div>
      <div>
          <a class="ghost" name="Confini-del-mondo"><br></a>
          <h2 class="tit">Confini del Mondo</h2>
          <div class="container-mappe">
              <img class="mappa" src="../Foto/Mappe/Confini-del-mondo.jpg" alt="">
              <p class="descriziones">Pianeta inospitale caratterizzato da una forte attività vulcanica. Talos fu considerato inabitabile finché un composto minerale raro non fu trovato sotto la sua superficie. La IMC costruì delle torri termoregolatrici per raffreddare i flussi di lava su Talos e permettere l'estrazione di risorse. La struttura che ospitava le torri venne chiamata ottimisticamente New Dawn ("Nuova Aurora"), e la città di Confini del Mondo si sviluppò intorno a essa. In seguito, un'esplosione in una delle torri congelò fatalmente l'area circostante. Confini del Mondo fu abbandonata, salvo per una piccola comunità di cacciatori che un tempo disdegnava la tecnologia (guidata dalla leggenda locale Bloodhound).</p>
            </div>
          </div>
          <div>
            <a class="ghost" name="Luna-distrutta"><br></a>
            <h2 class="tit">Luna distrutta</h2>
            <div class="container-mappe">
              <img class="mappa" src="../Foto/Mappe/Luna-distrutta.jpg" alt="">
              <p class="descriziones">Prima che una meteora e una leggenda ne cambiassero le sorti, Cleo illuminava i cieli di Boreas. Gli abitanti del pianeta ancora non lo sapevano, ma oltre a squarciare la luna e a distruggerne la superficie, la meteora li avrebbe condotti sulla via della distruzione. Fu solo quando i ricercatori scoprirono una connessione tra la luna e i sempre più frequenti cataclismi di Boreas che le nazioni del pianeta unirono le forze per guarire Cleo, dando vita al progetto Hope. Così, quello che fino ad allora era stato un satellite disabitato divenne una colonia popolata da ricercatori, ingegneri e costruttori. Pian piano gli squarci furono richiusi, le rocce celesti divennero campi fioriti e nacquero nuove tecnologie.</p>
          </div>
      </div>
      <div>
          <a class="ghost" name="Olympus"><br></a>
          <h2 class="tit">Olympus</h2>
          <div class="container-mappe">
            <img class="mappa" src="../Foto/Mappe/Olympus.png" alt="">
              <p class="descriziones">Costruita su un sogno, un tempo Olympus era un'utopia fluttuante tra le nuvole che si estendono su Psamathe. Qui le menti più brillanti delle Terre Straniere erano solite riunirsi per scambiarsi idee e dare vita a incredibili scoperte scientifiche e artistiche. Tuttavia, un incidente in un laboratorio di ricerca sperimentale generò una gigantesca bolla di energia fasica, costringendo gli abitanti ad abbandonare la città. Con l'aiuto della Commissione dei mercenari, la Hammond Robotics trasformò il luogo in una nuova arena per gli Apex Games.</p>
            </div>
          </div>
      <div>
        <a class="ghost" name="Passo-della-tempesta"><br></a>
        <h2 class="tit">Passo della Tempesta</h2>
        <div class="container-mappe">
          <img class="mappa" src="../Foto/Mappe/Passo-della-tempesta.jpg" alt="">
          <p class="descriziones">Quest'isola non è sempre stata così deserta. Splendida e ricca di risorse, Passo della Tempesta fu inizialmente scelta come località per le prime spedizioni dell'IMC su Gaea. Tuttavia, non appena si scoprì che l'isola era costantemente devastata da intense tempeste tropicali, i team dell'IMC fondarono un insediamento permanente nella vicina Suotamo. Per far fronte al crescente fabbisogno energetico della città, usarono Passo della Tempesta come base per costruire una serie di condensatori.</p>
        </div>
      </div>
    </div>

    <!-- Da copiare ovunque -->
    <button id="torna-su" onclick="scrollToTop()"> <img src="../Foto/Icons/" alt=""> <img src="../Foto/Icons/white-down-arrow.png" alt=""></button>
    <script>
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("torna-su").style.display = "block";
            } else {
            document.getElementById("torna-su").style.display = "none";
            }
        }
        
        // Animazione a scorrimento
        function scrollToTop() {
            const scrollToTop = () => {
                const c = document.documentElement.scrollTop || document.body.scrollTop;
                if (c > 0) {
                window.requestAnimationFrame(scrollToTop);
                window.scrollTo(0, c - c / 8);
                }
        };
        scrollToTop();
        }
    
    </script>
    
    <footer class="footer">
      <div class="grid">
          <div class="col">
              <h4 class="normal-text tw"> Chi siamo </h4>
              <p class="tw"> Brambilla Federico e Crespi Ryan sono due informatici di alto livello famosi per il concepimento di siti obbrobriosi. Dopo 2 ore di esperienza sul campo hanno deciso di cimentarsi nella creazione del migliore sito dedicato ad Apex Legends annientando la poca dignità restante alla nota azienda videoludica EA entertainment.  </p>
          </div>
          
          <div class="col">
              <h4 class="normal-text tw"> Brambilla Federico</h4>
              <p  class="tw"> Email commerciale: salve.prof@come.sta.com</p>

              <h4 class="normal-text tw"> Crespi Ryan </h4>
              <p  class="tw"> Email commerciale: laprego.cimetta@unvoto.alto.com</p>
          </div>
      </div>
  </footer>

    
  </body>
</html>