<?php
    class Student {
        private $nom;
        private $prenom;
        private $numeroEtudiant;
        private $credits;
        private $level;

        public function __construct($nom, $prenom, $numeroEtudiant){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->numeroEtudiant = $numeroEtudiant;
            $this->credits = 0; 
            $this->level = $this->studentEval();
        }

        public function addCredits($nombreDeCredits){
            if ($nombreDeCredits > 0){
                $this->credits += $nombreDeCredits; 
                $this->level = $this->studentEval(); 
            }
        }

        private function studentEval(){
            if ($this->credits >= 90){
                return "Excellent";
            } elseif ($this->credits >= 80){
                return "Très bien";
            } elseif ($this->credits >= 70){
                return "Bien";
            } elseif ($this->credits >= 60){
                return "Passable";
            } else {
                return "Insuffisant";
            }
        }

        public function studentInfo(){
            return "Nom = {$this->nom} <br>" .
                "Prénom = {$this->prenom} <br>" .
                "id = {$this->numeroEtudiant} <br>" .
                "Niveau = {$this->level}<br>";
        }
    }

    $john_doe = new Student("John", "Doe", 145);
    $john_doe->addCredits(30);
    $john_doe->addCredits(25);
    $john_doe->addCredits(15);
    echo $john_doe->studentInfo(); 
?>
