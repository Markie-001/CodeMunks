<?php
session_start();

// Alleen ingelogde gebruikers mogen recepten verwijderen
if (!isset($_SESSION['gebruiker'])) {
    header('Location: login.php');
    exit;
}

require __DIR__ . '/../config.php';

// lees het ID uit de URL
$ID = $_GET['id'];
try {
    $query = "DELETE FROM demo_recept WHERE id = :ID";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':ID', $ID);
    $stmt->execute();

    // Controleer of het is gelukt
    if ($stmt->rowCount()) {
        $resultaat = "Het recept is verwijderd!";
    } else {
        $resultaat = "Er is iets fout gegaan bij het verwijderen van het recept.";
    }
    include __DIR__ . '/../view/recept_verwijderen_view.php';
} catch (PDOException $e) {
    // Foutafhandeling als de query niet wordt uitgevoerd
    echo "<p>FOUT!</p>";
    echo "<p>Query: " . $query . "</p>";
    echo "<p>Foutmelding: " . $e->getMessage() . "</p>";
    exit;
}
