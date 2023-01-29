<?php
// Paramètres de connexion
$host = 'localhost';
$dbname = 'autocompletion';
$username = 'root';
$password = '';
// Connexion à la base de données
try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

} catch (PDOException $e) {

    die("Erreur lors de la connexion : " . $e->getMessage());
}

