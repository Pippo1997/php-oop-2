<?php
    class Altro extends Prodotti{

        public $dimensioni;
        public $materiale;

        public function __construct($immagine, $nome, $tipo, $prezzo, $dimensioni, $materiale)
        {
            parent::__construct($immagine, $nome, $tipo, $prezzo, $dimensioni, $materiale);
            $this->immagine = $immagine;
            $this->nome = $nome;
            $this->tipo = $tipo;
            $this->prezzo = $prezzo;
            $this->dimensioni = $dimensioni;
            $this->materiale = $materiale;
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

        // MATERIALE
        // public function setMateriale($materiale)
        // {
        //     $this->materiale = $materiale;
        // }

        // public function getMateriale()
        // {
        //     return $this->materiale;
        // }
    }
?>