<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Todo List JSON</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- Axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>

<div id="app">
  <div class="centered">
    <ul>
      <li v-for="(todo, index) in todos">
        <span @click="completeTask(todo, index);" :class="todo.status ? 'done' : ''">{{todo.name}}</span>
        <!-- <span @click="deleteTask(index)">X</span> -->
      </li>
    </ul>
    <form action="index.php" method="GET">
      <label for="newTodo">Inserisci un nuovo ToDo:</label>
      <input v-model="newTodo" type="text" name="newTodo" id="newTodo" required>
      <button type="submit" @click="addTodo()">Aggiungi</button>
    </form>
  </div>
</div>

  
<!-- Scripts -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="js/script.js"></script>
</body>
</html>