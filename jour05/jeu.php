<?php
    class Tableau{
        private $grid;
        
        public function __construct(){
            $this->grid = array_fill(0, 9, null);
        }

        public function getCell($index){
            return $this->grid[$index];
        }

        public function setCell($index, $value){
            if ($this->grid[$index] === null){
                $this->grid[$index] = $value;
                return true;
            }
            return false;
        }

        public function isFull(){
            return !in_array(null, $this->grid);
        }

        public function checkWinner(){
            $winning_combinations = [
                [0, 1, 2], [3, 4, 5], [6, 7, 8], 
                [0, 3, 6], [1, 4, 7], [2, 5, 8], 
                [0, 4, 8], [2, 4, 6]             
            ];

            foreach ($winning_combinations as $combo){
                if ($this->grid[$combo[0]] !== null && 
                    $this->grid[$combo[0]] === $this->grid[$combo[1]] && 
                    $this->grid[$combo[0]] === $this->grid[$combo[2]]) {
                    return $this->grid[$combo[0]];
                }
            }
            return null;
        }
    }

    class Joueur{
        private $symbol;

        public function __construct($symbol){
            $this->symbol = $symbol;
        }

        public function getSymbol(){
            return $this->symbol;
        }
    }
?>