<?php
// Paramètres de connexion
$host = 'localhost';
$db   = 'autocompletion';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// Connexion à la base de données
try {
    $conn = "mysql:host=$host;dbname=$db;charset=$charset";
    $pdo = new PDO($conn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur lors de la connexion : " . $e->getMessage());
}
?>