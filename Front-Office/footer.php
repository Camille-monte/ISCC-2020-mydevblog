<footer>
    
    <br/>
    <li>
    <a href="http://localhost:8888/ISCC-2020/Jour-01/mon-premier-site.html">Mon Premier Site</a>
    <br/>
    <li>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J02/hello-world.html">Hello World ! </a>
    <br/>
    <li>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J03/ex-02.html">Accueil ISCC 2020</a>
    <br/>
    <li>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J03/mon-cv.html">Mon CV</a>
    <br/>
    <li>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J05/EX_02/vitrine-accueil.php">Summer Code Camp</a>
    <br/>
    <li>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J05/EX_03/t-shirt.php">T-shirt/Stock</a>
    <br/>
    <li>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J06/EX_01/test-fonctions.php">Test fonctions</a>
    <br/>
    <li>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J06/EX_02/chaine.php">Chaîne</a>
    <br/>
    <li>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J06/EX_03/boucles-imbriquees.php">Clock</a>
    <br/>
    <li>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J06/EX_03/boucles-simples.php">Boucles suite</a>
    <br/>
    <li>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J06/EX_03/boucles-suites.php">Boucles suites</a>
    <br/>
    <li>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J07/EX_01/commandes.php">Commandes</a>
    <br/>
    <li>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J07/EX_02/double_tableaux.php">Panier</a>
    <br/>
    <li>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J07/EX_02/produits.php">Catalogue</a>
    <br/>
    <li>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J07/EX_02/utiliser-objets.php">Heure</a>
    <br/>
    <li>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php">Mini Site Routing</a>
    <br/>
    <li>
    <a href="https://github.com/Camille-monte">Profil GitHub</a>
    <br/>
    <li>
    <a href="https://www.linkedin.com/in/camille-monterastelli-5b2a54194/">Linkedin</a>
    <br/>

    
    <html>
    <div class="connexion"  >
    <?php 
    if($_GET['page'] == 'connexion') : ?>
                <strong><a style="color:#FF6347" href="connexion.php">Connexion</a></strong>
                <?php else : ?>
                    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Front-Office/front.php?page=connexion">Connexion</a>
                <?php endif; ?>



   <?php
   if($_GET['page'] == 'connexion'){
                include('connexion.php');
            }
    ?>
</div>
</footer>