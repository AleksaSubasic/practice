<?php
include("../connection/conn.php");
include("functions.php");

$title = $_POST['titleTask'];
$desc = $_POST['descTask'];

$res = addNewTask($title, $desc);

if ($res) {
    header("Location: ../index.php");
    exit();
} else {
    http_response_code(500);
    echo "Error: check connection or query!";
}
