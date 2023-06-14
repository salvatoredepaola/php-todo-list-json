<?php

//impostiamo l'header che avvisa del contenuto json
header('content-Type: application/json');

//leggiamo il contenuto del file json. todoList è una stringa json
$toDoList = file_get_contents('dati.json');

//creiamo array php decodificando il json (deserializzazione)
//ricordate il booleano a true se usate degli array associativi (!!!)
$todoListDati = json_decode($todoList, true);

//possiamo usare l'array come un normalissimo array php
$todoListDati[] = "ulteriore dato";
// $todoListDati[4] = "sostituto";

//serializziamo il nostro array PHP come una stringa JSON
//sovrascriviamo la vecchia stringa con una nuova, con dati aggiornati
$todoList = json_encode($todoListDati);

//restituiamo il JSON a chi ci ha chiamato
echo $toDoList;
?>