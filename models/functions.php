<!-- CRUD operations goes here -->
<?php

function getAnyTable($tableName)
{
    global $conn;
    $query = "SELECT * FROM $tableName";

    $res = $conn->query($query)->fetchAll();
    return $res;
}
?>
