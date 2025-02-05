<?php
    class Personne {
        protected $age = 14;

        public function afficherAge(){
            echo "J'ai " . $this->age . " ans";
        }

        public function bonjour(){
            echo "Hello";
        }

        public function modifierAge($nouvelAge){
            $this->age = $nouvelAge;
        }
    }

    class Eleve extends Personne {
        public function allerEnCours(){
            echo "Je vais en cours";
        }

        public function afficherAge(){
            echo "J'ai " . $this->age . " ans";
        }
    }

    class Professeur {
        private $matiereEnseignee;

        public function __construct($matiere){
            $this->matiereEnseignee = $matiere;
        }

        public function enseigner(){
            echo "Le cours va commencer";
        }
    }

    $personne = new Personne();
    $eleve = new Eleve();
    $eleve->afficherAge();
?>