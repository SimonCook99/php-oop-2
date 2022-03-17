<?php

    require_once __DIR__ . "/classes/carta-di-credito.php";
    require_once __DIR__ . "/classes/cibo.php";
    require_once __DIR__ . "/classes/cuccia.php";
    require_once __DIR__ . "/classes/gioco.php";
    require_once __DIR__ . "/classes/antipulce.php";
    require_once __DIR__ . "/classes/utenteRegistrato.php";

    //array che conterrà tutti gli utenti presenti
    $listaUtenti=[];

    //utente user generico, non registrato e quindi con sconto a 0
    $utenteNonRegistrato = new user("Marco", "Rossi", "Marco@prova.it", "12345", 2025);

    //utente registrato, che estende l'utente normale ma settando lo sconto in fase di construct
    $utenteRegistrato = new utenteRegistrato("Pippo", "Bianchi", "Pippo@bianchi.it", "5678", 2020);

    $utenteCheHaInseritoMaleLaCarta = new user("Tizio", "distratto", "tiziodistratto@prova.it", "4124", "asdfsdgsd");

    $listaUtenti[] = $utenteNonRegistrato;
    $listaUtenti[] = $utenteRegistrato;

    $listaUtenti[] = $utenteCheHaInseritoMaleLaCarta;

    //scorro all'interno dell'array, e controllo l'anno di scadenza di ogni utente
    foreach ($listaUtenti as $utente){
        ControllaScadenzaCarta($utente);
    }


    var_dump($utenteNonRegistrato);
    var_dump($utenteRegistrato);

    //classe cibo che estende la classe product, senza precisare i grammi per confezione
    $ciboGatto = new cibo(15, "gatto", 200);
    var_dump($ciboGatto);

    //ulteriore classe cibo precisando anche i grammi per confezione
    $ciboCane = new cibo(10, "cane", 200, 310);
    var_dump($ciboGatto);

    //classe cuccia che estende product, sena precisare il colore
    $cucciaCane = new cuccia(120, "cane", 25, 30);
    var_dump($cucciaCane);

    //classe gioco che estende product, che specifica la tipologia
    $giocoGatto = new gioco(30, "gatto", "palla");
    var_dump($giocoGatto);


    function ControllaScadenzaCarta($utente){

        try{

            //Se l'anno di scadenza non è un numero lancio un'eccezione, altrimenti continuo la logica
            if(!is_numeric($utente->cartaDiCredito->getAnnoScadenza())){
                throw new Exception("Anno inserito non valido");
            }else{
                if(date("Y") < $utente->cartaDiCredito->getAnnoScadenza()){
                    echo "<h1>L'utente {$utente->getNome()} {$utente->getCognome()} può comprare </h1>";
                }else{
                    echo "<h1>L'utente {$utente->getNome()} {$utente->getCognome()} NON può comprare </h1>";
                }
            }
        }catch(Exception $e){
            if(!is_numeric($utente->cartaDiCredito->getAnnoScadenza())){
                echo $e->getMessage();
            }
        }
    }


    //faccio il try della creazione dell'oggetto, per verificarne la disponibilità
    try{
        //provo ad aggiungere il prodotto antipulce, e il costruttore della classe verificherà la disponibilità dell'articolo in base al mese corrente
        $antipulce = new antipulce(20, "qualsiasi");
        var_dump($antipulce);
    }catch (Exception $e){
        echo $e->getMessage();
    }
    

    


?>