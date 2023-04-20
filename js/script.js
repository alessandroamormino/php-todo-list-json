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
        console.log(response.data);
        this.todos = response.data;
      });
    },
    addTodo() {
      this.todos.push(this.newTodo);
      this.newTodo = '';
    },
  },
  mounted() {
    this.getTodos();
  },

}).mount('#app')