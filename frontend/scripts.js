const { createApp } = Vue;

createApp({
    data() {
        return {
            prova: 'prova'
        };
    },
    mounted() {
    axios
        .get('http://localhost/php/php-todo-list-json/frontend/index.php')
        .then((res) => {
            console.log (res.data);
        });
}
})
    


