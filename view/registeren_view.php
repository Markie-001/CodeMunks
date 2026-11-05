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

<header>
    <img src="../assets/logo.png" alt="Logo">
</header>

<h1>Registreren</h1>

<form method="post" class="formulier">
    <p class="fout"><?= $melding ?></p>

    <label>
        Gebruikersnaam:
        <input type="text" name="gebruikersnaam" required>
    </label>

    <label>
        Wachtwoord:
        <input type="password" name="wachtwoord" required>
    </label>

    <button type="submit" class="knop">Account maken</button>

    <p>Al een account? <a href="login.php"><u>Log hier in</u></a></p>
</form>

</body>
</html>
