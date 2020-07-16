<?php
function compter_dizaine($maximum)
{
    $compter=0;
    while ($compteur<$maximum){
        $compteur = $compteur +1;
        echo "<p>compteur : $compteur </p>";
        if ($compteur%100===0){
            echo "<p> Ceci est une centaine.</p>";
        }
        elseif ($compteur%10===0){
            echo "<p> Ceci est une dizaine.</p>";
        }
        
    }
}
compter_dizaine (100);
?>