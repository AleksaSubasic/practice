<?php 
try {
    $server = "localhost";
    $dbname = "furni_php";
    $username = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8; $username, $password");
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    echo "Greska: " . $ex->getMessage();
}
