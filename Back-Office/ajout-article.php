<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Ajout-article</title>
        <link rel="stylesheet"  href="page.css">
        
    </head>
<?php
function connect_to_database(){
    $servername ="localhost";
    $username="root";
    $pass ="root";
    $databasename="mydevblog";

    try{
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return($pdo);
    }
    catch(PDOException $e){
        echo "Erreur : " .$e->getMessage();
        
    }
}
function login ($pdo){
    try{ 
        $Numéro=$_POST['Numéro'];
        $Sujet=$_POST['Sujet'];
        $Article=$_POST['Article'];
        $Extrait=$_POST['Extrait'];
        $Auteur=$_POST['Auteur'];
        $Dates=$_POST['Dates'];

        if (!empty($Numéro) AND !empty($Sujet) AND !empty($Article) AND !empty($Extrait) AND !empty($Auteur) AND !empty($Dates)){
            $Article=addslashes($Article);
            $Extrait=addslashes($Extrait);

            $sql="INSERT INTO
          Articles (Numéro, Sujet, Article, Extrait, Photo, Auteur, Dates)
            VALUES('$Numéro', '$Sujet', '$Article', '$Extrait', ' ', '$Auteur', '$Dates')";
            $pdo->exec($sql);
            echo '<p>Article ajouté à la base de données avec succès! </p>';
            }
        }
        catch(PDOException $e){
            echo '<p> Erreur de publication</p>' .$e->getMessage();
        }
    }
$pdo = connect_to_database();
login($pdo);
?>
</html>