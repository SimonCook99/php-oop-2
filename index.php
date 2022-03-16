<?php

    require_once __DIR__ . "/classes/carta-di-credito.php";
    require_once __DIR__ . "/classes/cibo.php";
    require_once __DIR__ . "/classes/cuccia.php";
    require_once __DIR__ . "/classes/gioco.php";
    require_once __DIR__ . "/classes/utenteRegistrato.php";

    //utente user generico, non registrato e quindi con sconto a 0
    $utenteNonRegistrato = new user("Marco", "Rossi", "Marco@prova.it", "12345", "gennaio 2025");

    //utente registrato, che estende l'utente normale ma settando lo sconto in fase di construct
    $utenteRegistrato = new utenteRegistrato("Pippo", "Bianchi", "Pippo@bianchi.it", "12345", "marzo 2024");


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


?>