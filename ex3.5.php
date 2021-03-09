<?php
$nB = (int)readline("veuillez entrer un nombre :");
$nB2 = (int)readline("veuillez entrer un deuxième nombre :");
if($nB&&$nB2==0){
    echo('Valeur null');
}
elseif($nB&&$nB2 < 0){
    echo('Valeur négatif');
}
elseif($nB&&$nB2 > 0){
    echo('Valeur positif');
}
else{
    echo('1 valeur négative et 1 valeur positive');
}

