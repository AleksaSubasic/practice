<!-- Main Page -->
<?php
include("templates/head.php");
$data = getOngoingTasks();
?>

<h1 class="text-dark text-center my-5">Add new tasks</h1>

<div class="container d-flex align-items-center justify-content-center">
  <div class="container d-flex flex-column align-items-center">

    <div class="alert alert-light task d-flex flex-column">
      <form action="models/createNewTask.php" method="post" class="d-flex flex-column">
        <input type="text" id="titleTask" name="titleTask" class="text-body-secondary border-0 fs-4" placeholder="Task title" />
        <hr class="my-2 my-hr" />
        <textarea name="descTask" id="descTask" maxlength="1000" minlength="3" class="text-body-secondary border-0" placeholder="Type here..." rows="5" draggable="no"></textarea>
        <button type="submit" class="btn btn-dark align-self-end mt-auto">Create</button>
      </form>
    </div>

    <!-- Show data -->
    <?php if (!empty($data)): ?>
      <?php foreach ($data as $task): ?>
        <div class="alert <?= $task->isDone ? 'alert-success' : 'alert-light' ?> task d-flex flex-column">
          <h4><?= $task->title; ?></h4>
          <p><?= $task->description; ?></p>
          <div class="d-flex align-self-end mt-auto">
            <button class="btn btn-outline-dark me-3 editBtn" data-taskid="<?= $task->id ?>" data-bs-toggle="modal" data-bs-target="#editTaskModal">Edit</button>
            <a href="models/markAsDone.php?id=<?= $task->id ?>" class="btn <?= $task->isDone ? 'btn-success disabled' : 'btn-dark' ?>"><?= $task->isDone ? 'Completed' : 'Mark as done' ?></a>
          </div>
        </div>
      <?php endforeach; ?>

    <?php else: ?>
      <!-- Else show no data message -->
      <p class="alert alert-dark text-center p-2">No tasks!</p>
    <?php endif; ?>

  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editTaskModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit task</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-light task d-flex flex-column">
          <h4>Task title</h4>
          <p><?= $task->description; ?></p>
          <div class="d-flex align-self-end mt-auto">
            <button class="btn btn-outline-dark me-3" data-bs-toggle="modal" data-bs-target="#editTaskModal">Edit</button>
            <a href="models/markAsDone.php?id=<?= $task->id ?>" class="btn <?= $task->isDone ? 'btn-success disabled' : 'btn-dark' ?>"><?= $task->isDone ? 'Completed' : 'Mark as done' ?></a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark">Save</button>
      </div>
    </div>
  </div>
</div>

<?php
include("templates/footer.php");
?>
