<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recept details</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<header>
    <img src="assets/logo.png" alt="Logo">
</header>

<div class="details">
    <div class="helft">
        <div class="tabs">
            <a href="?id=<?= $recept['id'] ?>&tab=beschrijving">Beschrijving</a>
            <a href="?id=<?= $recept['id'] ?>&tab=ingredienten">Ingrediënten</a>
            <a href="?id=<?= $recept['id'] ?>&tab=instructie">Instructie</a>
        </div>
        <div class="vak">
            <p><?= htmlspecialchars($recept[$tab]) ?></p>
        </div>
    </div>

    <div class="helft">
        <img src="assets/<?= $recept['foto'] ?>" class="grote-foto">
        <div class="vak" style="text-align: center;">
            <?= htmlspecialchars($recept['gerecht']) ?>
        </div>
    </div>
</div>

<div class="midden">
    <a href="include/recept.php" class="knop">Terug</a>
</div>

</body>
</html>
