<?php

require_once './ville.php';

class VilleAvecRegion extends VilleC {
    private $region;

    public function __construct(String $v, String $d, String $r) {
        parent::__construct($v, $d);
        $this->region = $r;
    }

    public function getRegion() : String {
        return $this->region;
    }

    public function __toString() : String {
        return parent::__toString() . 'dans la région <b>' .$this->region .'</b>.<br/>';
    }

}

