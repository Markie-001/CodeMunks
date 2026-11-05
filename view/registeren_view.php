<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registreren</title>
    <link href="../style.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Pixelify+Sans:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
    </style>
</head>
<body>
<form method="post" class="formulier">
    <p class="fout"><?= $melding ?></p>

    <div class="form-container">
        <h1 class="registreren-h1">Registreren</h1>
        <label>
            <input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam" required>
        </label>

        <label>
            <input type="password" name="wachtwoord" placeholder="Wachtwoord" required>
        </label>

        <button type="submit" class="knop">Account maken</button>

        <p class="registreren-p">Al een account? <a href="login.php"><u>Log hier in</u></a></p>
    </div>
</form>

</body>
</html>
