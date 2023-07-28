<?php

    include "connect.php";
    $id=$_POST['id'];
    echo $id;
    
    $newtask=$_POST['task'];
    $newdeadline =$_POST['deadline'];

    $newdeadline = date('d-M-Y h:i:s a', strtotime($newdeadline)) ;


    $sql="UPDATE tasks set taskname='$newtask', deadline = '$newdeadline' WHERE task_id='$id';";

    $res = mysqli_query($conn,$sql);

    if ($res) {
        header("location: index.php");
    }
?>