<?php
    class Forme{
        public function aire(){
            return 0;
        }
    }

    class Rectangle extends Forme{
        private $longueur;
        private $largeur;

        public function __construct($longueur, $largeur){
            $this->longueur = $longueur;
            $this->largeur = $largeur;
        }

        public function aire(){
            return $this->longueur * $this->largeur;
        }
    }

    $rectangle = new Rectangle(10, 5);
    echo "Aire du rectangle: " . $rectangle->aire();
?>