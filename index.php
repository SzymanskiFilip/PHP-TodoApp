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
    <div class="form" action="addtodo.php">
        <form action="">
            <label for="creator">Creator: </label><br>
            <input type="text" placeholder="Ex. David"><br>

            <label for="creator">Title: </label><br>
            <input type="text"><br>

            <label for="todo">Description: </label><br>
            <textarea name="todo" id="todo"></textarea><br>

            <button>SUBMIT</button>
        </form>
    </div>

    <div class="todos">
        <div class="todo">
            <h2>Todo</h2>
            <h4>Added by: Creator</h4>
            <p>Description</p>
            <button class="del-btn">DELETE</button>
            <div class="panel">
                <label for="checked">Done: </label>
                <input type="checkbox">
            </div>
        </div>
    </div>
</body>

</html>