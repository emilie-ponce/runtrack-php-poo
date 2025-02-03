<?php
    class Operation {
        public $nombre1;
        public $nombre2;

        public function __construct($nombre1 = 17, $nombre2 = 11) {
            $this->nombre1 = $nombre1;
            $this->nombre2 = $nombre2;
        }

        public function afficherAttributs() {
            echo "Nombre1: " . $this->nombre1 . "<br>";
            echo "Nombre2: " . $this->nombre2 . "<br>";
        }
        
        public function addition() {
            $resultat = $this->nombre1 + $this->nombre2;
            echo "Le résultat de l'addition est : " . $resultat . "<br>";
        }
    }

    $operation = new Operation();
    $operation->afficherAttributs();
    $operation->addition();
?>
