<?php

$db = file_get_contents('db.json');
    
$tasks = json_decode($db, true);

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
echo $db;