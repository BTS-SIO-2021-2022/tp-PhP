<?php

echo '<link href="./style.css" rel="stylesheet" type="text/css" />';

$send = false;
if ($_REQUEST != null) {
    $send = true;
}

function knowTaxAmount(float $a, float $t) : float {
    return ($a*$t)/100;
}

function knowFullAmount(float $a, float $t) : float {
    return $a + $t;
}

echo '<h1>Exercice 4</h1>';
echo '<div class="form">';
if($send) {
    $tab = $_REQUEST["form"];

    echo '<form action="./index.php" method="post" name="form">
    <label for="price">Montant HT (en €)<strong style="color: red;">*</strong></label>
    <input type="number" step="any" name="form[price]" id="price" value=' .$tab["price"] .' required /><br /><br />
    
    <label for="tax">TVA (en %)<strong style="color: red;">*</strong></label>
    <input type="number" step="any" name="form[tax]" id="tax" value=' .$tab["tax"] .' required /><br /><br />
    
    <label for="tva">Montant TVA (en €)<strong style="color: red;">*</strong></label>
    <input type="text" name="tva" id="tva" value=' .knowTaxAmount($tab["price"], $tab["tax"]) .' /><br /><br />
    
    <label for="totalPrice">Montant TTC (en €)<strong style="color: red;">*</strong></label>
    <input type="text" name="totalPrice" id="totalPrice" value=' .knowFullAmount($tab["price"], knowTaxAmount($tab["price"], $tab["tax"])) .' /><br /><br />
    
    <input type="submit" name="calculer" value="Calculer" />
    </form>';

} else {
    echo '<form action="./index.php" method="post" name="form">
    <label for="price">Prix HT (en €)<strong style="color: red;">*</strong></label>
    <input type="number" step="any" name="form[price]" id="price" required /><br /><br />
    
    <label for="tax">TVA (en %)<strong style="color: red;">*</strong></label>
    <input type="number" step="any" name="form[tax]" id="tax" required /><br /><br />
    
    <input type="submit" name="calculer" value="Calculer" />
    </form>';
}
echo '</div>';

echo '<br /><br /><a href=".."><button type="button">Exos 1-2-3</button></a><br /><br />'

?>