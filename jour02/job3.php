<?php
    class Livre {
        private $titre;
        private $auteur;
        private $nombreDePages;
        private $disponible;

        public function __construct($titre, $auteur, $nombreDePages) {
            $this->titre = $titre;
            $this->auteur = $auteur;
            $this->setNombreDePages($nombreDePages);
            $this->disponible = true; 
        }

        public function getTitre() {
            return $this->titre;
        }

        public function getAuteur() {
            return $this->auteur;
        }

        public function getNombreDePages() {
            return $this->nombreDePages;
        }

        public function isDisponible() {
            return $this->disponible;
        }

        public function setTitre($titre) {
            $this->titre = $titre;
        }

        public function setAuteur($auteur) {
            $this->auteur = $auteur;
        }

        public function setNombreDePages($nombreDePages) {
            $this->nombreDePages = $nombreDePages; 
        }

        public function emprunter() {
            $this->disponible = false;
        }

        public function rendre() {
            $this->disponible = true;
        }
    }

    $livre = new Livre("Lieu-dit l'éternité", "Emily Dickinson", 304);
    echo "Titre : " . $livre->getTitre() . "<br>";
    echo "Auteur : " . $livre->getAuteur() . "<br>";
    echo "Nombre de pages : " . $livre->getNombreDePages() . "<br>";
    echo "Disponible : " . ($livre->isDisponible() ? "Oui" : "Non") . "<br>";

    $livre->emprunter();
    echo "Disponible après emprunt : " . ($livre->isDisponible() ? "Oui" : "Non") . "<br>";

    $livre->rendre();
    echo "Disponible après retour : " . ($livre->isDisponible() ? "Oui" : "Non") . "<br>";
?>