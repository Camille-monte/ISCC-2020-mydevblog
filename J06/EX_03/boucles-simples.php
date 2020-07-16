<?php
function compter($maximum)
{
    $compter=0;
    while ($compteur<10){
        $compteur = $compteur +1;
        echo "<p>compteur : $compteur </p>";
    }
    return;
}
compter (10);
?>

<?php
function compter_for($maximum)
{
  for ($compteur=0; $compteur<=10; $compteur = $compteur +1) {
      echo "+ 1 tour";
      echo "<p>compteur : $compteur</p>" ;
  }
  return;
}
compter_for(10);
?>