<?php require_once "views/partials/header.php"; ?>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Actions</th>
    </tr>
    </thead>
    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?= $post->id ?></td>
            <td><?= $post->title ?></td>
            <td><a href="/posts/show?id=<?= $post->id ?>" class="btn btn-info">Show</a> <a href="/posts/show?id=<?=
                $post->id ?>" class="btn btn-danger">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>


<?php require_once "views/partials/footer.php"; ?>
