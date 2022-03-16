<?php

    require_once __DIR__ . "/product.php";

    class antipulce extends Product {
        
        public $grammi;

        public function __construct($prezzo, $animaleTarget, $grammi="ND"){
            
            if(date("m") >=1 && date("m")<=4){
                parent::__construct($prezzo, $animaleTarget);
                $this->grammi=$grammi;
            }else{
                echo "<h1>Spiacente, questo prodotto non è attualmente disponibile</h1>";
            }

        }
    }

?>