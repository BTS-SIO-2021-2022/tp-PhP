<?php

require_once './BrowserMethodes.php';

function displayValues() {
    $tab = $_POST['form'];

    $missing = false;

    foreach($tab as $itr => $val) {
        if($val == "") {
            $missing = true;
        }
    }

    if($missing) {
        echo '<script>alert("Au moins un champ n\'a pas été rempli !")</script>';
    } else if(!$tab["mail"] == "") {
        $tab["navigateur"] = knowBrowser();
    }

    echo '<table>
            <tr>
                <th>Variable</th>
                <th>Valeur</th>
            </tr>';

    foreach($tab as $itr => $val) {
        echo '<tr>';
        echo "<td>$itr</td>";
        echo "<td>$val</td>";
        echo '</tr>';
    }
}

function knowBrowser() : String {
    $r = getBrowser("name");
    return $r["name"] . " v" .$r["version"];
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
    <link href="./style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php echo displayValues(); ?>
</body>
</html>