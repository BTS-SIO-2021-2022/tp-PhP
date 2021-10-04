<?php

abstract class Personne {
    private $nom;
    private $prenom;

    public function __construct(String $n, String $p) {
        $this->nom = $n;
        $this->prenom = $p;
    }

    public function getNom() : String {
        return $this->nom;
    }

    public function getPrenom() : String {
        return $this->prenom;
    }
}
