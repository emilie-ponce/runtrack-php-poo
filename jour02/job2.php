<?php
    class Livre {
        private $titre;
        private $auteur;
        private $nombreDePages;

        public function __construct($titre, $auteur, $nombreDePages){
            $this->titre = $titre;
            $this->auteur = $auteur;
            $this->setNombreDePages($nombreDePages);
        }

        public function getTitre(){
            return $this->titre;
        }

        public function getAuteur(){
            return $this->auteur;
        }

        public function getNombreDePages(){
            return $this->nombreDePages;
        }

        // Mutateurs
        public function setTitre($titre){
            $this->titre = $titre;
        }

        public function setAuteur($auteur){
            $this->auteur = $auteur;
        }

        public function setNombreDePages($nombreDePages){
            if (is_int($nombreDePages) && $nombreDePages > 0) {
                $this->nombreDePages = $nombreDePages;
            } else {
                echo "Erreur : Le nombre de pages doit être un entier positif.<br>";
            }
        }
    }

    $livre = new Livre("Lieu-dit l'éternité", "Emily Dickinson", 304);
    echo "Titre : " . $livre->getTitre() . "<br>";
    echo "Auteur : " . $livre->getAuteur() . "<br>";
    echo "Nombre de pages : " . $livre->getNombreDePages() . "<br>";

    $livre->setNombreDePages(-50);

    $livre->setNombreDePages(120);
    echo "Nombre de pages après modification : " . $livre->getNombreDePages() . "<br>";

?>