<?php require "parcials/header.php" ?>
    <br>
    ToDo List: <br>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if($task->completed) : ?>
                    <strike><?= $task->description; ?></strike> 
                <?php else : ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php require "parcials/footer.php" ?>