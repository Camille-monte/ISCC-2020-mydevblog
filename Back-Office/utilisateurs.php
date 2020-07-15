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
$pdo = connect_to_database();
$query=$pdo->query("SELECT * FROM utilisateurs")->fetchAll();

echo '<ul>';
foreach($query as $user){
    echo'<li>' .$user['loginn'].'</li>';

}
echo '</ul>';
?>