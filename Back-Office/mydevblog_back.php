<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Accueil</title>
        <link rel="stylesheet"  href="style.css">
    </head>

    <header>
        <div id="titre">
        <h1>MydevBlog</h1>
        </div>
       
        <nav>
            <?php if($_GET['page'] == 'Ajout utilisateur') : ?>
                <strong><a style="color:#FF6347" href="ajout_utilisateurs.php">Ajout utilisateur</a></strong>
                <?php else : ?>
                    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Back-Office/mydevblog_back.php?page=ajout_utilisateurs">Ajout utilisateur</a>
                <?php endif; ?>
                <?php if($_GET['page'] == 'Ajout article') : ?>
                <strong><a style="color:#FF6347" href="form-art.php">Ajout article</a></strong>
                <?php else : ?>
                    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Back-Office/mydevblog_back.php?page=ajout-article">Ajout article</a>
                <?php endif; ?>    
                <?php if($_GET['page'] == 'Utilisateur') : ?>
                <strong><a style="color:#FF6347" href="utilisateurs.php">Utilisateur</a></strong>
                <?php else : ?>
                    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Back-Office/mydevblog_back.php?page=utilisateurs">Utilisateur</a>
                <?php endif; ?>

            
        </div>
    </header>

    <?php
     if($_GET['page'] == 'utilisateur'){
         echo '<h1>' .$title ='Utilisateur</h1>';
        include('utilisateurs.php');
    }
    elseif($_GET['page'] == 'ajout-utilisateurs'){
        echo '<h1>' .$title ='Ajout Utilisateurs';
        include('ajout_utilisateurs.php');
    }
    elseif($_GET['page'] == 'ajout-article'){
        echo '<h1>' .$title ="Ajout article";
        include('form-art.php');
    }
    elseif($_GET['page'] == 'Erreur-404'){
        include('404.php');
    }
    ?>
</html>