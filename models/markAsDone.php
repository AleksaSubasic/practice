<?php
include("../connection/conn.php");
include("functions.php");

$id = $_POST['id'];

$res = markTaskAsDone($id);

if ($res) {
    header("Location: ../index.php");
    exit();
} else {
    http_response_code(500);
    echo "Error: check connection or query!";
}
