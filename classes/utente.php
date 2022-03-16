<?php

    require_once __DIR__ . "/carta-di-credito.php";

    class user {

        protected $nome;
        protected $cognome;
        protected $mail;
        protected $sconto = 0;
        protected $cartaDiCredito;

        public function __construct($nome, $cognome, $mail, $numeroCarta, $dataScadenza){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->mail = $mail;

            $this->cartaDiCredito = new cartaDiCredito();
            $this->cartaDiCredito->setNumeroCarta($numeroCarta);
            $this->cartaDiCredito->setScadenzaCarta($dataScadenza);

        }

        public function setSconto($sconto){

            if(is_numeric($sconto)){
                $this->sconto = $sconto;
            } 
        }

    }

?>