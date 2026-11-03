<?php
require __DIR__ . '/../config.php';

$melding = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Wachtwoord versleutelen
    $hash = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);

    try {
        $query = "INSERT INTO gebruikers (gebruikersnaam, wachtwoord) VALUES (:naam, :wachtwoord)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':naam', $_POST['gebruikersnaam']);
        $stmt->bindParam(':wachtwoord', $hash);
        $stmt->execute();

        header('Location: login.php');
        exit;
    } catch (PDOException $e) {
        $melding = "Deze gebruikersnaam bestaat al.";
    }
}
include __DIR__ . '/../views/registreren_view.php';
