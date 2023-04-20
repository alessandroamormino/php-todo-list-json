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
      <li v-for="todo in todos">
        {{todo}}
      </li>
    </ul>
  </div>
</div>

  
<!-- Scripts -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="js/script.js"></script>
</body>
</html>