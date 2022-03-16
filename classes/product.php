<?php

    class Product{
        protected $prezzo;
        protected $animaleTarget;

        public function __construct($prezzo, $animaleTarget){
            if(is_numeric($prezzo)){
                $this->prezzo = $prezzo;
            }

            if(is_string($animaleTarget)){
                $this->animaleTarget = $animaleTarget;
            }
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