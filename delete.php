<?php

    include "connect.php";

    $id = $_GET['id'];
    $query = "DELETE FROM tasks WHERE task_id='$id';";
    $result= mysqli_query($conn,$query);
    if($result){
        header("location:index.php");
    }

?>