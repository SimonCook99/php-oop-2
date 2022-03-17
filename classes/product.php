<?php

    class Product{
        protected $prezzo;
        protected $animaleTarget;

        public function __construct($prezzo, $animaleTarget){
            $this->setPrezzo($prezzo);

            $this->setAnimale($animaleTarget);
        }

        public function getPrezzo(){
            return $this->prezzo;
        }

        public function setPrezzo($prezzo){
            if(is_numeric($prezzo)){
                $this->prezzo = $prezzo;
            }
        }

        public function getAnimale(){
            return $this->animaleTarget;
        }

        public function setAnimale($animale){
            if(is_string($animale)){
                $this->animaleTarget = $animale;
            }
        }

    }

?>