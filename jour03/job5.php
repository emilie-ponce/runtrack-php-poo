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

    class Cercle extends Forme{
        private $radius;

        public function __construct($radius){
            $this->radius = $radius;
        }

        public function aire(){
            return 3.59 * ($this->radius ** 2);
        }
    }

    $rectangle = new Rectangle(5, 3);
    $cercle = new Cercle(4);

    echo "L'aire du rectangle est: " . $rectangle->aire() . "<br>";
    echo "L'aire du cercle est: " . $cercle->aire() . "<br>";
?>
