<?php
function uptade_dispo($quantite)
{
    if($quantite>0)
    {
        return true;
    }
    else
    {
    return false;
    }
}
function restockage($quantite,$nb_ajout)
{
    echo "<p>$nb_ajout ont été ajoutés au stock.</p>";
    return $quantite+$nb_ajout;
}

function achat($quantite,$nb_achat)
{
    echo"<p>$nb_achat ont été ajoutés acheté.</p>";
    return $quantite-$nb_achat;
}

