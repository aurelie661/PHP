<?php

$age=(int)readline('Veuillez indiquez votre âge :');
$sexe=(string)readline('Vous êtes : h/f ');

if(strcmp($sexe,'f') && ($age>=18 && $age <=35)){
 echo('Vous êtes imposable!');
}
elseif(strcmp($sexe,'f')  && $age >=20){
  echo('Vous êtes imposable!');
}
else{
  echo(' Vous n\'êtes pas imposable!');
}

