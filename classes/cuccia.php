<?php

    require_once __DIR__ . "/product.php";

    class cuccia extends Product{

        public $lunghezza;
        public $larghezza;
        public $colore;

        public function __construct($prezzo, $animaleTarget, $lunghezza, $larghezza, $colore="ND"){

            parent::__construct($prezzo, $animaleTarget);

            if(is_numeric($lunghezza) && is_numeric($larghezza)){
                $this->lunghezza = $lunghezza;
                $this->larghezza = $larghezza;
            }

            $this->colore = $colore;
            
            
        }

    }

?>