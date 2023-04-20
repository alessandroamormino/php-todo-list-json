<?php 
// Controllo se sto ricevendo una chiamata POST per aggiungere un nuovo task
if(isset($_POST['newTodo'])) {
  //  Reperisco il file JSON
  $todosJSON = file_get_contents('todos.json');

  // Trasformo il file JSON in un Array PHP
  $todos = json_decode($todosJSON);

  // Pusho il nuovo ToDo nell'array
  // creo un nuovo array letterale
  $obj = [
    "name" => $_POST['newTodo'],
    "status" => false
  ];
  // pusho il nuovo array/oggetto nell'array esistente
  $todos[] = $obj;

  // Ritrasformo l'array in un file JSON
  $newTodo = json_encode($todos);

  // Salvo il nuovo ToDo nel file JSON
  file_put_contents('todos.json', $newTodo);

} elseif(isset($_POST['name']) && isset($_POST['status'])){
  //  Reperisco il file JSON
  $todosJSON = file_get_contents('todos.json');

  // Trasformo il file JSON in un Array PHP
  $todos = json_decode($todosJSON);

  // Pusho il Todo nell'array modificandolo
  // creo un nuovo array letterale

  if($_POST['status']=='true'){
    $obj = [
      "name" => $_POST['name'],
      "status" => true,
    ];
  } else {
    $obj = [
      "name" => $_POST['name'],
      "status" => false,
    ];
  }

  // pusho il nuovo array/oggetto nell'array esistente
  $todos[$_POST['index']] = $obj;

  // Ritrasformo l'array in un file JSON
  $newTodo = json_encode($todos);

  // Salvo il nuovo ToDo nel file JSON
  file_put_contents('todos.json', $newTodo);
} else {
  //  Reperisco il file JSON
  $todosJSON = file_get_contents('todos.json');
  
  // Trasformo il file JSON in un Array PHP
  $todos = json_decode($todosJSON);
  
  // Faccio i miei calcoli
  
  // Specifico che da ora in poi il file server.php sarà un JSON
  header('Content-type: application/json');
  
  // Ritrasformo l'array in un file JSON
  echo json_encode($todos);
}
