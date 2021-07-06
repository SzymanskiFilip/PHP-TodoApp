<?php

if (isset($_POST["submit"])) {
    $creator = $_POST["creator"];
    $title = $_POST["title"];
    $description = $_POST["description"];

    $jsonData = file_get_contents("todos.json");
    $json = json_decode($jsonData, true);

    $tempArray = $json;
    $newTodo = array(
        'creator' => $creator,
        'title' => $title,
        'description' => $description
    );

    array_push($tempArray, $newTodo);

    $final = json_encode($tempArray);


    file_put_contents("./todos.json", $final);
}

header("Location: index.php");
