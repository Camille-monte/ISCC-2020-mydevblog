<?php
function clock()
{
    $heure=-01;
    while ($heure<23){
        $heure= $heure +1;
        $compteur=-01;
    
    while ($compteur<59){
        $compteur = $compteur +1;
        if($compteur<10){
            if($heure<10){
           echo "<p>0$heure:0$compteur</p>";
            }
            else {
                echo "<p>$heure:0$compteur</p>";
                } 
        }
        else {
            if($heure<10){
            echo"<p>0$heure:$compteur</p>";
            }
        else {
            echo"<p>$heure:$compteur</p>";
            
        }
        
        }
    }

      
    }
}
clock()
?>

