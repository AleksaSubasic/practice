<?php

include('../connection/conn.php');
include('functions.php');

$id = $_GET['id'];
$title = $_GET['title'];
$desc = $_GET['desc'];

$res = updateTask($id, $title, $desc);

if ($res) {
    header("Location: ../index.php");
} else {
    http_response_code(500);
    echo "Error: check connection or query!";
}
