<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>MyDevBlog</title>
        <link rel="stylesheet"  href="style.css">
        
    </head>
    <body>
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


 catch(PDOException $e){
     echo "Erreur : " .$e->getMessage();
    }
 
}   

function afficher_utilisateurs($pdo){

$query=$pdo->query("SELECT * FROM utilisateurs")->fetchAll();

    echo '<ul>';
    foreach($query as $utilisateur){

        echo'<li><strong> Login: </stong>'.$utilisateur['loginn'].'.<strong>Password:</strong>'.$utilisateur['passwordd'].
        '</br>'
        ?>
        <form method="POST" action="./supprimer-utilisateurs.php?id=<?php echo $utilisateur['id']?>">
        <button type="submit" name="boutton-supprimer">Supprimer utilisateurs</button>
        </form>
        </li>
    


    <?php
    }
    echo '</ul>';

}


$pdo = connect_to_database();
afficher_utilisateurs($pdo);
?>
</body>
<footer>
    <a href="./front.php?page=accueil">Front-Office</a>
</footer>
</html>