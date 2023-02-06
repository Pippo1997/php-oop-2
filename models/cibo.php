<?php
    class Cibo extends Prodotti{

        public $peso;
        public $ingredienti;

        public function __construct($immagine, $nome, $tipo, $prezzo, $peso, $ingredienti)
        {
            parent::__construct($immagine, $nome, $tipo, $prezzo, $peso, $ingredienti);
            $this->immagine = $immagine;
            $this->nome = $nome;
            $this->tipo = $tipo;
            $this->prezzo = $prezzo;
            $this->peso = $peso;
            $this->ingredienti = $ingredienti;
        }

        // PESO
        // public function setPeso($peso)
        // {
        //     $this->peso = $peso;
        // }

        // public function getPeso()
        // {
        //     return $this->peso;
        // }

        // INGREDIENTI
        // public function setIngredienti($ingredienti)
        // {
        //     $this->ingredienti = $ingredienti;
        // }

        // public function getIngredienti()
        // {
        //     return $this->ingredienti;
        // }
    }
?>