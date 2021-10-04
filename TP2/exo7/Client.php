<?php

require_once './Personne.php';

class Client extends Personne {
    private $address;

    public function __construct(String $n, String $p, $a) {
        parent::__construct($n, $p);
        $this -> address = $a;
    }

    public function setCoord(String $coord) {
        $this -> address = $coord;
    }

    public function __toString() : String {
        return parent::getPrenom() .' ' .parent::getPrenom() .' réside à ' .$this->address .'.';
    }
}
