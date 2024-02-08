const { createApp } = Vue;

createApp({
        data() {
            return {
                task: [],
            };
    },
    mounted() {
        axios
            .get('http://localhost/php/Php-todo-list-json/backend/index.php')
            .then((res) => {
                console.log (res);
                this.task = res.data;
            });
        }
}).mount('#app');