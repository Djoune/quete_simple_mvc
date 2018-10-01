<!DOCTYPE html>
<html>
<head> ... </head>
<body>
<section>
    <h1>Category</h1>
    <ul>
        <?php foreach ($categoryManager as $category) : ?>
            <li><a href='category/<?= $category['id'] ?>'><?= $category['name'] ?></a></li>
        <?php endforeach ?>
    </ul>
    <a href="/">Back to index list</a>
</section>
</body>
</html>
