<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyDevBlog</title>
        <link type="text/css" rel="stylesheet" href="page.css">
    </head> 
    <div class="bannière">
    <body>
        <nav class="navi">
            <?php if($_GET['page'] == 'accueil') : ?>
                <strong><a style="color:#FF6347" href="my-dev-blogAccueil.php">Accueil</a></strong>
                <?php else : ?>
                    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Front-Office/front.php?page=accueil">Accueil</a>
                <?php endif; ?>
                <?php if($_GET['page'] == 'articles') : ?>
                <strong><a style="color:#FF6347" href="my-dev-blogArticles.php">Articles</a></strong>
                <?php else : ?>
                    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Front-Office/front.php?page=articles">Articles</a>
                <?php endif; ?>    
                <?php if($_GET['page'] == 'contact') : ?>
                <strong><a style="color:#FF6347" href="my-dev-blogContact.html">Contact</a></strong>
                <?php else : ?>
                    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Front-Office/front.php?page=contact">Contact</a>
                <?php endif; ?>
                <?php if($_GET['page'] == 'connexion') : ?>
                <strong><a style="color:#FF6347" href="connexion.php">Connexion</a></strong>
                <?php else : ?>
                    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Front-Office/front.php?page=connexion">Connexion</a>
                <?php endif; ?>

                
               
        </nav>
                
                
    <header>
        <h1><br>Ukulélé par CamCam</h1>
        </div>
    </header>

<div>
        <?php
            if($_GET['page'] == 'accueil'){
                include('my-dev-blogAccueil.php');
            }
            elseif($_GET['page'] == 'articles'){
                include('my-dev-blogArticles.php');
            }
            elseif($_GET['page'] == 'contact'){
                include('my-dev-blogContact.html');
            }
            elseif($_GET['page'] == 'Erreur-404'){
                include('404.php');
            }
            elseif($_GET['page'] == 'connexion'){
                include('connexion.php');
            }
   
            
        ?>
</div>


    </body>
    <?php
include('footer.php')
?>
    </html>