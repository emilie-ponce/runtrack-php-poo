<?php
    class Animal {
        private $age;
        private $prenom;

        public function __construct() {
            $this->age = 0;
            $this->prenom = "";
        }

        public function afficherAge() {
            echo "L'âge de l'animal est " . $this->age . " ans<br>";
        }

        public function vieillir() {
            $this->age += 1;
        }

        public function nommer($prenom) {
            $this->prenom = $prenom;
        }

        public function afficherNom() {
            echo "Le nom de l'animal est " . $this->prenom . "<br>";
        }
    }

    $animal = new Animal();
    $animal->afficherAge();

    $animal->vieillir();
    $animal->afficherAge();

    $animal->nommer("Rouky");
    $animal->afficherNom();

?>