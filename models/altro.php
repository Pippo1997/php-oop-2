<?php
    class Altro extends Prodotti{

        public $dimensioni;
        public $materiale;

        // DIMENSIONI
        public function setDimensioni($dimensioni)
        {
            $this->dimensioni = $dimensioni;
        }

        public function getDimensioni()
        {
            return $this->dimensioni;
        }

        // MATERIALE
        public function setMateriale($materiale)
        {
            $this->materiale = $materiale;
        }

        public function getMateriale()
        {
            return $this->materiale;
        }
    }
?>