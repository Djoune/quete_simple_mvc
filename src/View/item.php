<!DOCTYPE html>
<html>
<head> ... </head>
<body>
<section>
    <h1>Items</h1>
    <ul>
        <?php foreach ($itemManager as $item) : ?>
            <li><a href='item/<?= $item['id'] ?>'><?= $item['title'] ?></a></li>
        <?php endforeach ?>
    </ul>
    <a href="/categories">Back to category</a>
</section>
</body>
</html>

