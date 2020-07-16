<footer>
    
</br>
    </br>
    </br>
    </br>

    <li>
    <a href="./J03/ex-02.html">Accueil ISCC 2020</a>

    <li>
    <a href="./J03/mon-cv.html">Mon CV</a>

    <li>
    <a href="./J06/EX_01/test-fonctions.php">Test fonctions</a>
 

    <li>
    <a href="./J06/EX_03/boucles-imbriquees.php">Clock</a>

    <li>
    <a href="./J07/EX_02/double_tableaux.php">Panier</a>

    <li>
    <a href="./J07/EX_02/utiliser-objets.php">Heure</a>
 
    <li>
    <a href="./J08/EX_01/mini-site-routing.php">Mini Site Routing</a>

    <li>
    <a href="https://github.com/Camille-monte">Profil GitHub</a>
    
    <li>
    <a href="https://www.linkedin.com/in/camille-monterastelli-5b2a54194/">Linkedin</a>
  

    </br>
    <html>
    <div class="connexion"  >
    <?php 
    if($_GET['page'] == 'connexion') : ?>
                <strong><a style="color:#FF6347" href="connexion.php">Connexion</a></strong>
                <?php else : ?>
                    <a href="./front.php?page=connexion">Connexion</a>
                <?php endif; ?>



   <?php
   if($_GET['page'] == 'connexion'){
                include('connexion.php');
            }
    ?>
</div>
</footer>