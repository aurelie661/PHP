<?php

$age=26;
$anneDePermis=3;
$accident=0;
$anneeDAssurance=3;

if($age >25){
  $point1=1;
}
else{
  $point1=2;
}
if($anneDePermis>2){
  $point2=1;
}
else{
  $point2=2;
}
if($accident<3){
  if($accident<2){
    if($accident <1){
      $point3=0;
    }
    else{
      $point3=1;
    }
  }else{
    $point3=2;
  }
}
else{
  $point3=3;
}
if($anneeDAssurance >1){
  $point4-=1;
}
 
$calculDePointFinal=$point1+$point2+$point3+$point4;



