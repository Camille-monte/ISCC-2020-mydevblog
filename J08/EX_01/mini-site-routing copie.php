<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>mini-site-routine</title>
    <nav>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=1">Accueil!</a>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=2">Page 2</a>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=3">Page 3</a>
    </nav>
  </head>
  <body>
  <?php
if($_GET['page'] == '1')
{
    echo '<h1>Accueil!</h1>';
    //afficher page d'accueil
}
    elseif($_GET['page'] == '2')
    {
        echo '<h1>Page 2</h1>';
        //afficher page 2
    }
    elseif($_GET['page'] == '3')
    {
        echo '<h1>Page 3</h1>';
        //afficher page 3
    }


  ?>
  </body>

</html>