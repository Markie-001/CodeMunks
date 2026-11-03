<?php

require __DIR__ . '/config.php';

$id  = $_GET['id'];
$tab = $_GET['tab'] ?? 'beschrijving';

if (!in_array($tab, ['beschrijving', 'ingredienten', 'instructie'])) {
    $tab = 'beschrijving';
}

$stmt = $conn->prepare("SELECT * FROM demo_recept WHERE id = :id");
$stmt->execute(['id' => $id]);
$recept = $stmt->fetch();

include __DIR__ . '/view/details_view.php';