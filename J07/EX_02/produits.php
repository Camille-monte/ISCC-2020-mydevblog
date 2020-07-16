<?php
$produits =array(
    'T-shirt rouge'=>'15.50',
    'T-shirt vert'=>'15.50',
    'T-shirt argent'=>'16.50',
    'Short bleu'=>'19.99',
    'Short vert'=>'19.99',
    'Veste argent'=>'35');

    function afficher_produits($produits){
        echo '<table
            <tr>
            <th>Produits</th>
            <th>Prix</th>
            </tr>
            </table>';

        foreach ($produits as $clef=>$value){

            echo '<table 
            <tr>
            <td>'.$clef.'</td>
            <td>'.$value.'</td>
            </tr>
            </table>';
    
        }

    }
    afficher_produits($produits);
 ?>   