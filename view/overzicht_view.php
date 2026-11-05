<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recepten</title>
    <link href="../style.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Pixelify+Sans:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
    </style>
</head>
<body>

<header>
    <img src="../assets/logo.png" alt="Logo">

    <?php if (isset($_SESSION['gebruiker'])): ?>
        <span>Hoi <?= $_SESSION['gebruiker'] ?> | <a href="uitloggen.php"><u>Uitloggen</u></a></span>
    <?php else: ?>
        <a href="login.php"><u>Inloggen</u></a>
    <?php endif; ?>
</header>

<?php if (isset($_SESSION['gebruiker'])): ?>
    <div class="midden">
        <a href="recept_toevoegen.php" class="knop">Recept toevoegen</a>
    </div>
<?php endif; ?>

<section class="inhoud">
    <h2>Nieuwste recepten blogs</h2>

    <div class="filters">
        <a href="recept.php" class="filter">Alles</a>
        <?php foreach ($categorieen as $cat): ?>
            <a href="recept.php?categorie=<?= $cat['id'] ?>" class="filter"><?= $cat['naam'] ?></a>
        <?php endforeach; ?>
    </div>

    <div class="recepten">
        <?php foreach ($recepten as $rij): ?>
            <div>
                <a href="../recept_details.php?id=<?= $rij['id'] ?>">
                    <img src="../assets/<?= $rij['foto'] ?>" class="foto">
                </a>

                <div class="balk">
                    <span>
                        <div class="gerecht-recept"><?= $rij['gerecht'] ?><br></div>
                        <div class="categorie-gerecht"><small><?= $rij['categorie'] ?></small></div>
                    </span>

                    <?php if (isset($_SESSION['gebruiker'])): ?>
                        <a href="recept_verwijderen.php?id=<?= $rij['id'] ?>" class="verwijder"
                           onclick="return confirm('Weet je zeker dat je dit recept wilt verwijderen?')">
                            Verwijderen
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
</body>
</html>