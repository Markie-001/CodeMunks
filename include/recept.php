<?php
session_start();
require __DIR__ . '/../config.php';

try {
    // Alle categorieën voor de filterknoppen
    $categorieen = $conn->query("SELECT * FROM categorie")->fetchAll();

    // Recepten ophalen, samen met de naam van de categorie
    $query = "SELECT demo_recept.*, categorie.naam AS categorie
              FROM demo_recept
              LEFT JOIN categorie ON demo_recept.categorie_id = categorie.id";

    // Is er op een categorie geklikt? Dan alleen die tonen
    if (isset($_GET['categorie'])) {
        $query .= " WHERE demo_recept.categorie_id = :categorie";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':categorie', $_GET['categorie']);
    } else {
        $stmt = $conn->prepare($query);
    }
    $stmt->execute();
    $recepten = $stmt->fetchAll();

    include __DIR__ . '/../view/overzicht_view.php';

} catch (PDOException $e) {
    echo "<p>Fout!</p>";
    echo "<p>Foutmelding: " . $e->getMessage() . "</p>";
    exit;
}
