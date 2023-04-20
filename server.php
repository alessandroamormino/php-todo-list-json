<?php 
//  Reperisco il file JSON
$todosJSON = file_get_contents('todos.json');

// Trasformo il file JSON in un Array PHP
$todos = json_decode($todosJSON);

// Faccio i miei calcoli

// Specifico che da ora in poi il file server.php sarà un JSON
header('Content-type: application/json');

// Ritrasformo l'array in un file JSON
echo json_encode($todos);
