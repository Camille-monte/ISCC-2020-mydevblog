
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

       $sql ="INSERT INTO
       Articles (Numéro, Sujet, Article, Photo, Auteur, Dates)
       VALUES (Numéro, Sujet, Article, Photo, Auteur, Dates) ";

        $pdo->exec($sql);
        echo 'Article ajouté avec succès !';
    }
    catch(PDOException $e) {
        echo "<p> Vous n'êtes pas connecté</p>".$e->getMessage();

    }

       function ajouter_article(){
              

       }




}
connect_to_database();
ajouter_article();


?>
    
