<?php

$todosJson = file_get_contents('db/todos.json');
    
$todoArrays = json_decode($todosJson, true);

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

echo $todosJson;