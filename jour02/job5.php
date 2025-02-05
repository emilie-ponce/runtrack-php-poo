<?php
    class Voiture {
        private $marque;
        private $modele;
        private $annee;
        private $kilometrage;
        private $en_marche = False;
        private $reservoir = 70; 


        public function __construct($marque, $modele, $annee, $kilometrage) {
            $this->marque = $marque;
            $this->modele = $modele;
            $this->année = $annee;
            $this->kilometrage = $kilometrage;
        }

        public function getMarque(){
            return $this->marque;
        }

        public function getModele(){
            return $this->modele;
        }

        public function getAnnee(){
            return $this->année;
        }

        public function getKilometrage(){
            return $this->kilometrage;
        }

        public function getEnMarche(){
            return $this->en_marche;
        }

        public function setMarque($marque){
            $this->marque = $marque;
        }

        public function setModele($modele){
            $this->modele = $modele;
        }

        public function setAnnee($annee){
            $this->annee = $annee;
        }

        public function setKilometrage($kilometrage){
            $this->kilometrage = $kilometrage;
        }

        public function setEnMarche($en_marche){
            $this->en_marche = $en_marche;
        }

        public function demarrer(){
            if ($this->verifier_plein() > 5){
                $this->en_marche = True;
            } else {
                echo "La voiture peut pas démarrer";
            }
        }

        public function arreter(){
            $this->en_marche = False;
        }

        private function verifier_plein(){
            return $this->70;
        }
    }
?>
