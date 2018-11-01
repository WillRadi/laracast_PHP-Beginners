<?php require "parcials/header.php" ?>

System users:
<ul>
    <?php foreach($names as $name) : ?>
        <li>
            <?= $name->name ?>
        </li>
    <?php endforeach; ?>
</ul>

<h1>Submit your name</h1>

<form method="POST" action="/users">

    <input type="text" name="name">

    <button type="submit">Enviar</button>
</form>
<?php require "parcials/footer.php" ?>