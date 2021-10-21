<?php

$days = array();
$MONTHS = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
$years = array();

for ($i=0; $i < 32; $i++) { 
    array_push($days, $i);
}

for ($i=1970; $i < 2038; $i++) { 
    array_push($years, $i);
}

function printMonthsAndDays() {
    $month = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
    for ($i=1; $i < 13; $i++) { 
        echo $month[$i-1] ." : " . knowDaysAmountInMonth($i, 2001) .'<br />';
    }
}

function isABisextileYear(int $y) : bool {
    return ($y%4 == 0);
}

function knowDaysAmountInMonthString(String $m, int $y) : int {
    $month = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
    return knowDaysAmountInMonth(array_search($m, $month), $y);
}

function knowDaysAmountInMonth(int $monthNumber, int $y) : int {
    if($monthNumber == 2) {
        if(isABisextileYear($y)) {
            return 29;
        } else {
            return 28;
        }
    } else {
        if($monthNumber <= 7) { //entre janvier et juillet
            if($monthNumber%2 == 0) {
                return 30; 
            } else {
                return 31;
            }
        } else { //entre aout et septembre
            if($monthNumber%2 == 0) {
                return 31; 
            } else {
                return 30;
            }
        }
    }
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet" type="text/css" />

    <title>TP3 - exo 6</title>
</head>

<body>
    <div class="form">
        <form action="./index.php" method="post" name="form">

            <label for="month">Mois :<strong style="color: red;">*</strong></label>
            <input list="months" name="form[month]" id="month">
                <datalist id="months">
                    <?php 
                        foreach($MONTHS as $m) {
                            echo '<option value="' .$m .'" />';
                        }
                    ?>
                </datalist>
        
            <label for="year">Année<strong style="color: red;">*</strong></label>
            <input type="number" name="form[year]" id="year" /><br /><br />

            <input type="submit" name="Envoyer" value="Voir calendrier" />
        </form>
    </div>
    <br /><br /><a href=".."><button type="button">Exos 1-2-3</button></a><br /><br />


</body>

</html>