<?php

if (isset($_POST ['task'])) {
    //recuperare todo esistenti
    $allTodosJson = file_get_contents('db/todos.json');

    //trasformazione stringa json ai todo esistenti in un array associativo
    $allTodos = json_decode($allTodosJson);

    //creazione nuovo todo
    $newTodo = [
        'task' => $_POST['task'],
        'status' => false
    ];

    //aggiungerlo all'array
    $allTodos[] = $newTodo;

    //ri-trasformare l'array in una stringa json
    $allTodosNewJson = json_encode($allTodos);

    //scrivere stringa json nel file todos.json
    file_put_contents('db/todos.json', $allTodosNewJson);

    echo json_encode([
        'message' => 'ok',
        'code' => 200,
    ]);

    header("Access-Control_Allow-Origin: *");
}
else {
    echo json_encode([
        'message' => 'Dati non validi',
        'code' => 400,
    ]); 
}