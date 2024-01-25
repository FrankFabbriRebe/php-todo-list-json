<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Headers: X-Requested-With");
//URL da modificare 
header("Access-Control-Allow-Origin: http://localhost:5173");

$toDoList = ["Fare la spesa", "Buttare la spazzatura", "Collaudo macchina"];

$jsonToDoList = json_encode($toDoList);
// echo $jsonToDoList;
file_put_contents("toDoList.json", $jsonToDoList);

?>