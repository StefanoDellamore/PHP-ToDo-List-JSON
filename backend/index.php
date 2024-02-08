<?php

$todo = [
    [
        'name' => 'stefano',
        'last_name' => 'Della'
    ],
    [
        'name' => 'stefa',
        'last_name' => 'Del'
    ]
];

header('Content-Type: application/json');
echo json_encode($todo);