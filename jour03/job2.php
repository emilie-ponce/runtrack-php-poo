<?php
    class Personne{
        protected $age = 14;

        public function afficherAge(){
            echo "J'ai " . $this->age . " ans<br>";
        }

        public function bonjour(){
            echo "Hello<br>";
        }

        public function modifierAge($nouvelAge){
            $this->age = $nouvelAge;
        }
    }

    class Eleve extends Personne{
        public function allerEnCours(){
            echo "Je vais en cours<br>";
        }
    }

    class Professeur extends Personne{
        private $nom;
        private $matiereEnseignee;

        public function __construct($nom, $age, $matiere) {
            $this->nom = $nom;
            $this->age = $age;
            $this->matiereEnseignee = $matiere;
        }

        public function bonjour(){
            echo "Bonjour, je m'appelle " . $this->nom . ".<br>";
        }

        public function enseigner(){
            echo "Le cours de " . $this->matiereEnseignee . " va commencer.<br>";
        }
    }

    $eleve = new Eleve();
    $eleve->bonjour();
    $eleve->allerEnCours();
    $eleve->modifierAge(15);
    $eleve->afficherAge();

    $professeur = new Professeur("Mme. Swift", 35, "musique");
    $professeur->bonjour();
    $professeur->enseigner();
?>