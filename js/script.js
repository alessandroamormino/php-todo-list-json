const { createApp } = Vue

createApp({
  data() {
    return {
      todos: [],
      newTodo: '',
    }
  },
  methods: {
    getTodos() {
      axios.get('./server.php').then(response => {
        this.todos = response.data;
      });
    },

    addTodo() {
      // dichiaro oggetto data 
      let data = {
        newTodo: '',
      }
      // valorizzo proprietà di data con il mio input
      data.newTodo = this.newTodo;

      // creo una chiamata POST axios che mi aggiunga nel file il nuovo todo inserito da input
      axios.post('./server.php', data, { headers: { 'Content-Type': 'multipart/form-data' } }).then(response => {
        // richiamo la funzione che fa la chiamata GET in modo da riscrivere in pagina il nuovo todo aggiunto
        this.getTodos();
      });
      // azzero la variabile dell'input
      this.newTodo = "";
    },
    completeTask(task) {
      task.status = !task.status;
    },
  },
  mounted() {
    this.getTodos();
  },

}).mount('#app')