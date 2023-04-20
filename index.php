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
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div id="app">
  <div class="centered">
    <h1>ToDo List (v.2)</h1>
    <div class="card">
      <ul>
        <li v-for="(todo, index) in todos">
          <span @click="completeTask(todo, index);" :class="todo.status ? 'done' : ''">{{todo.name}}</span>
          <div class="trash">
            <span @click="deleteTask(index)"><i class="fa-solid fa-trash"></i></span>
          </div>
        </li>
      </ul>
    </div>
    <form action="index.php" method="GET">
      <input v-model="newTodo" type="text" name="newTodo" id="newTodo" required placeholder="Inserisci un nuovo ToDo:">
      <button type="submit" @click="addTodo()">Aggiungi</button>
    </form>
  </div>
</div>

  
<!-- Scripts -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="js/script.js"></script>
</body>
</html>