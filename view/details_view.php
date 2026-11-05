<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recept details</title>
    <link href="style.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Pixelify+Sans:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
    </style>
</head>
<body>

<header>
    <img src="assets/logo.png" alt="Logo">
</header>

<div class="details">
    <div class="helft">
        <div class="tabs">
            <a href="?id=<?= $recept['id'] ?>&tab=beschrijving" class="<?= $tab == 'beschrijving' ? 'actief' : '' ?>">Beschrijving</a>
            <a href="?id=<?= $recept['id'] ?>&tab=ingredienten" class="<?= $tab == 'ingredienten' ? 'actief' : '' ?>">Ingrediënten</a>
            <a href="?id=<?= $recept['id'] ?>&tab=instructie" class="<?= $tab == 'instructie' ? 'actief' : '' ?>">Instructie</a>
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