<?php $path = basename($_SERVER['REQUEST_URI']); ?>
<div class="container">
    <header class="d-flex justify-content-center mt-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.php" class="nav-link <?= $path == 'index.php' ? 'text-bg-dark' : 'text-dark' ?>">Tasks</a></li>
            <li class="nav-item"><a href="completedTasks.php" class="nav-link <?= $path == 'completedTasks.php' ? 'text-bg-dark' : 'text-dark' ?>">Completed</a></li>
        </ul>
    </header>
</div>
