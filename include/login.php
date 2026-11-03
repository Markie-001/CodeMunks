<?php
session_start();
require __DIR__ . '/../config.php';

$melding = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Zoek de gebruiker op
    $query = "SELECT * FROM gebruikers WHERE gebruikersnaam = :naam";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':naam', $_POST['gebruikersnaam']);
    $stmt->execute();
    $gebruiker = $stmt->fetch();

    // Controleer het wachtwoord
    if ($gebruiker && password_verify($_POST['wachtwoord'], $gebruiker['wachtwoord'])) {
        $_SESSION['gebruiker'] = $gebruiker['gebruikersnaam'];
        header('Location: recept.php');
        exit;
    } else {
        $melding = "Verkeerde gebruikersnaam of wachtwoord.";
    }
}
include __DIR__ . '/../view/login_view.php';
