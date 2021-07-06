<?php

$todos = json_decode(file_get_contents('./todos.json'), true);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Todo App</title>
</head>
</head>


<body>
    <div class="back">
        <h1><a href="http://filipszymanski.eu/">Back to the main site!</a></h1>
    </div>

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
                <div class="todo-content">
                    <h2 class="title"><?php echo $todos[$i]["title"] ?></h2>
                    <h4 class="creator">Added by: <?php echo $todos[$i]["creator"] ?></h4>
                    <p class="description"><?php echo $todos[$i]["description"] ?></p>
                </div>

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