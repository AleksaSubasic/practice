<!-- CRUD operations goes here -->
<?php

function getOngoingTasks()
{
    global $conn;
    $query = "SELECT * FROM `tasks` WHERE isDone = 0 ORDER BY id DESC;";

    $res = $conn->query($query)->fetchAll();
    return $res;
}

function getCompletedTasks()
{
    global $conn;
    $query = "SELECT * FROM `tasks` WHERE isDone = 1 ORDER BY id DESC;";

    $res = $conn->query($query)->fetchAll();
    return $res;
}

function addNewTask($title, $desc)
{
    global $conn;
    $isDone = 0;
    $query = "INSERT INTO tasks(title, description, isDone) VALUES(?, ?, ?)";

    $ps = $conn->prepare($query);
    $ps->bindValue(1, $title, PDO::PARAM_STR);
    $ps->bindValue(2, $desc, PDO::PARAM_STR);
    $ps->bindValue(3, $isDone, PDO::PARAM_BOOL);
    $res = $ps->execute();

    return $res;
}

function markTaskAsDone($id)
{
    global $conn;
    $query = "UPDATE tasks SET isDone = 1 WHERE id = ?";

    $ps = $conn->prepare($query);
    $ps->bindValue(1, $id);
    $res = $ps->execute();

    return $res;
}

function updateTask($id, $title, $desc)
{
    global $conn;
    $query = "UPDATE tasks SET title = ?, description = ? WHERE id = ?";

    $ps = $conn->prepare($query);
    $ps->bindValue(1, $title);
    $ps->bindValue(2, $desc);
    $ps->bindValue(3, $id);
    $res = $ps->execute();

    return $res;
}

function deleteTask($id)
{
    global $conn;
    $query = "DELETE FROM tasks WHERE id = ?";

    $ps = $conn->prepare($query);
    $ps->bindValue(1, $id);
    $res = $ps->execute();

    return $res;
}
?>
