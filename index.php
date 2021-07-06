<?php

$todos = json_decode(file_get_contents('./todos.json'), true);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
    <title>Todo App</title>
</head>


<body>
    <div class="form">
        <form method="post" action="addtodo.php">
            <label>Creator: </label><br>
            <input name="creator" type="text" placeholder="Ex. David"><br>

            <label>Title: </label><br>
            <input name="title" type="text"><br>

            <label>Description: </label><br>
            <textarea name="description" id="todo"></textarea><br>

            <button name="submit">SUBMIT</button>
        </form>
    </div>

    <div class="todos">

        <?php

        for ($i = 0; $i < count($todos); $i++) {
        ?>

            <div class="todo">
                <h2><?php echo $todos[$i]["title"] ?></h2>
                <h4>Added by: <?php echo $todos[$i]["creator"] ?></h4>
                <p><?php echo $todos[$i]["description"] ?></p>
                <form method="post" action="deletetodo.php">
                    <input type="hidden" name="todo_id" value="<?php echo $i ?>">
                    <button class="del-btn">DELETE</button>
                </form>
            </div>


        <?php
        }

        ?>
    </div>

</body>

</html>