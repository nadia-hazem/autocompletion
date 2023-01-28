<?php 
require_once 'includes/dbconnect.php'; 
require_once 'includes/functions.php';
?>

<?php

// Récupération du terme de recherche
$search = $_GET['search'];

// Préparation de la requête pour les résultats qui commencent par le terme de recherche
$query = $pdo->prepare("SELECT vernaculaire, latin, famille FROM arbres WHERE vernaculaire LIKE :search OR latin LIKE :search OR famille LIKE :search");
$query->execute(array(':search' => $search));

// Récupération des résultats
$results = $query->fetchAll();
$results1 = array();

// Parcours des résultats de la recherche
foreach ($results as $result) {
    // Vérifie si le résultat commence par les caractères de recherche
    if (startsWith($result, $search)) {
        // Ajout du résultat au tableau "startsWith"
        $results1[] = $result;
    }
}

// Préparation des données à renvoyer
$data = array(
    'startsWith' => $results1,
    'contains' => $results
);

// Configuration de l'entête HTTP pour indiquer que le contenu est du JSON
header('Content-Type: application/json');

// Renvoi des données en JSON
echo json_encode($data);

// Fermeture de la connexion à la base de données
$pdo = null;
?>