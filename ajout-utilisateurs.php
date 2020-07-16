<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Ajout_utilisateurs</title>
        <link rel="stylesheet"  href="style.css">

        
    </head>
<?php
session_start();
function connect_to_database(){
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $databasename = "mydevblog";

    try{
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return($pdo);
    }
    catch(PDOException $e){
        echo "Erreur : " .$e->getMessage();
        
    }
}

function login ($pdo){

    try{

     
            if (!empty($_POST['login']) && !empty($_POST['password'])){
                $login=$_POST['login'];
                $password=$_POST['password'];

                $requete=$pdo->query("SELECT loginn
                FROM utilisateurs");
                $res=$requete->fetchAll();
                $found = false;

                if ($res){
                    foreach($res as $user){
                        if ($user['loginn'] == $login) {
                            $found = true;
                        }
                    }
                    
                    if(!$found){
                        $sql="INSERT INTO utilisateurs (loginn, passwordd) VALUES('$login', '$password')";
                        $pdo->exec($sql);
                        echo '<p> Compte ajouté à la base de données.</p>';
                        echo '<p><a href="./mydevblog_back.php?page=utilisateurs">Utilisateurs</a></p>';
                    } else{
                        echo "<p>Ce compte existe déjà.</p>";
                    }
                } else{
                    echo "<p>Ce compte n'a pas pu être enregistré dans la base de données. </p>";
                }
            }
        }
    catch(PDOException $e){
        echo "Login erreur" .$e->getMessage();

    }
}

$pdo= connect_to_database();
login($pdo);
?>
</body>
<footer>
    <a href="./front.php?page=accueil">Front-Office</a>
</footer>
</html>
