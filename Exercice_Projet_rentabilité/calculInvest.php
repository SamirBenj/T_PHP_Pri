<?php

$capital = isset($_POST['capital']) ? $_POST['capital'] : '';
$taux = isset($_POST['taux']) ? $_POST['taux'] : '';
$duree = isset($_POST['duree']) ? $_POST['duree'] : '';

function calculInvestissement($capital1,$taux1,$duree1) {

    $nb = 0;
    $before = 0;
    for($i = 0;$i<=$duree1;$i++) {
    
            $nb = $nb +1;
            $resultat = $capital1 * pow((1+$taux1/100),$i);
            $before = $resultat - $capital1;
            echo '<p> mois '.$nb.' : </p>';
            echo '<p> nouveau captial : '.$resultat.'</p>';
            echo '<p> plus-value = '.$before.'</p>';
            echo '<p> -----------------------------------</p>';
        }
        
    }
 

if(isset($_POST['submit'])) {
    
    calculInvestissement($capital,$taux,$duree);
}


?>