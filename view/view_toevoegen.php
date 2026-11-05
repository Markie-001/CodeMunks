<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recept toevoegen</title>
    <link href="../style.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Pixelify+Sans:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
    </style>
</head>
<body>

<header>
    <img src="../assets/logo.png" alt="Logo">
</header>

<h1>Jouw recepten toevoegen</h1>

<form method="post" enctype="multipart/form-data" class="formulier-toevoegen">
    <p class="fout"><?= $melding ?></p>

    <label>
        Gerecht:
        <input type="text" name="gerecht" maxlength="30" required>
    </label>

    <label>
        Categorie:
        <select name="categorie_id" required>
            <option value="">-- Kies een categorie --</option>
            <?php foreach ($categorieen as $cat): ?>
                <option value="<?= $cat['id'] ?>"><?= $cat['naam'] ?></option>
            <?php endforeach; ?>
        </select>
    </label>

    <label>
        Beschrijving:
        <textarea name="beschrijving" rows="3"></textarea>
    </label>

    <label>
        Ingrediënten:
        <textarea name="ingredienten" rows="5"></textarea>
    </label>

    <label>
        Instructie:
        <textarea name="instructie" rows="6"></textarea>
    </label>

    <label>
        Foto:
        <input type="file" name="foto">
    </label>

    <button type="submit" class="knop">Opslaan</button>
</form>

<div class="midden">
    <a href="recept.php"><u>Terug naar overzicht</u></a>
</div>

</body>
</html>
