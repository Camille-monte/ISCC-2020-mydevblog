<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">

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

<?php 
function afficher_article_entier($pdo){
    $number_article=$_GET['Numéro'];


    $articles=$pdo->query("SELECT * FROM Articles
    WHERE Numéro='$number_article'")->fetchAll();

    echo '<h1>'.$articles[0]['Sujet'].'</h1>';
    echo '<p>'.$articles[0]['Article'].'</p>';
}
$pdo=connect_to_database();
afficher_article_entier($pdo);
?>

</html>