<?php

require_once './Eleve.php';
require_once './Note.php';
require_once './Classe.php';

$aj = new Eleve("Apple", "Jack", '10/11/2010');
$rd = new Eleve("Rainbow", "Dash", "10/10/2010");
$twily = new Eleve("Twilight", "Sparkle", "8/01/2010");
$flu = new Eleve("", "Fluttershy", "15/02/2010");
$pp = new Eleve("Pinkie", "Pie", "12/05/2010");
$rarity = new Eleve("", "Rarity", "29/10/2010");

$ab = new Eleve("", "Applebloom", "10/10/2012");
$sb = new Eleve("Sweetie", "Belle", "15/12/2012");
$sc = new Eleve("", "Scootaloo", "26/5/2012");

$c1 = new Classe("3e année école de l'amitié", 101, 2021, "Princesse Luna");
$c2 = new Classe("1e année école de l'amitié", 102, 2021, "Princesse Celestia");

for($i = 0; $i < 5; ++$i) {
    $aj -> addNoteWithoutCoef(random_int(0, 20));
    $rd -> addNoteWithoutCoef(random_int(0, 20));
    $twily -> addNoteWithoutCoef(random_int(0, 20));
    $flu -> addNoteWithoutCoef(random_int(0, 20));
    $pp -> addNoteWithoutCoef(random_int(0, 20));
    $rarity -> addNoteWithoutCoef(random_int(0, 20));
}

for($i = 0; $i < 3; ++$i) {
    $ab -> addNoteWithCoef(new Note("Maths",random_int(0, 20),4));
    $sb -> addNoteWithCoef(new Note("Maths",random_int(0, 20),4));
    $sc -> addNoteWithCoef(new Note("Maths",random_int(0, 20),4));

    $ab -> addNoteWithCoef(new Note("Français",random_int(0, 20),2));
    $sb -> addNoteWithCoef(new Note("Français",random_int(0, 20),2));
    $sc -> addNoteWithCoef(new Note("Français",random_int(0, 20),2));
}


$c1 -> addEleve($aj);
$c1 -> addEleve($rd);
$c1 -> addEleve($twily);
$c1 -> addEleve($flu);
$c1 -> addEleve($pp);
$c1 -> addEleve($rarity);

$c2 -> addEleve($ab);
$c2 -> addEleve($sb);
$c2 -> addEleve($sc);


echo $aj -> __toString() ." avec les notes : " .$aj ->getTabNotes() .'<br />';
echo $rd -> __toString() ." avec les notes : " .$rd ->getTabNotes() .'<br />';
echo $twily -> __toString() ." avec les notes : " .$twily ->getTabNotes() .'<br />';
echo $flu -> __toString() ." avec les notes : " .$flu ->getTabNotes() .'<br />';
echo $pp -> __toString() ." avec les notes : " .$pp ->getTabNotes() .'<br />';
echo $rarity -> __toString() ." avec les notes : " .$rarity ->getTabNotes() .'<br />';

echo '<br />';

echo $ab -> __toString() ." avec les notes : " .$ab ->getTabNotes() .'<br />';
echo $sb -> __toString() ." avec les notes : " .$sb ->getTabNotes() .'<br />';
echo $sc -> __toString() ." avec les notes : " .$sc ->getTabNotes() .'<br />';

echo '<br /><br />';

echo $c1 -> __toString() .'<br />';
echo $c2 -> __toString() .'<br />';

?>