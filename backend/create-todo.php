<?php
//recuperare todo esistenti
$allTodoJson = file_get_contents('db/todos.json');

//trasformazione stringa json ai todo esistenti in un array associativo
$allTodos = json_decode($allTodosJson, true);

//creazione nuovo todo
$newTodo = [
    'task' => $_POST['task'],
    'status' => false
];

//aggiungerlo all'array
$allTodos[] = $newTodo;

//ri-trasformare l'array in una stringa json
$allTodosNewJson =json_encode($allTodos);

//scrivere stringa json nel file todos.json
file_put_contents('ds/todos.json', $allTodosNewJson);