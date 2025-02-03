<?php
    class Operation {
        public $nombre1;
        public $nombre2;
    
        public function __construct($nombre1 = 17, $nombre2 = 11){
            $this->nombre1 = $nombre1;
            $this->nombre2 = $nombre2;
        }
    }

    $operation = new Operation();

    echo "Nombre1: " . $operation->nombre1 . "\n";
    echo "Nombre2: " . $operation->nombre2 . "\n";

?>