<?php

require_once './ville.php';
require_once './villeC.php';
require_once './villeAvecRegion.php';

$nice = new Ville;
$reims = new VilleC("Reims", "Marne");
$nantes = new VilleAvecRegion("Nantes", "Loire Atlantique", "Pays de la Loire");

echo $nice;
$nice->setVille("Nice");
echo $nice;

$nice->setDepartement("Alpes Maritimes");
echo $nice;

echo $reims;
echo $nantes;






