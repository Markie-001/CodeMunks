<?php

$host = 'sql___.infinityfree.com';   // hostname from step 1
$db   = 'if0_43343813_recept';
$user = 'if0_43343813';
$pass = 'Iw9PQFdKB7p';                       // the PASSWORD on this page (click the eye icon)

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $conn = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
