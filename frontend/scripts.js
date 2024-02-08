const { createApp } = Vue;

createApp({
    data() {
        return {
            prova: 'prova'
        };
    },
    mounted() {
    axios
        .get('http://localhost/php/php-todo-list-json/frontend/index.html')
        .then((res) => {
            console.log (res.data);
        });
}
})
    


