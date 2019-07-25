<?php
$group_statement = $pdo->prepare("EXPLAIN SELECT * FROM forum_groups");
$group_statement->execute();
?>

  <?php foreach ($row = $group_statement->fetchALL()) {?>
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
