<?php
session_start();

// Alleen ingelogde gebruikers mogen recepten toevoegen
if (!isset($_SESSION['gebruiker'])) {
    header('Location: login.php');
    exit;
}

require __DIR__ . '/../config.php';

$melding = '';

// Haal alle categorieën op voor de dropdown
$categorieen = $conn->query("SELECT * FROM categorie")->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $foto = '';
    // Foto opslaan (als er een is gekozen)
    if (!empty($_FILES['foto']['name'])) {
        $foto = basename($_FILES['foto']['name']);
        if (!move_uploaded_file($_FILES['foto']['tmp_name'], __DIR__ . '/../assets/' . $foto)) {
            $melding = 'De foto kon niet worden opgeslagen.';
        }
    }
    // Recept opslaan
    if ($melding === '') {
        $stmt = $conn->prepare("INSERT INTO demo_recept (gerecht, beschrijving, ingredienten, instructie, foto, categorie_id)
                                VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$_POST['gerecht'], $_POST['beschrijving'], $_POST['ingredienten'],
            $_POST['instructie'], $foto, $_POST['categorie_id']]);

        header('Location: recept.php');
        exit;
    }
}
include __DIR__ . '/../view/view_toevoegen.php';
