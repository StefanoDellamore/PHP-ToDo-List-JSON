const { createApp } = Vue;

createApp({
        data() {
            return {
                todos: [],
                newTodo: ''
            };
    },
    created() {
        axios
            .get('http://localhost/php/Php-todo-list-json/backend/todos.php')
            .then((res) => {
                console.log (res.data);
                this.todos = res.data;
            });
    },
    methods: {
        addTodo() {
            axios
                .post('http://localhost/php/Php-todo-list-json/backend/create-todo.php',
                    {
                        task: this.newTodo
                    },
                    {
                        headers: {
                            'Content-Type' : 'multipart/form-data'
                        }
                    }
                )
                .then(res => {
                    console.log(res);
                    if (res.data.code == 200) {
                        this.todos.push ({
                            task: this.newTodo,
                            status: false
                        });

                        this.newTodo = '';
                    }
                });
        }
    }
}).mount('#app');