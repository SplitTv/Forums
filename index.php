<?php
$group_statement = $pdo->prepare("SELECT * FROM forum_groups");
$group_statement->execute();
?>

  <?php while($row = $group_statement->fetch()) {?>
    <div class="card">
      <div class="card-header">
        <?php echo($row['name']); ?>
      </div>
      <div class="card-block forums-list">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <img class="forum_img" src="" />
            Title
          </li>
        </ul>
      </div>
    </div>
  <?php } ?>
