<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggen</title>
    <link href="../style.css" rel="stylesheet">
</head>
<body>

<header>
    <img src="../assets/logo.png" alt="Logo">
</header>

<h1>Inloggen</h1>

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

    <button type="submit" class="knop">Inloggen</button>

    <p>Nog geen account? <a href="registreren.php"><u>Registreer hier</u></a></p>
    <p><a href="recept.php"><u>Terug naar recepten</u></a></p>
</form>

</body>
</html>
