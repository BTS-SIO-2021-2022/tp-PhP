<?php

Class Note {
    private $matiere;
	private $note;
	private $coef;

	public function __construct(String $m, float $n, int $c) {
		$this -> matiere = $m;
		$this -> note = $n;
		$this -> coef = $c;
	}

    public function getMatiere() : String {
        return $this -> matiere;
    }

    public function getNote() : int {
        return $this -> note;
    }


    public function getCoef() : int {
        return $this -> coef;
    }
}

?>