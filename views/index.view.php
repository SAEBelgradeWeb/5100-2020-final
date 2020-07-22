<?php require_once "views/partials/header.php"; ?>

<ul>
    <?php foreach ($tasks as $task): ?>
        <?php if ($task->complete): ?>
            <li><strike><?= $task->description ?></strike></li>
        <?php else: ?>
            <li><?= $task->description ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>

<?php require_once "views/partials/footer.php"; ?>