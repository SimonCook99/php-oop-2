<?php

    require_once __DIR__ . "/product.php";

    class antipulce extends Product {
        
        public $grammi;

        public function __construct($prezzo, $animaleTarget, $grammi="ND"){
            
            //disponibilità SOLO da maggio ad agosto (dal mese 5 al mese 8)
            if(date("m") >=5 && date("m")<=8){
                parent::__construct($prezzo, $animaleTarget);
                $this->$grammi=$grammi;
            }else{
                echo "<h1>Spiacente, questo prodotto non è attualmente disponibile</h1>";
            }

        }
    }

?>