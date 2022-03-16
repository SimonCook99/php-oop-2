<?php

    class cartaDiCredito{
        private $numeroCarta;

        private $dataScadenza;

        /* public function __construct($numeroCarta, $dataScadenza){
            $this->numeroCarta = $numeroCarta;
            $this->dataScadenza = $dataScadenza;
            
        } */

        public function setNumeroCarta($numeroCarta){
            $this->numeroCarta = $numeroCarta;
        }

        public function setScadenzaCarta($dataScadenza){
            $this->dataScadenza = $dataScadenza;
        }

    }

?>