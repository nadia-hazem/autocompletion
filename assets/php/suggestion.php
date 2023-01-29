<?php

require_once 'db.php';

$get = $conn->prepare("SELECT vernaculaire, latin, famille FROM arbres");
$get->execute();
$result = $get->fetchAll(PDO::FETCH_ASSOC);
// encodage en JSON
$myJSON = json_encode($result);

echo $myJSON;