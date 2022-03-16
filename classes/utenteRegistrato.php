<?php

    require_once __DIR__ . "/utente.php";

    class utenteRegistrato extends user{

        public $registrato = true;

        public function __construct($nome, $cognome, $mail, $numeroCarta, $dataScadenza){
            
    
            parent::__construct($nome, $cognome, $mail, $numeroCarta, $dataScadenza);

            parent::setSconto(20);
        }
    }

?>