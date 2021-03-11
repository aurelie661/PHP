<?php
$compteurNegatif=0;
$compteurPositif=0;
$tailleTab=readline("Entrez la taille du tableau : ");
for ($i=0; $i < $tailleTab; $i++) { 
   $tab[$i]=readline("Entrez votre valeur : ");

   if($tab[$i]<0){
      $compteurNegatif+=1;
   }
   elseif($tab[$i]>0){
      $compteurPositif+=1;
   }
}
echo"Nombre de négatif : ".$compteurNegatif."\nNombre de positif :".$compteurPositif;