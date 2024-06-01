<?php

    session_start();
    if(basename($_SERVER["PHP_SELF"] = "index.php")){
        echo <<<EOD
            <div class="header">
            <div class="logo-menu">
                <a href="index.php"> <img src="Foto/Logos/apex-white-nav-logo.svg" alt=""> </a>
            </div>
            
            <ul class="menu">
                <li class="tendina"><a href="#"  class="menu-text"> Informazioni <img src="Foto/Icons/white-down-arrow.png" alt="" class="freccetta"></a>
                    <ul class="tendina-info">
                        <a href="https://www.ea.com/it-it/games/apex-legends" class="menu-subtext">Apex Legends</a>
                        <a href="Pagine/leggende.php" class="menu-subtext">Leggende</a>
                    </ul>
                </li>
                
                <li class="tendina"> <a href="" class="menu-text"> Modalità <img src="Foto/Icons/white-down-arrow.png" alt="" class="freccetta"></a>
                    <ul class="tendina-info">
                        <a href="Pagine/battle-royale.php" class="menu-subtext">Battle Royale</a>
                    </ul>
                </li>
                
                <li><a href="Pagine/mappe.php" class="menu-text">Mappe</a> </li>
                <li><a href="https://answers.ea.com/t5/Apex-Legends/ct-p/apex-legends-it?profile.language=it"  class="menu-text"> Community </a> </li>
            </ul>
        
            
            <!-- Call to action -->
            <div class="cta">
                <a href="https://www.ea.com/it-it/games/apex-legends/buy/pc" class="button button-text"> Scarica gratis </a>
            </div>
        
            <div class="logo-menu">
                <a href="Pagine/registrazione.php"> <img src="Foto/Icons/user.png" alt="user.png"> </a>
            </div>
        
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        
            
            </div>
            
            <div class="menu-panel">
                <div class="logo-menu">
                    <a href="index.php"> <img src="Foto/Logos/apex-white-nav-logo.svg" alt=""> </a>
                </div>
                <ul>
                    <h3 class="menu-text">Informazioni</h3>
                    <div class="subtext">
                        <li class="menu-subtext"> <a href="https://www.ea.com/it-it/games/apex-legends" class="menu-subtext"> <img src="Foto/Icons/White-dot.png" alt="">Apex Legends </a></li>
                        <li class="menu-subtext"> <a href="Pagine/leggende.php" class="menu-subtext"> <img src="Foto/Icons/White-dot.png" alt="">Leggende</a></li>
                    </div>
                    
                    <h3 class="menu-text"> <a href="Pagine/mappe.php" class="menu-text"> Mappe</a></h3>
                    <h3 class="menu-text">Modalità</h3>
                    <div class="subtext">
                        <li class="menu-subtext"> <a href="Pagine/battle-royale.php" class="menu-subtext"> <img src="Foto/Icons/White-dot.png" alt="">Battle Royale</a></li>
                    </div>
            
                    <h3 class="menu-text"> <a href="https://answers.ea.com/t5/Apex-Legends/ct-p/apex-legends-it?profile.language=it"  class="menu-text"> Community </a></h3>
                </ul>
            </div>
    
    
        EOD;
    } else if(basename($_SERVER["PHP_SELF"] != "index.php")){
        echo <<<EOD
            <div class="header">
            <div class="logo-menu">
                <a href="../index.php"> <img src="../Foto/Logos/apex-white-nav-logo.svg" alt=""> </a>
            </div>
            
            <ul class="menu">
                <li class="tendina"><a href="#"  class="menu-text"> Informazioni <img src="../Foto/Icons/white-down-arrow.png" alt="" class="freccetta"></a>
                    <ul class="tendina-info">
                        <a href="https://www.ea.com/it-it/games/apex-legends" class="menu-subtext">Apex Legends</a>
                        <a href="leggende.php" class="menu-subtext">Leggende</a>
                    </ul>
                </li>
                
                <li class="tendina"> <a href="" class="menu-text"> Modalità <img src="../Foto/Icons/white-down-arrow.png" alt="" class="freccetta"></a>
                    <ul class="tendina-info">
                        <a href="battle-royale.php" class="menu-subtext">Battle Royale</a>
                    </ul>
                </li>
                
                <li><a href="mappe.php" class="menu-text">Mappe</a> </li>
                <li><a href="https://answers.ea.com/t5/Apex-Legends/ct-p/apex-legends-it?profile.language=it"  class="menu-text"> Community </a> </li>
        
            </ul>
        
            
            <!-- Call to action -->
            <div class="cta">
                <a href="https://www.ea.com/it-it/games/apex-legends/buy/pc" class="button button-text"> Scarica gratis </a>
            </div>
        
            <div class="logo-menu">
                <a href="registrazione.php"> <img src="../Foto/Icons/user.png" alt="user.png"> </a>
            </div>
        
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        
            
            </div>
            
            <div class="menu-panel">
                <div class="logo-menu">
                    <a href="../index.php"> <img src="../Foto/Logos/apex-white-nav-logo.svg" alt=""> </a>
                </div>
                <ul>
                    <h3 class="menu-text">Informazioni</h3>
                    <div class="subtext">
                        <li class="menu-subtext"> <a href="https://www.ea.com/it-it/games/apex-legends" class="menu-subtext"> <img src="../Foto/Icons/White-dot.png" alt="">Apex Legends </a></li>
                        <li class="menu-subtext"> <a href="leggende.php" class="menu-subtext"> <img src="../Foto/Icons/White-dot.png" alt="">Leggende</a></li>
                    </div>
                    
                    <h3 class="menu-text"> <a href="mappe.php" class="menu-text"> Mappe</a></h3>
                    <h3 class="menu-text">Modalità</h3>
                    <div class="subtext">
                        <li class="menu-subtext"> <a href="battle-royale.php" class="menu-subtext"> <img src="../Foto/Icons/White-dot.png" alt="">Battle Royale</a></li>
                    </div>
            
                    <h3 class="menu-text"> <a href="https://answers.ea.com/t5/Apex-Legends/ct-p/apex-legends-it?profile.language=it"  class="menu-text"> Community </a></h3>
                    
                </ul>
            </div>
        EOD;
    }
?>
