<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1><?= $business['brand'] ?></h1>
    <ul>
        <?php foreach ($business['colors'] as $color): ?>
            <li>Color : <?= $color; ?></li>

        <?php endforeach; ?>
    </ul>

</body>

</html>