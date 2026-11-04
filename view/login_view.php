<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggen</title>
    <link href="../style.css" rel="stylesheet">
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

        <p>Nog geen account? <a href="registreren.php"><u>Registreer hier</u></a></p>
        <p><a href="recept.php"><u>Terug naar recepten</u></a></p>
    </div>
</form>

</body>
</html>
