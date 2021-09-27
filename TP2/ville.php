<?php

class Ville {
    private $ville;
    private $departement;

    public function getVille() : String {
        return $this->ville;
    }

    public function getDepartement() : String {
        return $this->departement;
    }

    public function setVille(String $s){
        $this->ville = $s;
    }

    public function setDepartement(String $s){
        $this->departement = $s;
    }

    public function __toString() : String {
        return 'La ville <b>' .$this->ville .'</b> se situe dans le département <b>' .$this->departement .'</b>.<br/>'   ;
    }

}

