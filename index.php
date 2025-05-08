<?php
$task=[];
if (isset($_POST['task'])) {
    $task[] = $_POST['task'];}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
</head>
<body>
    <div class="tasks">
        <h1>Lista de tareas</h1>
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
    </div>
    <?php echo $task[0]; ?><br>

        <form action="" method="post">
            <input type="text" name="task" placeholder="Agregar tarea">
            <input type="submit" value="Agregar">
        </form>
   
    
</body>
</html>