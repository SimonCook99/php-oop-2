<?php

    require_once __DIR__ . "/product.php";

    class cibo extends Product{
        public $calorie;
        
        public $grammiPerConfezione;

        public function __construct($prezzo, $animaleTarget, $calorie, $grammiPerConfezione="ND"){

            parent::__construct($prezzo, $animaleTarget);

            if(is_numeric($calorie)){
                $this->calorie = $calorie;
            }

            $this->grammiPerConfezione = $grammiPerConfezione;
        }
    }

?>