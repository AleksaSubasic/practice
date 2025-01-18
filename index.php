<!-- Main Page -->
<?php
include("templates/head.php");
$data = getAnyTable("user");
?>

<div class="container d-flex h-500 align-items-center justify-content-center">
  <div class="container">
    <h1 class="bg-blue text-primary text-center">Hello there!</h1>

    <?php foreach ($data as $res) : ?>
      <h3>Name: <?= $res->f_name ?> <?= $res->l_name ?></h3>
      <h3 class=" mb-4">Age: <?= $res->age ?></h3>
    <?php endforeach; ?>
  </div>
</div>

<?php
include("templates/footer.php");
?>
