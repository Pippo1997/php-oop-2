<?php
    class Cibo extends Prodotti{

        public $peso;
        public $ingredienti;

        // PESO
        public function setPeso($peso)
        {
            $this->peso = $peso;
        }

        public function getPeso()
        {
            return $this->peso;
        }

        // INGREDIENTI
        public function setIngredienti($ingredienti)
        {
            $this->ingredienti = $ingredienti;
        }

        public function getIngredienti()
        {
            return $this->ingredienti;
        }
    }
?>