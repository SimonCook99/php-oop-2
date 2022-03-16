<?php

    class cartaDiCredito{
        private $numeroCarta;

        private $annoScadenza;

        /* public function __construct($numeroCarta, $annoScadenza){
            $this->numeroCarta = $numeroCarta;
            $this->annoScadenza = $annoScadenza;
            
        } */

        public function setNumeroCarta($numeroCarta){
            $this->numeroCarta = $numeroCarta;
        }

        public function setScadenzaCarta($annoScadenza){
            $this->annoScadenza = $annoScadenza;
        }

        public function getAnnoScadenza(){
            return $this->annoScadenza;
        }

    }

?>