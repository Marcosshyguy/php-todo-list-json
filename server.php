<?php
// prendo file json tramite percorso e lo converto in stringa con file_get_contents
$json_string = file_get_contents("./json/todo.json");

// decodifico il file convertito in stringa in un array php  con json_decode
$todo_list = json_decode($json_string, true);

// predispongo con header il file che dovrò prendere con get ad essere covertito in linguaggio comprensibile da js con 'Content-Type: application/json
header('Content-Type: application/json');
// ricodifico il file che deve essere chiamato con get in file json
echo json_encode($todo_list);
