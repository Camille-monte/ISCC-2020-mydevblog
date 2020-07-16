<!DOCTYPE html>
<html>
<head>
<title>SILVER BLOG</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style/front-office.css">
</head>
<h1> Les Articles </h1>
<?php
session_start();

function connect_to_database(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $databasename = "mydevblog";

    try{
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return($pdo);
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
} ?>
<ul>
<?php
function articles($pdo){
    $articles=$pdo->query("SELECT * FROM Articles")->fetchAll();

    foreach ($articles as $article){
        echo '<h4><li>'.$article['Sujet'].'</li></h4>';
        echo '<p>'.$article['Extrait'].'</p>';

        $number_article=$article['Numéro'];
    ?>

    <a href="./front.php?page=article&Numéro=<?php echo $number_article?>">Lire l'article en entier.</a>
    <?php
    }
}
$pdo=connect_to_database();
articles($pdo);
?>
</ul>
</html>