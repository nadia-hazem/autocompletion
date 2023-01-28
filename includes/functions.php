<?php
// Fonction pour vérifier si une chaîne de caractères commence par une autre chaîne de caractères
function startsWith($str, $search) {
    return substr($str, 0, strlen($search)) === $search;
}
