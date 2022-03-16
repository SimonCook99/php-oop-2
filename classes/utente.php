<?php

    require_once __DIR__ . "/carta-di-credito.php";

    class user {

        protected $nome;
        protected $cognome;
        protected $mail;
        public $sconto = 0;
        public $cartaDiCredito;

        public function __construct($nome, $cognome, $mail, $numeroCarta, $annoScadenza){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->mail = $mail;

            $this->cartaDiCredito = new cartaDiCredito();
            $this->cartaDiCredito->setNumeroCarta($numeroCarta);
            $this->cartaDiCredito->setScadenzaCarta($annoScadenza);

        }

        public function setSconto($sconto){

            if(is_numeric($sconto)){
                $this->sconto = $sconto;
            } 
        }

        public function getNome(){
            return $this->nome;
        }

        public function getCognome(){
            return $this->cognome;
        }

    }

?>