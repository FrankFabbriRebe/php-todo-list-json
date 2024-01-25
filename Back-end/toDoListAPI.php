<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Headers: X-Requested-With");
//URL da modificare 
header("Access-Control-Allow-Origin: http://localhost:5173");

$toDoList = [
    ['task' => 'Fare la spesa'],
    ['task' => 'Buttare la spazzatura'],
    ['task' => 'Collaudo macchina']
];

$jsonToDoList = json_encode($toDoList);
echo $jsonToDoList;
file_put_contents("toDoList.json", $jsonToDoList);

?>