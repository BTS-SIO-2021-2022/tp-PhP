<?php

require_once './ville.php';
require_once './villeC.php';
require_once './villeAvecRegion.php';

$nice = new Ville("Nice", "Alpes Maritimes");
$vidauban = new Ville("Vidauban", "Var");
$reims = new Ville("Reims", "Marne");
$nantes = new VilleAvecRegion("Nantes", "Loire Atlantique", "Pays de la Loire");

$tabVilles = array($nice, $vidauban, $reims, $nantes);

function knowCityWithLongestName(Array $r) : int {
    $villeSize = 0;
    foreach ($r as $v) {
        echo $v;
        if($v->knowNameLenght() > $villeSize) {
            $villeSize = $v->knowNameLenght();
        }
    }
    $p=0;
    for ($i=0; $i < sizeof($r); ++$i) { 
        if($villeSize == $r[$i]->knowNameLenght()) {
            $p = $i;
        }
    }
    return $p;
}

echo "La ville avec le nom le plus long est " .$tabVilles[knowCityWithLongestName($tabVilles)]->getVille();
echo '<br /><br />';
echo '<a href="./exo5&6/form.php"><button type="button">Form</button></a><br /><br />';
echo '<a href="./exo5&6/form2.php"><button type="button">Form2</button></a><br /><br />';
echo '<a href="./exo7/"><button type="button">Exo 7</button></a><br /><br />';








