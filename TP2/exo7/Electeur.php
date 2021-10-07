<?php

require_once './Personne.php';

class Electeur extends Personne {
    private $bureauDeVote;
    private $hasvoted;

    public function __construct(String $bdv) {
        $this -> bureauDeVote = $bdv;
        $this -> hasvoted = false;
    }

    public function aVote() {
        $this -> hasvoted = true;
    }

    public function hasVoted() {
        if($this -> hasvoted) {
            return "true";
        } else {
            return "false";
        }
    }
}
