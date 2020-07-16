

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
                
                return($pdo);
               
            }
            catch(PDOException $e) {
                echo "<p> Vous n'êtes pas connecté</p>".$e->getMessage();
        
            }
        }
        function recup_articles($pdo){
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
        recup_articles($pdo);
        ?>

</html>