<?php
    include "connect.php";

    $query = "SELECT * from tasks;";
    $result = mysqli_query($conn,$query);

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
    <div class="container">
        <form action="addtask.php" method="post">
        <div class="task-input">
            
                <input type="text" name="task" id="taskInput" placeholder="Enter a new task..."> <br><br>
                <input type="datetime-local" name="deadline" id="deadlineInput">
                <button id="addTaskBtn" type="submit">Add Task</button>
                
            </div>
        </form>
       
        <!-- ... Header and task input field as before ... -->
        <table id="taskTable">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Deadline</th>
                    <th>Added On</th>
                    <th>Actions</th>
                </tr>

            </thead>
            <tbody>
                <!-- Dummy Task Data -->
                <?php 
                    while ($row=mysqli_fetch_assoc($result)) {

                        $urldelete = "delete.php?id=".$row['task_id'];
                        $urlupdate = "update.php?id=".$row['task_id'];
                        echo"<tr>".
                        "<td>".$row['taskname']."</td>".
                       " <td>".$row['deadline']."</td>".
                       " <td>".$row['addedon']."</td>".
                       '<td class="action-buttons">
                       <a href="'.$urldelete.'"><button style="background-color:#dc3545;color:#fff" class="delete-btn">Delete</button></a>
                       <a href="'.$urlupdate.'"><button style="background-color:#198754;color:#fff" class="update-btn">Update</button></a>
                        </td></tr>';
                    }
                
                
                ?>






            </tbody>
        </table>
    </div>
    <footer>
        <p>&copy; Created with ❤️ by Paras Dubey</p>
    </footer>
    <script>
    // JavaScript code to handle task addition, deletion, and update will go here
    </script>
</body>

</html>