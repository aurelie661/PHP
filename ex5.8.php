<?php
$i=0;
do{
  $i++;
    $nombre=readline("Entrez le nombre numéro ".$i." : ");
    if($i==1){
      $max=$nombre;
      $position=$i;
    }
    elseif($nombre>$max){
      $max=$nombre;
      $position=$i;
    }
}while($nombre!=0);
echo"Le plus grand de ces nombres est : ".$max."\n";
echo"c'étais le nombre numéro : ".$position."\n";