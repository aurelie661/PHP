<?php
function moyenne($nb1)
{
    $total = 0;
    for ($i = 0; $i < count($nb1); $i++) {
        $total = $total + $nb1[$i];
    }
    $total = $total / count($nb1);
    return $total;
}
$tab;
$nb1 = 0;
for ($i = 0; $i < 9; $i++) {
    $tab[$i] = readline("Veuillez saisir la note n° " . ($i + 1) . " :");
}
foreach ($tab as $key => $value) {
    echo $value . " ";
}
echo "\n" . moyenne($tab);
