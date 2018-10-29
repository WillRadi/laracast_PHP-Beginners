<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 3</title>
</head>
<body>
    
    <p><?= $greeting; ?></p>
    <p>I knew you like the following animals:</p>
    <ul>
        <?php foreach($animals as $animal) : ?>
            <li> <?= $animal; ?> </li>
        <?php endforeach; ?>
    </ul>
    
    Your today's task is:
    <ul>
        <li>
            <strong>Task: </strong> <?= $task['title']; ?>
        </li>
        <li>
            <strong>Due date: </strong> <?= $task['due']; ?>
        </li>
        <li>
            <strong>Assignet to: </strong> <?= $task['assigned_to']; ?>
        </li>
        <li>
            <strong>Completed: </strong> <?= $task['completed'] ? 'Completed! o/' : 'Incomplete'; ?>
        </li>
    </ul>

    =======
    <br>
    Pode entrar: <br>
    <p>
        <?= $canPass ? 'Pode entrar' : 'Não pode entrar'; ?>
    </p>
    =======
    <br>
    ToDo List: <br>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if($task->isComplete()) : ?>
                    <strike><?= $task->getDescription(); ?></strike> 
                <?php else : ?>
                    <?= $task->getDescription(); ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>