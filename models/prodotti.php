<?php
    class Prodotti{
        public $cibo;
        public $cucce;
        public $giochi;

        public function __construct($cibo, $cucce, $giochi)
        {
            $this->cibo = $cibo;
            $this->cucce = $cucce;
            $this->giochi = $giochi;
        }
    }
?>