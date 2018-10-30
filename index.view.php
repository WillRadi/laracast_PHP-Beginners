<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Todos</title>
</head>
<body>
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

</body>
</html>