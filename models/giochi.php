<?php
    class Giochi extends Prodotti{

        public $dimensioni;
        public $caratteristiche;

        // DIMENSIONI
        public function setDimensioni($dimensioni)
        {
            $this->dimensioni = $dimensioni;
        }

        public function getDimensioni()
        {
            return $this->dimensioni;
        }

        // CARATTERISTICHE
        public function setCaratteristiche($caratteristiche)
        {
            $this->caratteristiche = $caratteristiche;
        }

        public function getCaratteristiche()
        {
            return $this->caratteristiche;
        }
    }
?>