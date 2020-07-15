

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Articles</title>
        <link rel="stylesheet"  href="page.css"> 
    </head>
 
</br>
</br> 
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
                echo "<h2> Voici les 5 derniers articles ! </h2>";
                return($pdo);
               
            }
            catch(PDOException $e) {
                echo "<p> Vous n'êtes pas connecté</p>".$e->getMessage();
        
            }
        }
        function recup_articles($pdo){
            $articles=$pdo->query("SELECT * FROM Articles")->fetchAll();

            foreach($articles as $article){
                echo '<h3>' .$article['Sujet'].'<br></h3>';
                echo '<p>' .$article['Article'].'</p>';
                echo '<p>' .$article['Auteur'].'</p>';
                echo '<p>' .$article['Dates'].'</p>';
            }
        }

        $pdo=connect_to_database();
        recup_articles($pdo);
        ?>


</html>