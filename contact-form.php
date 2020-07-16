<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyDevBlog</title>
        <link type="text/css" rel="stylesheet" href="page.css">
    </head> 
    <nav class="navi">
            <?php if($_GET['page'] == 'accueil') : ?>
                <strong><a style="color:#FF6347" href="my-dev-blog.html">Accueil</a></strong>
                <?php else : ?>
                    <a href="./front.php?page=accueil">Accueil</a>
                <?php endif; ?>
                <?php if($_GET['page'] == 'articles') : ?>
                <strong><a style="color:#FF6347" href="my-dev-blogArticles.php">Articles</a></strong>
                <?php else : ?>
                    <a href="./front.php?page=articles">Articles</a>
                <?php endif; ?>    
                <?php if($_GET['page'] == 'contact') : ?>
                <strong><a style="color:#FF6347" href="my-dev-blogContact.html">Contact</a></strong>
                <?php else : ?>
                    <a href="./front.php?page=contact">Contact</a>
                <?php endif; ?>
               
        </nav>
                


<?php
if(empty($_POST)){
    echo '<p> Aucune donnée reçue.</p>';
}

else{
    echo '<p> Nom: '.$_POST['nom'].'</p>';
    echo '<p> Prénom: '.$_POST['prénom']. '</p>';
    echo '<p> E-mail: '.$_POST['e-mail'].'</p>';
    echo '<p> Message: '.$_POST['message'].'</p>';
}
?>
</html>