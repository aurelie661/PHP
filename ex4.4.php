<?php

$nbDeCopie=readline('Combien de photocopie voulez vous effectuer :');
if($nbDeCopie<=10){
  $tarif=0.10*$nbDeCopie;
}
if($nbDeCopie>10 && $nbDeCopie<=31){
  $tarif= ($nbDeCopie-10)*0.09;
}
else{
  $tarif=($nbDeCopie-30)*0.08;
}
echo(' Tarif : '.$tarif.' €');


