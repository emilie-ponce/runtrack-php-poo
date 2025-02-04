<?php
    class Rectangle {
        private $longueur;
        private $largeur;

        public function __construct($longueur, $largeur) {
            $this->setLongueur($longueur);
            $this->setLargeur($largeur);
        }

        public function getLongueur() {
            return $this->longueur;
        }

        public function getLargeur() {
            return $this->largeur;
        }

        public function setLongueur($longueur) {
            $this->longueur = $longueur;
        }

        public function setLargeur($largeur) {
            $this->largeur = $largeur;
        }
    }

    #c'est pour créer un rectangle
    $rectangle = new Rectangle(10, 5);
    echo "Longueur initiale : " . $rectangle->getLongueur() . "<br>";
    echo "Largeur initiale : " . $rectangle->getLargeur() . "<br>";

    #c'est pour modifier la longueur et la largeur
    $rectangle->setLongueur(15);
    $rectangle->setLargeur(8);
    echo "Nouvelle longueur : " . $rectangle->getLongueur() . "<br>";
    echo "Nouvelle largeur : " . $rectangle->getLargeur() . "<br>";
?>
