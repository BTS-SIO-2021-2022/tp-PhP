<?php

class Form {
    private $value;
    private $checkers;

    public function __construct() {
        $this -> value =    '<form action="./formDisplay.php" method="get">' .'<fieldset>';
        $this -> checkers = array(false, false);
    }

    public function setText(String $label) {
        if(!$this -> checkers[1]) {
            $this -> value .=   '<label for="' .$label .'">' .$label . '</label> : <input type="text" name="'.$label .'" id="' .$label .'"><br /><br />';
            $this -> checkers[0] = true;
        }
    }

    public function setSumbit() {
        if(!$this -> checkers[1]) {
            $this -> value .= '<input type="submit" value="Send Data"><form>';
            $this -> checkers[1] = true;
        }
    }
    
    private function closeFieldset() {
        if($this -> checkers[0] && $this -> checkers[1]) {
            $this -> value .= '</fieldset>';
            $this -> closeForm();
        }
    }
    
    private function closeForm() {
        $this -> value .= '</form>';
    }
    
    public function getForm() : String {
        if($this -> checkers[0] && $this -> checkers[1]) {
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
$f1 -> setSumbit();



echo $f1 -> getForm();;

echo '<a href=".."><button type="button">index</button></a><br /><br />';

