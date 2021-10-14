<?php

require_once './Note.php';

Class Eleve {
	private $nom;
	private $prenom;
	private $birthDate; //format dd/mm/yyyy
	private $tabNote;
	private $rank;

	public function __construct(String $n, String $p, String $b) {
		$this -> nom = $n;
		$this -> prenom = $p;
		$this -> birthDate = $b;
		$this -> tabNote = array();
		$this -> rank = -1;
	}

	public function addNoteWithoutCoef(float $n) {
		$this -> addNoteWithCoef(new Note("Unknown", $n, 1));
	}  //on considère qu’une note a un coef de 1 par défaut

	public function addNoteWithCoef(Note $n) {
		array_push($this -> tabNote, $n);
	}

	public function getMoyenne() {
		$totNote = .0;
		$totCoef = 0;
        
		foreach($this -> tabNote as $n) {
			$totNote += $n -> getNote() * $n -> getCoef();
			$totCoef += $n -> getCoef();
		}
		return round(($totNote/(float) $totCoef),2);
	}

	public function setRank(int $p) {
		$this -> rank = $p;
	}

	public function getRank() : int {
		return $this -> rank;
	}

	public function getNom() : String {
		return $this -> nom;
	}

	public function getPrenom() : String {
		return $this -> prenom;
	}

	public function getBirthdate() : String {
		return $this -> birthDate;
	}

	public function getTabNotes() : String {
		$sb = "{";

		for ($i=0; $i < sizeof($this -> tabNote) ; $i++) { 
			$sb .= $this -> tabNote[$i] -> getNote() . " coef " .$this -> tabNote[$i] -> getCoef() ." ; ";
		}

		return $sb .'}';
	}

	public function __toString() : String {
		return $this -> getNom() ." " .$this -> getPrenom() ." né le " .$this -> getBirthdate() ." a pour moyenne " .$this -> getMoyenne();
	}

}
?>
