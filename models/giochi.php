<?php
    class Giochi extends Prodotti{

        public $dimensioni;
        public $caratteristiche;

        public function __construct($immagine, $nome, $tipo, $prezzo, $dimensioni, $caratteristiche)
        {
            parent::__construct($immagine, $nome, $tipo, $prezzo, $dimensioni, $caratteristiche);
            $this->immagine = $immagine;
            $this->nome = $nome;
            $this->tipo = $tipo;
            $this->prezzo = $prezzo;
            $this->dimensioni = $dimensioni;
            $this->caratteristiche = $caratteristiche;
        }

        // DIMENSIONI
        // public function setDimensioni($dimensioni)
        // {
        //     $this->dimensioni = $dimensioni;
        // }

        // public function getDimensioni()
        // {
        //     return $this->dimensioni;
        // }

        // CARATTERISTICHE
        // public function setCaratteristiche($caratteristiche)
        // {
        //     $this->caratteristiche = $caratteristiche;
        // }

        // public function getCaratteristiche()
        // {
        //     return $this->caratteristiche;
        // }
    }
?>