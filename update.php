
<?php
    include "connect.php";

    $id = $_GET['id'];
    $query =  "SELECT * from tasks WHERE task_id='$id';";

    $res = mysqli_query($conn, $query);

    $fetchedrow = mysqli_fetch_assoc($res);

    $task = $fetchedrow['taskname'];
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Task Manager</h1>
    </header>

    <h2 align='center'>UPDATE TASK</h2>
    <div class="container">

        <form action="updateprocessing.php" method="POST">
            <div class="task-input">
                    <input type="number" name="id" value="<?php echo $id; ?>" style="display:none">
                    <input type="text" name="task" id="taskInput" value="<?php echo $task; ?>"> <br><br>
                    <input type="datetime-local" name="deadline" id="deadlineInput">
                    <button id="addTaskBtn" type="submit">Update</button>
                    
            </div>
        </form>
    </div>

    <footer>
        <p>&copy; Created with ❤️ by Paras Dubey</p>
    </footer>
</body>
</html>