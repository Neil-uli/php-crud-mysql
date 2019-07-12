<?php
include ("db.php");

if (isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO tasks(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);

    if (!$result){
        die("Query failed");
    }

    $_SESSION['message'] = "Task saved succefully";
    $_SESSION['message_type'] = 'success';

    header("location: index.php");
    
}