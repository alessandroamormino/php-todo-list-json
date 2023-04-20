<?php 
// Controllo se sto ricevendo una chiamata POST
if(isset($_POST['newTodo'])) {
  //  Reperisco il file JSON
  $todosJSON = file_get_contents('todos.json');

  // Trasformo il file JSON in un Array PHP
  $todos = json_decode($todosJSON);

  // Pusho il nuovo ToDo nell'array
  $todos[] = $_POST['newTodo'];

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
