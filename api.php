<?php

//impostiamo l'header che avvisa del contenuto json
header('content-Type: application/json');

//leggiamo il contenuto del file json. todoList è una stringa json
$toDoList = file_get_contents('dati.json');

//creiamo array php decodificando il json (deserializzazione)
//ricordate il booleano a true se usate degli array associativi (!!!)
$todoListDati = json_decode($toDoList, true);

//possiamo usare l'array come un normalissimo array php
// $todoListDati[] = "ulteriore dato";
// $todoListDati[4] = "sostituto";
if(isset($_POST["newTask"])) {
    $todoListDati[] = [
        "text" => $_POST["newTask"],
        "done" => false
    ];
    
    file_put_contents('dati.json', json_encode($todoListDati));

}else if(isset($_POST["elimina"])) {
    // svuota
    // $todoListDati[$_POST["elimina"]] = "";
    // elimina completamente
    // array_splice($todoListDati, $_POST["elimina"], 1);
    $todoListDati[$_POST["elimina"]]["done"] = !$todoListDati[$_POST["elimina"]]["done"];
    file_put_contents('dati.json', json_encode($todoListDati));
}

//serializziamo il nostro array PHP come una stringa JSON
//sovrascriviamo la vecchia stringa con una nuova, con dati aggiornati
$toDoList = json_encode($todoListDati);

//restituiamo il JSON a chi ci ha chiamato
echo $toDoList;
?>