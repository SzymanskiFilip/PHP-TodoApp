<?php

if (isset($_POST["todo_id"])) {
    $id_to_delete = $_POST["todo_id"];

    //opens files
    $jsonData = file_get_contents("todos.json");
    $json = json_decode($jsonData, true);

    //removes the element with the given id
    unset($json[$id_to_delete]);
    $newArr = array_values($json);

    //creates new JSON object with new array values
    $final = json_encode($newArr);

    //overrides JSON file with the new Array
    file_put_contents("./todos.json", $final);
}

header("Location: index.php");
