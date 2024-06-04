<div class="header">
    <div class="logo-menu">
        <a href="../index.php"> <img src="../Foto/Logos/apex-white-nav-logo.svg" alt=""> </a>
    </div>

    <ul class="menu">
        <li class="tendina"><a href="#"  class="menu-text"> Informazioni <img src="../Foto/Icons/down-arrow2.png" alt="" class="freccetta"></a>
            <ul class="tendina-info">
                <a href="https://www.ea.com/it-it/games/apex-legends" class="menu-subtext">Apex Legends</a>
                <a href="leggende.php" class="menu-subtext">Leggende</a>
            </ul>
        </li>
        
        <li class="tendina"> <a href="" class="menu-text"> Modalità <img src="../Foto/Icons/down-arrow.png" alt="" class="freccetta"></a>
            <ul class="tendina-info">
                <a href="battle-royale.php" class="menu-subtext">Battle Royale</a>
            </ul>
        </li>
        
        <li><a href="mappe.php" class="menu-text">Mappe</a> </li>
        <li><a href="gg.php"  class="menu-text"> Community </a> </li>
        <?php
            if(isset($_SESSION["username"])){
                echo "<li><a href='statistiche.php' class='menu-text'>Statistiche</a> </li>";
            }
        ?>

    </ul>


    <div class="cta">
        <a href="https://www.ea.com/it-it/games/apex-legends/buy/pc" class="button button-text"> Scarica gratis </a>
    </div>

    <?php
        if(isset($_SESSION["username"])){
            echo "<div class='logout-menu'>
                    <a href='logout.php'> <h4 style='padding: 12px 30px; font-size:30px; border: 1px solid #f3f3f3' class='menu-text'>Logout</h4> </a>
                </div>
                <div class='avatar-menu'>
                    <img src='$foto_profilo' alt='user-image'> 
                </div>";
        } else{
            echo "<div class='avatar-menu'>
                <a href='accedi.php'> <img src='../Foto/Icons/user2.png' alt='user2.png'> </a>
            </div>";
        }
    ?>
            
    

    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>


</div>


<!-- Per farlo responsive -->
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

        <h3 class="menu-text"> <a href="gg.php"  class="menu-text"> Community </a></h3>
        

    </ul>
</div>