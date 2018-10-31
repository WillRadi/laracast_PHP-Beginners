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
    <br><br>
    System users:
    <ul>
        <?php foreach($names as $name) : ?>
            <li>
                <?= $name->name ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h1>Submit your name</h1>

    <form method="POST" action="/name">

        <input type="text" name="name">

        <button type="submit">Enviar</button>
    </form>
<?php require "parcials/footer.php" ?>