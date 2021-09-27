<?php

class VilleC {
    private $ville;
    private $departement;

    public function __construct(String $v, String $d) {
        $this->ville = $v;
        $this->departement = $d;
    }

    public function getVille() : String {
        return $this->ville;
    }

    public function getDepartement() : String {
        return $this->departement;
    }

    public function __toString() : String {
        return 'La ville <b>' .$this->ville .'</b> se situe dans le département <b>' .$this->departement .'</b>.<br/>'   ;
    }

}

