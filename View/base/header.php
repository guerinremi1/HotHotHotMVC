<?php
echo '<header> 
        <h1>HOT HOT HOT</h1>
        <nav class="menu">
            <a class="navigation" data-nav="/">Accueil</a>
            <a class="navigation" data-nav="profil">Profil</a>
            <a class="navigation" data-nav="documentation">Documentation</a>
            <a class="navigation" data-nav="inscription">Inscription</a>';
            if(isset($_SESSION['id'])){
                echo '<a class="c navigation" data-nav="deconnexion">Deconnexion</a>';
            }else{
                echo '<a class="c navigation" data-nav="connexion">Connexion</a>';
            }
echo    '</nav>
      </header>';