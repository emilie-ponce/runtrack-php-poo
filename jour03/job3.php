<?php
    class Rectangle{
        private $longueur;
        private $largeur;

        public function __construct($longueur, $largeur){
            $this->longueur = $longueur;
            $this->largeur = $largeur;
        }

        public function perimetre(){
            return 2 * ($this->longueur + $this->largeur); //calcule et retourne le périmètre du rectangle
        }

        public function surface(){
            return $this->longueur * $this->largeur; //calcule et retourne la surface du rectangle :
        }

        public function getLongueur(){
            return $this->longueur;
        }

        public function setLongueur($longueur){
            $this->longueur = $longueur;
        }

        public function getLargeur(){
            return $this->largeur;
        }

        public function setLargeur($largeur){
            $this->largeur = $largeur;
        }
    }

    class Parallelepipede extends Rectangle{
        private $hauteur;

        public function __construct($longueur, $largeur, $hauteur){
            parent::__construct($longueur, $largeur);
            $this->hauteur = $hauteur;
        }

        public function volume(){
            return $this->surface() * $this->hauteur;
        }

        public function getHauteur(){
            return $this->hauteur;
        }

        public function setHauteur($hauteur){
            $this->hauteur = $hauteur;
        }
    }

    $rectangle = new Rectangle(10, 5);
    echo "Périmètre du rectangle: " . $rectangle->perimetre() . "<br>";
    echo "Surface du rectangle: " . $rectangle->surface() . "<br>";
    $parallelepipede = new Parallelepipede(10, 5, 8);
    echo "Volume du parallélépipède: " . $parallelepipede->volume() . "<br>";
?>
