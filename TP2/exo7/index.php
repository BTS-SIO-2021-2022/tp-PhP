<?php

require_once './Personne.php';
require_once './Client.php';
require_once './Electeur.php';

$rd = new Client("Dash", "Rainbow", "La maison dans les nuages de Ponyville");
$aj = new Client("Apple", "Jack", "La ferme de la douce pomme");
$twily = new Electeur("Canterlot");

echo $rd -> __toString() .'<br />';
echo $aj -> __toString()  .'<br />';
echo 'twily a vote ? ' . $twily -> hasVoted() .'<br />';;
$twily -> aVote();
echo 'Et maintenant, twily a vote ? ' . $twily -> hasVoted() .'<br />';;

echo '<a href=".."><button type="button">index</button></a><br /><br />';
