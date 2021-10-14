<?php

require_once './Eleve.php';
require_once './Note.php';


Class Classe {
    private $nom;
    private $salle;
    private $annee;
    private $profPrincipal;
    private $eleves;

    public function __construct(String $n, int $s, int $a, String $p) {
        $this -> nom = $n;
        $this -> salle = $s;
        $this -> annee = $a;
        $this -> profPrincipal = $p;
        $this -> eleves = array();
    }

    public function addEleve(Eleve $e) {
        array_push($this -> eleves, $e);
    }

    public function addEleves(Array $e) {
        foreach($e as $s) {
            array_push($this -> eleves, $s);
        }
    }

    public function getMoyenneClasse() {
        $m = .0;
        foreach($this -> eleves as $e) {
            $m += $e -> getMoyenne() ;
        }
        return round(($m/sizeof($this -> eleves)),2);
    }

    public function sortClasse() {
        usort($this -> eleves, 'compareStudents');
        $this -> makeStudentsKnowMoy();
    }

    private function compareStudents(Eleve $a, Eleve $b) {
        if ($a -> getMoyenne() == $b -> getMoyenne()) {
            return 0;
        } else {
            return ($a -> getMoyenne() < $b -> getMoyenne()) ? -1 : 1;
        }
    }

    private function makeStudentsKnowMoy() {
        for ($i=0; $i < sizeof($this -> eleves); ++$i) { 
            $this -> eleves[$i] -> setRank($i+1); //1 = 1er, 2 = 2e etc…
        }
    }

	public function getNom() : String {
        return $this -> nom;
    }

    public function getSalle() : int {
        return $this -> salle;
    }

    public function getAnnee() : int {
        return $this -> annee;
    }

	public function getProfPrincipal() : String {
        return $this -> profPrincipal;
    }

	public function __toString() : String {
        $sb = "La classe " . $this ->getNom() ." étudiant dans la salle " .$this -> getSalle() ." qui a pour Proffesseur Principal " .$this -> getProfPrincipal() ." pour l'année " .$this -> getAnnee() ." a pour moyenne générale " . $this -> getMoyenneClasse() ." et est composée des élèves suivants : " .'<br />';

        
        foreach ($this->eleves as $e) {
            $sb .= "\n" . $e -> __toString() .'<br />';
        }

        return $sb;
    }

}

?>
