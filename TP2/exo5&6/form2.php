<?php

class Form {
    private $value;
    private $checkers;

    public function __construct() {
        $this -> value =    '<form action="./form2Display.php" method="post">' .'<fieldset>';
        $this -> checkers = array(false, false, false, false);
    }

    public function setText(String $label) {
        if(!$this -> checkers[1]) {
            $this -> value .=   '<label for="' .$label .'">' .$label . '</label> : <input type="text" name="'.$label .'" id="' .$label .'"><br /><br />';
            $this -> checkers[0] = true;
        }
    }

    public function setRadioButton(String $ask, Array $answers) {
        if(!$this -> checkers[1]) {
            $this -> value .= "<p>$ask</p>";
            foreach($answers as $try) {
                $this -> value .= '<input type="radio" id="' .$try .'" name="' .$ask .'" value="' .$try .'"><label for="' .$try .'">' .$try .'</label>';
            }
            $this -> checkers[2] = true;
        }
    }

    public function setCheckbox(String $ask, Array $answers) {
        if(!$this -> checkers[1]) {
            $this -> value .= "<p>$ask</p>";
            foreach($answers as $try) {
                $this -> value .= '<input type="checkbox" id="' .$try .'" name="' .$ask .'[]" value="' .$try .'"><label for="' .$try .'">' .$try .'</label>';
            }
            $this -> checkers[3] = true;
        }
    }

    public function setSumbit() {
        if(!$this -> checkers[1]) {
            $this -> value .= '<br /><br /><input type="submit" value="Send Data">';
            $this -> checkers[1] = true;
        }
    }

    
    private function closeFieldset() {
        if($this -> checkers[0] && $this -> checkers[1] && $this -> checkers[2] && $this -> checkers[3]) {
            $this -> value .= '</fieldset>';
            $this -> closeForm();
        }
    }
    
    private function closeForm() {
        $this -> value .= '</form>';
    }
    
    public function getForm() : String {
        if($this -> checkers[0] && $this -> checkers[1] && $this -> checkers[2] && $this -> checkers[3]) {
            $this -> closeFieldset();
            return $this-> value;
        } else {
            return null;
        }
    }
}

$f1 = new Form();
$f1 -> setText("nom");
$f1 -> setText("prenom");
$f1 -> setText("age");
$f1 -> setRadioButton("Quel est le meilleur poney ?", array("Applejack", "Rainbow Dash", "Fluttershy", "Twilight Sparkle", "Pinkie Pie", "Rarity"));
$f1 -> setCheckbox("Quel sont vos villes préféres ?", array("Ponyville", "Manehattan", "Cloudsdale", "Canterlot", "Appleloosa", "Las Pegasus", "Monacolt"));
$f1 -> setSumbit();



echo $f1 -> getForm();

echo '<a href=".."><button type="button">index</button></a><br /><br />';

