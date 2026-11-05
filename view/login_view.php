<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggen</title>
    <link href="../style.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Pixelify+Sans:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
    </style>
</head>
<body>
<form method="post" class="formulier">
    <p class="fout"><?= $melding ?></p>

    <div class="form-container">
        <h1>Inloggen</h1> <br>
        <label>
            <input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam" required>
        </label>

        <label>
            <input type="password" name="wachtwoord" placeholder="Wachtwoord" required>
        </label>

        <button type="submit" class="knop">Inloggen</button>
        <br>

        <p>Nog geen account? <a href="registreren.php"><u>Registreer hier</u></a></p>
        <p><a href="recept.php"><u>Terug naar recepten</u></a></p>
    </div>
</form>

</body>
</html>
