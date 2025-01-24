<!-- Main Page -->
<?php
include("templates/head.php");
$data = getCompletedTasks();
?>

<h1 class="text-dark text-center my-5">Completed tasks</h1>

<div class="container d-flex align-items-center justify-content-center">
    <div class="container d-flex flex-column align-items-center">

        <!-- Show data -->
        <?php if (!empty($data)): ?>
            <?php foreach ($data as $task): ?>
                <div class="alert <?= $task->isDone ? 'alert-light' : 'alert-light' ?> task d-flex flex-column">
                    <h4><?= $task->title; ?></h4>
                    <p><?= $task->description; ?></p>
                    <div class="d-flex align-self-end mt-auto">
                        <a href="#" class="btn btn-outline-danger me-3">Delete</a>
                        <a href="models/markAsDone.php?id=<?= $task->id ?>" class="btn <?= $task->isDone ? 'btn-dark disabled' : 'btn-dark' ?>"><?= $task->isDone ? 'Completed' : 'Mark as done' ?></a>
                    </div>
                </div>
            <?php endforeach; ?>

        <?php else: ?>
            <!-- Else show no data message -->
            <p class="alert alert-warning text-center p-2">No tasks! Create one <a href="index.php">here</a>.</p>
        <?php endif; ?>

    </div>
</div>

<?php
include("templates/footer.php");
?>
