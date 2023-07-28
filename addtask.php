<?php

    include "connect.php";

    print_r($_POST);

    $task = $_POST['task'];
    date_default_timezone_set('Asia/Kolkata');
    
    $deadline = date('d-M-Y h:i:s a', strtotime($_POST['deadline'])) ;
    

    $currentTime = date('d-M-Y h:i:s a');

    $query = "INSERT INTO tasks (taskname, deadline, addedon) VALUES ('$task', '$deadline', '$currentTime');";

    $result = mysqli_query($conn,$query);

    if($result){
        header("location:index.php");
    }else {
        echo mysqli_error($conn);
    }
    

    
?>


