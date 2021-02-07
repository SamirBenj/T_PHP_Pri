<?php

$Nvaleur = isset($_POST['Nvaleur']) ? $_POST['Nvaleur'] : '';
$pair = 0;
$impair = 0;
$PourcentagePair = 0;
$PourcentageImpair = 0;
$NombreInferieur = 0;
$NombreSuperieur = 0;

function PairEtImpair($valeur){

    if($valeur%2==0){
        return true;
    
        } else {
        return false;
        }

}

if(isset($_POST['verifier'])){

for($i = 1; $i <= $Nvaleur; $i++){
    echo'merci';

    $tabi[$i] = rand(1,10);

    if(PairEtImpair($tabi[$i])) {
        $pair = $pair +1;
    }else {
        $impair = $impair +1;
    }

    echo'merci';

}
}





echo '<script>';
echo 'console.log('.$impair.')';
echo '</script>';

  echo  'nombre pair = '.$pair.'.';
  echo 'nombre impair = '.$impair.'.';
?>