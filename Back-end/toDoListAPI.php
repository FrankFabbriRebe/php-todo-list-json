<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Headers: X-Requested-With");
//URL da modificare 
header("Access-Control-Allow-Origin: http://localhost:5173");

$toDoList = [

    [
        "text" => "Fare la spesa",
        "completed" => false,
    ],

    [
        "text" => "Fare il bucato",
        "completed" => false,
    ],

    [
        "text" => "Fare il letto",
        "completed" => false,
    ]

];

$jsonToDoList = json_encode($toDoList);
echo $jsonToDoList;
file_put_contents("toDoList.json", $jsonToDoList);

?>