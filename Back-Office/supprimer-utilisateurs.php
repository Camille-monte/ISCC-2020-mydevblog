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
        function supprimer_utilisateurs($pdo){
            $id_utilisateurs=$_GET['id'];
            $_POST['boutton_supprimer']= $sql = "DELETE FROM utilisateurs WHERE id='$id_utilisateurs'";
            $sth=$pdo->prepare($sql);
            $sth->execute();
            echo 'Effacement exécuté';

        }
        $pdo=connect_to_database();
        supprimer_utilisateurs($pdo);
        ?>
