<?php

$todosJson = file_get_contents('db/todos.json');

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

echo $todosJson;