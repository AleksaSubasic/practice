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
        <div class="alert alert-light task d-flex flex-column">
          <form action="models/markAsDone.php?" method="post" class="d-flex flex-column taskForm">
            <input type="text" id="titleTask" name="titleTask" class="text-body-secondary border-0 fs-4" placeholder="Task title" value="<?= $task->title ?>" />
            <hr class="my-2 my-hr" />
            <textarea name="descTask" id="descTask" maxlength="1000" minlength="3" class="text-body-secondary border-0" placeholder="Type here..." rows="5" draggable="no"><?= $task->description ?></textarea>
            <input type="hidden" name="id" value="<?= $task->id ?>" />
            <div class="d-flex align-self-end mt-auto">
              <button type="button" class="btn btn-outline-dark me-3 editBtn" data-id="<?= $task->id ?>">Update</button>
              <button type="submit" class="btn btn-dark align-self-end mt-auto">Mark as done</button>
            </div>
          </form>
        </div>
      <?php endforeach; ?>

    <?php else: ?>
      <!-- Else show no data message -->
      <p class="alert alert-dark text-center p-2">No tasks!</p>
    <?php endif; ?>

  </div>
</div>

<?php
include("templates/footer.php");
?>
