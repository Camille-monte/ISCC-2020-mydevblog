<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyDevBlog</title>
        <link type="text/css" rel="stylesheet" href="page.css">
    </head> 
   
    <body>
        <div class="Accueil">
            <br/>
            <br/>

<p>Bonjour tout le monde et merci d'être sur mon site dédié à ma nouvelle passion, le UKULÉLÉ !
   <br/> Je ne suis qu'une débutante alors pas de problème pour comprendre comment je joue. Tout d'abord j'ai créé ce site à l'occasion de l'ISEG Summer Code Camp 2020 avec Epitech.
  <br/> Pendant ce stage j'ai appris à développer à l'aide de nombreux outils. Voilà le résultat de 3 semaines d'apprentissages ! 
</br> Bonne lecture !</p>

   <img class="pic" src="assets/toppng.com-clip-art-royalty-free-download-lag-stage-series-solid-lag-ukulele-1200x682.png"> 

    <p>Ici vous allez pouvoir retrouver des tablatures mais aussi des grattages en vidéo, <br/>au menu :
        <li>Explications,</li>
        <li>Musiques actuelles</li>
        <li>Musiques des années 80</li>
        <li>Covers</li>
        <li>Bons plans</li>
        </p>

    <p>N'hésitez pas à aller faire un tour dans la rubrique <a href="./front.php?page=articles">Articles</a> où vous trouverez toutes mes préstations et news de ma page !</p>
    <p>Vous pouvez déjà retrouver mes 5 derniers articles : </p>
    </div>
        <br/>
     <p>
        <?php
        function connect_to_database(){
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            $databasename = "mydevblog";
        
            try {
                $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                echo "<p> Vous êtes connecté</p>";
                return($pdo);
               
            }
            catch(PDOException $e) {
                echo "<p> Vous n'êtes pas connecté</p>".$e->getMessage();
        
            }
        }
        function recup_5_articles($pdo){
            $articles=$pdo->query("SELECT * FROM Articles")->fetchAll();

            foreach($articles as $article){
                echo '<h4>' .$article['Sujet'].'<br></h4>';
                echo '<p>' .$article['Extrait'].'</p>';
                $number_article=$article['Numéro'];
            ?>
        
            <a href="front.php?page=article&Numéro=<?php echo $number_article?>">Lire l'article en entier</a>

        
            
        
            <?php
            }
        }
        $pdo=connect_to_database();
        recup_5_articles($pdo);
        ?>
     </p>     
 
  
</body>
</html>