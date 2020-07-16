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
            <?php if($_GET['page'] == 'ajout-utilisateurs') : ?>
            <strong><a style="color:#FF6347" href="form-utili.php">Ajout utilisateurs</a></strong>
            <?php else : ?>
                <a href="./mydevblog_back.php?page=ajout-utilisateurs">Ajout utilisateurs</a>
            <?php endif; ?>
            <?php if($_GET['page'] == 'ajout_article') : ?>
            <strong><a style="color:#FF6347" href="form-art.php">Ajout article</a></strong>
            <?php else : ?>
                <a href="./mydevblog_back.php?page=ajout-article">Ajout article</a>
            <?php endif; ?>    
            <?php if($_GET['page'] == 'utilisateurs') : ?>
                <strong><a style="color:#FF6347" href="utilisateurs.php">Utilisateur</a></strong>
            <?php else : ?>
                <a href="./mydevblog_back.php?page=utilisateurs">Utilisateurs</a>
            <?php endif; ?>

            
        </div>
    </header>

    <?php
    if($_GET['page'] == 'utilisateurs'){
         echo '<h1>' .$title ='Utilisateurs</h1>';
        include('utilisateurs.php');
    }
    if($_GET['page'] == 'ajout-utilisateurs'){
        echo '<h1>' .$title ='Ajout Utilisateurs </h1>';
        include('form-utili.php');
    }
    if($_GET['page'] == 'ajout-article'){
        echo '<h1>' .$title ="Ajout article </h1>";
        include('form-art.php');
    }
   
    ?>
</html>