<?php

    require_once __DIR__ . "/product.php";

    class gioco extends Product{
        public $tipologia;

        public function __construct($prezzo, $animaleTarget, $tipologia="ND"){

            parent::__construct($prezzo, $animaleTarget);

            $this->tipologia = $tipologia;
            
        }
    }

?>