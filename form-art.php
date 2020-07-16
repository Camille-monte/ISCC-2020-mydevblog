<html> 
<body>
     
<form enctype="pultipart/from-data" action="./ajout-article.php" method="POST">
    <p>Sujet :<input type="text" name="Sujet"></p>
    <p> Auteur : <input type="text" name="Auteur"></p>
    <p> Dates: <input type="datetime-local" name="Dates"></p>
    <p> Photo : <input type="file" id="file" name="file" multiple accept=".jpg, .jpeg, .png"></p>
    <textarea id="Article" name="Article" rows="30" cols="100" placeholder="Article"></textarea></br>
    <textarea id="Extrait" name="Extrait" rows="20" cols="100" placeholder="Extrait"></textarea></br>
    <input type="submit" id="bouton" value="Envoyer">

</form>
     
</body>