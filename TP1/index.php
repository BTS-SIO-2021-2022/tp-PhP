<?php

$iTab = array(
    "aj" => array("Applejack",21,"Sweet Apple Accres","Honnesty"),
    "fluttershy" => array("Fluttershy",20,"Ponyville","Kindness"),
    "pinkie" => array("Pinkie Pie",21,"Rock Farm","Laughter"),
    "rd" => array("Rainbow Dash",22,"Cloudsdale","Loyalty"),
    "rarity" => array("Rarity",24,"Manehattan","Generosity"),
    "twily" => array("Twilight Sparkle",23,"Canterlot","Magic")
);

$aTab = array(
    "aj" => array(
        "nom" => "Applejack",
        "age" => 21,
        "location" => "Sweet Apple Accres",
        "element" => "Honnesty"
    ),
    "fluttershy" => array(
        "nom" => "Fluttershy",
        "age" => 20,
        "location" => "Ponyville",
        "element" => "Kindness"
    ),
    "pinkie" => array(
        "nom" => "Pinkie Pie",
        "age" => 21,
        "location" => "Rock Farm",
        "element" => "Laughter"
    ),
    "rd" => array(
        "nom" => "Rainbow Dash",
        "age" => 22,
        "location" => "Cloudsdale",
        "element" => "Loyalty"
    ),
    "rarity" => array(
        "nom" => "Rarity",
        "age" => 24,
        "location" => "Manehattan",
        "element" => "Generosity"
    ),
    "twily" => array(
        "nom" => "Twilight Sparkle",
        "age" => 23,
        "location" => "Canterlot",
        "element" => "Magic"
    )
);

$mails = array(
	"Acton.Brown@gmail.com",
	"Owen.Cole@gmail.com",
	"Holly.Hurley@gmail.com",
	"Noel.Burns@yahoo.fr",
	"Paki.Sharpe@yahoo.fr",
    "Seth.Shepard@yahoo.fr",
    "Lareina.Underwood@outlook.com",
    "Wynne.Schmidt@outlook.com",
    "Tanek.Harrison@outlook.com",
    "Xyla.Aguilar@outlook.com"
);

$dns = array();
$dnsTable = array();
$stats = array();


echo 'exo 1 & 3 <br />';
foreach($iTab as $value) {
    print_r($value);
    echo '<br />';
/*
    foreach($subtab as $value) {
    print_r($value);
            echo '<br />';
    }
*/
}
echo '<br/>';

echo 'exo 2 & 3 <br />';
foreach($aTab as $value) {
    print_r($value);
    echo '<br />';
/*
    foreach($subtab as $value) {
    print_r($value);
            echo '<br />';
    }
*/
}
echo '<br/>';

echo 'exo 4 <br />';
$mn = "";
foreach($mails as $var) {
    $tab = explode("@", $var);
    $pointer = $tab[1];

    if($mn != $pointer) {
        $mn = $pointer;
    }
    array_push($dns, $pointer);
}

foreach($dns as $dns_mails) {
    if($mn != $dns_mails) {
        $mn = $dns_mails;
    }
    for($i = 0; $i < sizeof($dnsTable); ++$i) {
        if($dnsTable[$i] == $mn) {
            $dnsTable[$i]++;
        }
    }
}

print_r($stats);

