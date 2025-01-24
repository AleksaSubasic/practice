<?php
include("../connection/conn.php");
include("functions.php");

$id = $_GET['id'];

$res = deleteTask($id);
if ($res) {
    header("Location: ../completedTasks.php");
} else {
    http_response_code(500);
    echo "Error: check connection or query!";
}
